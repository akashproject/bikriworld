<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\Question;
use App\Models\SellRequest;
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
    public function index($id,Request $request){
        $user = $this->userdata;
        $category_id = $request->session()->get('selling_category');
        try {
            $tobSellingBrands = Brand::all();
            $tobSellingProducts = Product::all();
            $brand = Brand::find($id);
            $products = Product::where('brand_id', $id)
            ->where('category_id', $category_id)
            ->orderBy('name', 'asc')
            ->get();

            return view('product.index',compact('products','brand','user','tobSellingBrands','tobSellingProducts'));
            } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function view($id,Request $request){
        $user = $this->userdata;
        try {
            $product = Product::find($id);
            if($request->session()->get('selling_category')){
                $request->session()->put('selling_category', $product->category_id);
            }
            $tobSellingBrands = Brand::all();
            $tobSellingProducts = Product::all();
            return view('product.view',compact('product','user','tobSellingBrands','tobSellingProducts'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function productQuote(Request $request){
        $user = $this->userdata;
        $product = Product::find($this->sellprice['product_id']);
        $calculatedData = $this->sellprice;
        $tobSellingBrands = Brand::all();
        $tobSellingProducts = Product::all();

        return view('product.quote',compact('product','user','calculatedData','tobSellingBrands','tobSellingProducts'));
    }

    public function checkOut(){
        
        $calculatedData = $this->sellprice;
        if($calculatedData){
            $user = $this->loggedinUser;
            $product = Product::find($this->sellprice['product_id']);
            return view('product.checkout',compact('product','calculatedData','user'));
        } else {
            return redirect('/selling-categories');          
        }
        
    }

    public function confirmPickup(Request $request) {
        $user = $this->userdata;
        $data = $request->all();


        $orderData = array(
            'user_id' => $data['user_id'],
            'product_id' => $data['product_id'],
            'variation_type' => $data['variation_type'],
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
        $questions = Question::where('category_id', $data['category_id'])->get();
        return response()->json($questions,$this->_statusOK);
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
            $m->to($user['email'], $user['name'])->subject('Bikriworld Order Placed Successfully!');
        });
        echo "mail sent successfully";
    }

}
