<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\Question;
use App\Models\Accessories;
use App\Models\Age;
use App\Models\Condition;
use App\Models\SellRequest;
use App\Models\DeviceConfig;
use App\Models\Series;
use App\Models\ProductConfigPrice;
use Mail;

class ProductController extends Controller
{
    public $sellprice = '';
    public $userdata = '';
    public $loggedinUser = '';
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->sellprice = $request->session()->get('sellprice');
        $this->userdata = $request->session()->get('userData');
        if($this->userdata != ''){
            $this->loggedinUser = User::where('mobile', $this->userdata['mobile'])->first();
        }
        
    }
    //
    public function index($slug,Request $request){
       
        try {
            $user = $this->userdata;
            $brand = Brand::where('slug', $slug)->firstOrFail();
            $category_id = $request->session()->get('selling_category');
            $request->session()->put('selling_brand', $brand->id);
            $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
            $tobSellingProducts = Product::inRandomOrder()->limit(10)->get();
           
            $products = Product::where('brand_id', $brand->id)
            ->where('category_id', $category_id)
            ->orderBy('name', 'asc')
            ->get();
            if($category_id == "12"){
                return view('vehicle.index',compact('products','brand','user','tobSellingBrands','tobSellingProducts'));
            } else {
                return view('product.index',compact('products','brand','user','tobSellingBrands','tobSellingProducts'));
            }
            
            } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function view($slug,Request $request){
        $user = $this->userdata;
        try {
            $brand_id = $request->session()->get('selling_brand');
            $product = Product::where('slug', $slug)->firstOrFail();  //Product::find($id);
            if($request->session()->get('selling_category')){
                $request->session()->put('selling_category', $product->category_id);
            }
            $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
            $tobSellingProducts = Product::inRandomOrder()->limit(10)->get();
            $series = Series::find($product->series_id);
            if($product->category_id == "2"){
                $year = '';
                if($brand_id == "1"){
                    $processer = DeviceConfig::where('type', "processer")->where('brand_id', $brand_id)->orderBy('value', 'asc')->get();
                    $year = DeviceConfig::where('type', "year")->orderBy('value', 'asc')->get();
                } else {
                    $processer = DeviceConfig::where('type', "processer")->whereNull('brand_id')->orderBy('value', 'asc')->get();
                }

                $ram = DeviceConfig::where('type', "ram")->orderBy('id', 'asc')->get();
                $hdd = DeviceConfig::where('type', "hdd")->orderBy('id', 'asc')->get();
                $screen = DeviceConfig::where('type', "screen")->orderBy('value', 'asc')->get();
                $graphic = DeviceConfig::where('type', "graphic")->orderBy('value', 'asc')->get();

                return view('product.laptop-view',compact('series','product','user','tobSellingBrands','tobSellingProducts','processer','ram','hdd','screen','graphic','year'));
            } else {
                return view('product.view',compact('series','product','user','tobSellingBrands','tobSellingProducts'));                
            }
            
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function productQuote(Request $request){
        $user = $this->userdata;
        $product = Product::find($this->sellprice['product_id']);
        $calculatedData = $this->sellprice;
        $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
        $tobSellingProducts = Product::inRandomOrder()->limit(10)->get();

        return view('product.quote',compact('product','user','calculatedData','tobSellingBrands','tobSellingProducts'));
    }

    public function checkOut(){
        
        $calculatedData = $this->sellprice;
        if($calculatedData){
            $user = $this->loggedinUser;
            $product = Product::find($this->sellprice['product_id']);
            return view('product.checkout',compact('product','calculatedData','user'));
        } else {
            return redirect('/sell-old-used-product');          
        }
        
    }

    public function confirmPickup(Request $request) {
        $user = $this->userdata;
        $data = $request->all();
        $device_condition = array(
            'question_id' => $this->sellprice['question_id'],
            'accessories' => (isset($this->sellprice['accessories']))?$this->sellprice['accessories']:'',
            'age_id' => $this->sellprice['age_id'],
            'condition_id' => $this->sellprice['condition_id'],
        );
        $product = Product::find($data['product_id']);
        $orderData = array(
            'user_id' => $data['user_id'],
            'product_id' => $data['product_id'],
            'device_name' => $product->name,
            'variation_type' => $data['variation_type'],
            'device_condition' => json_encode($device_condition),
            'service_no' => rand(00000000,99999999),
            'amount' => $this->sellprice['exact_price'],
            'payment_mode' => $data['payment_mode'],
            'pickup_schedule' => $data['pickup_schedule'],
            'pickup_address' => $data['address_1'],
            'pickup_city' => $data['city'],
            'pickup_state' => $data['state'],
            'pincode' => $data['pincode'],
            'status' => 'pending',
        );

        $order = Order::create($orderData)->toArray();

        //Order Mail
        $age = array();
        if (isset($device_condition['age_id'])) {
            $age = Age::findOrFail($device_condition['age_id'])->toArray();
        }

        $condition = array();
        if (isset($device_condition['condition_id'])) {
            $condition = Condition::findOrFail($device_condition['condition_id'])->toArray();
        }
        
        $accessories = array();
        if(isset($device_condition['accessories']) && $device_condition['accessories'] != ""){
            $accessories = Accessories::whereIn('id', $device_condition['accessories'])->get()->toArray();
        }
        
        $orderData['questions'] = array();
        if(isset($device_condition['question_id'])){
            $i = 0;
            foreach ($device_condition['question_id'] as $key => $value) {
                $question = DB::table('calculation_question')
                ->where('calculation_question.id', '=', $key)
                ->select('calculation_question.question')->first();
                if(isset($question)){
                    $orderData['questions'][$i] = $question->question;
                }
                $i++;
            }
        }

        $orderData['age'] = $age['age'];
        $orderData['condition'] = $condition['condition'];
        $orderData['accessories'] = $accessories;


        $userData = array(
            'name' => $data['name'],
            'email' => $data['email'],
        );

        $user = User::findOrFail($data['user_id']);
        $user->update($data);

        Mail::send('emails.order', $orderData, function ($m) use ($user) {
            $m->from('service@bikriworld.com', 'Bikriworld');
            $m->to($user->email, $user->name)->subject('Bikriworld Order Placed Successfully!');
        });

        Mail::send('emails.order', $orderData, function ($m) use ($user) {
            $m->from('service@bikriworld.com', 'Bikriworld');
            $m->to('pramod.kr.14855@gmail.com', "Admin User")->subject('Bikriworld Got new Order Request!');
        });
        
        $request->session()->put('orderData', $order);
        return redirect('/order-success');
    }

    public function orderSuccess(Request $request){
        $user = $this->userdata;
        $order = $request->session()->get('orderData');
        $order['product_name'] = Product::findOrFail($order['product_id'])->name;
        return view('product.order-success',compact('user','order'));
    }

    public function manageOrder($id){
        $user = $this->userdata;
        $order = Order::where('service_no',$id)->first();
        $order['product_name'] = Product::findOrFail($order->product_id)->name;
        return view('product.order-manage',compact('user','order'));
    }

    public function updateOrder(Request $request){
        $user = $this->userdata;
        $data = $request->all();
        try {
            $order = Order::findOrFail($data['order_id']);
            $order->update($data);
            return response()->json(array(true),$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
        
        }
        
    }

    public function cancelOrder(Request $request){
        $data = $request->all();
        try {
            $data['status'] = 'cancelled';
            $order = Order::findOrFail($data['order_id']);
            $order->update($data);
            return redirect('/manage-order/'.$order->service_no);
        } catch(\Illuminate\Database\QueryException $e){
        
        }
    }

    public function add(Request $request){
        $user = $this->userdata;
        $brands = Brand::all();
        $categories = Categories::all();
        $message = "";
        return view('product.add-device',compact('user','brands','categories','message'));
    }

    public function submitSellRequest(Request $request){
        $data = $request->all();
        $data['question_id'] = json_encode($data['question_id']);
        $contact = SellRequest::create($data);
        $user = $this->userdata;
        $brands = Brand::all();
        $categories = Categories::all();
        $message = "Sell Request Has been submitted successfully";
        return view('product.add-device',compact('user','brands','categories','message'));
    }

    public function getQuestion(Request $request){
        $data = $request->all();
        $questions = Question::select('id', 'question as name')
                           ->where('category_id', '=', $data['category_id'])
                           ->get()->toArray();  
        $age = Age::select('id', 'age as name')
        ->where('category_id', '=', $data['category_id'])
        ->get()->toArray();                                     
        $accessories = Accessories::where('category_id', $data['category_id'])->get()->toArray();

        $questions = array_merge($questions,$accessories,$age);

        return response()->json($questions,$this->_statusOK);
    }

    public function getProductConfigPrice(Request $request){
        $data = $request->all();
        $productConfigPrice = ProductConfigPrice::where('config_id', $data['config_id'])->where('product_id', $data['product_id'])->first();

        $price = (isset($productConfigPrice->price))?$productConfigPrice->price:"0";
        return response()->json($price,$this->_statusOK);
    }

    
    public function testMail(Request $request){
        $user = $this->userdata;
        $user = array(
            'name' => 'Akash Dutta',
            'email' => 'akashdutta.scriptcrown@gmail.com',
        );
        $orderData = array(
            'service_no' => rand(00000000,99999999),
            'amount' => "2000",
            'payment_mode' => "UPI",
            'pickup_schedule' => "14 Apr, 2022",
            'pickup_address' => "123 st, Bhattanagar, Liluah",
            'pickup_city' => 'Howrah',
            'pickup_state' => 'West Bengal',
            'pincode' => '711203',
            'status' => 'pending',
        );
        Mail::send('emails.order', $orderData, function ($m) use ($user) {
            $m->from('service@bikriworld.com', 'Bikriworld');
            //$m->to($user->email, $user->name)->subject('Your Reminder!');
            $m->to($user['email'], $user['name'])->subject('Bikriworld Test Mail!');
        });
        echo "Bikriworld Test Mail 1";
    }

}
