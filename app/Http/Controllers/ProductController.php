<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;

class ProductController extends Controller
{
    public $sellprice = '';
    public $userdata = '';
    public $loggedinUser = '';

    public function __construct(Request $request)
    {
        $this->sellprice = $request->session()->get('sellprice');
        $this->userdata = $request->session()->get('userData');
        $this->loggedinUser = User::where('mobile', $this->userdata['mobile'])->first();
        
    }
    //
    public function index($id){
        $user = $this->userdata;
        try {
            $products = Product::where('brand_id', $id)->get();
            return view('product.index',compact('products','user'));
            } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function view($id){
        $user = $this->userdata;
        try {
            $product = Product::find($id);
            return view('product.view',compact('product','user'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function productQuote(Request $request){
        $user = $this->userdata;
        $product = Product::find($this->sellprice['product_id']);
        
        return view('product.quote',compact('product','user'));
    }

    public function checkOut(){
        
        
        $sellprice = $this->sellprice;
        if($sellprice){
            $user = $this->loggedinUser;
            $product = Product::find($this->sellprice['product_id']);
            return view('product.checkout',compact('product','sellprice','user'));
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
            'amount' => $data['amount'],
            'payment_mode' => $data['payment_mode'],
            'pickup_schedule' => $data['pickup_schedule'],
            'pickup_address' => $data['address_1'],
            'pickup_city' => $data['city'],
            'pickup_state' => $data['state'],
            'pincode' => $data['pincode'],
        );
        $order = Order::create($orderData);

        $userData = array(
            'name' => $data['name'],
            'email' => $data['email'],
        );

        $user = User::findOrFail($data['user_id']);
        $user->update($data);

        return redirect('/order-success/'.$order->id);
    }

    public function orderSuccess($order_id){
        $user = $this->userdata;
        $order = Order::findOrFail($order_id);
        return view('product.order-success',compact('user','order'));
    }


}
