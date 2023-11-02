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
use App\Models\Parts;
use App\Models\RepairOrders;


use Mail;

class RepairController extends Controller
{
    //

    public function __construct(Request $request)
    {
        $this->sellprice = $request->session()->get('sellprice');
        $this->userdata = $request->session()->get('userData');
        if($this->userdata != ''){
            $this->loggedinUser = User::where('mobile', $this->userdata['mobile'])->first();
        }
        
    }
    
    public function view($slug,Request $request){
        $user = $this->userdata;
        try {
            $brand_id = $request->session()->get('selling_brand');
            $product = Product::where('slug', $slug)->firstOrFail();  //Product::find($id);          
            $parts = Parts::where('category_id',$product->category_id)->orderBy('name','asc')->get();
            $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
            $tobSellingProducts = Product::inRandomOrder()->limit(10)->get();

            return view('repair.view',compact('product','user','parts','tobSellingBrands','tobSellingProducts'));       
            
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function bookRepair(Request $request){
        try {
            $user = $this->loggedinUser;
            $data = $request->all();
           
            $dataParts = json_encode($data['parts']);
            $parts = Parts::wherein('id',$data['parts'])->get()->toArray();
            
            $product = Product::find($data['product_id']);
            return view('repair.checkout',compact('product','user','parts','dataParts'));       
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function confirmBooking(Request $request){
        try {
            $data = $request->all();
           
            $user = $this->userdata;
            $product = Product::find($data['product_id']);

            print_r($data['parts']); exit;
            $orderData = array(
                'user_id' => $data['user_id'],
                'product_id' => $data['product_id'],
                'device_name' => $product->name,
                'service_no' => rand(00000000,99999999),
                'parts' => $data['parts'],
                'amount' => base64_decode($data['amount']),
                'schedule' => $data['pickup_schedule'],
                'address' => $data['address_1'],
                'city' => $data['city'],
                'state' => $data['state'],
                'pincode' => $data['pincode'],
                'status' => 'pending',
            );
            
            $order = RepairOrders::create($orderData)->toArray();
        
            $userData = array(
                'name' => $data['name'],
                'email' => $data['email'],
            );

            $user = User::findOrFail($data['user_id']);
            $user->update($data);
    
            // if(isset($user->email)) {
            //     Mail::send('emails.order', $orderData, function ($m) use ($user) {
            //         $m->from('service@bikriworld.com', 'Bikriworld');
            //         $m->to($user->email, $user->name)->subject('Bikriworld Order Placed Successfully!');
            //     });
    
            //     Mail::send('emails.order', $orderData, function ($m) use ($user) {
            //         $m->from('service@bikriworld.com', 'Bikriworld');
            //         $m->to('pramod.kr.14855@gmail.com', "Admin User")->subject('Bikriworld Got new Order Request From - '.$user->mobile);
            //     });
            // }


            $request->session()->put('repairOrderData', $order);
            return redirect('/order-repair-success');

        } catch(\Illuminate\Database\QueryException $e){
            //var_dump($e);
        }
    }

    public function orderSuccess(Request $request){
        try {
            $user = $this->userdata;
            $order = $request->session()->get('repairOrderData');
            $order['product_name'] = Product::findOrFail($order['product_id'])->name;
            $parts = array();
            
            if(isset($order['parts']) && $order['parts'] != ""){
                $parts = Parts::whereIn('id', json_decode($order['parts']))->get()->toArray();
            }

            $order['parts'] = $parts;
            return view('repair.order-success',compact('user','order'));
           
        } catch(\Illuminate\Database\QueryException $e){
            //var_dump($e);
        }
    }

}
