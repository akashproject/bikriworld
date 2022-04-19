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
use App\Models\SellRequest;

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
            $products = Product::where('brand_id', $id)
            ->where('category_id', $category_id)
            ->get();

            return view('product.index',compact('products','user','tobSellingBrands','tobSellingProducts'));
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
        $request->session()->put('orderData', $order);
        return redirect('/order-success');
    }

    public function orderSuccess(Request $request){
        $user = $this->userdata;
        $order = $request->session()->get('orderData');
        return view('product.order-success',compact('user','order'));
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

    


}
