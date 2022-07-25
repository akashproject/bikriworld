<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Categories;
use App\Models\Series;
use App\Models\User;
use App\Models\VehicleVariation;
use App\Models\Order;
use App\Models\City;
use Mail;


class VehicleController extends Controller
{
    //
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

    public function view($id,Request $request){
        $user = $this->userdata;
        try {
            $brand_id = $request->session()->get('selling_brand');
            $vehicle = Product::find($id);
            if($request->session()->get('selling_category')){
                $request->session()->put('selling_category', $vehicle->category_id);
            }
            $year = VehicleVariation::where('type', "year")->get();
            $km = VehicleVariation::where('type', "km")->get();
            $city = City::all();
            
            $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
            $tobSellingProducts = Product::inRandomOrder()->limit(10)->get();
            $series = Series::find($vehicle->series_id);
            

            return view('vehicle.view',compact('series','vehicle','user','tobSellingBrands','tobSellingProducts','year','km','city'));       
            
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    

    public function bookAppointment(Request $request){
        
        $user = $this->loggedinUser;
        $data = $request->all();
        $vehicleData = array(
            'variation_type' => "Year :".$data['year'].' | Kilometer Driven :'.$data['kmdriven']
        );
        $request->session()->put('vehicleData', $vehicleData);

        $product = Product::find($data['vehicle_id']);
        return view('vehicle.book-appointment',compact('product','vehicleData','user'));
        
    }

    public function confirmBooking(Request $request) {
        $user = $this->userdata;
        $data = $request->all();
        
        $orderData = array(
            'user_id' => $data['user_id'],
            'product_id' => $data['product_id'],
            'variation_type' => $data['variation_type'],
            'device_condition' => json_encode(array()),
            'service_no' => rand(00000000,99999999),
            'amount' => "0.00",
            'payment_mode' => "Not Defined",
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
            $m->to($user->email, $user->name)->subject('Bikriworld Booking Appointment Placed Successfully!');
        });

        Mail::send('emails.order', $orderData, function ($m) use ($user) {
            $m->from('admin@bikriworld.com', 'Bikriworld');
            $m->to('pramod.kr.14855@gmail.com', $user->name)->subject('Bikriworld Got new Booking Request!');
        });

        $request->session()->put('orderData', $order);
        return redirect('/order-success');
    }
}
