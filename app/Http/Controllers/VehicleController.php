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
use App\Models\Accessories;
use App\Models\Condition;

use Mail;


class VehicleController extends Controller
{
    //
    public $vehicleData = '';
    public $userdata = '';
    public $loggedinUser = '';
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->vehicleData = $request->session()->get('vehicleData');
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
            $city = City::orderBy('name')->get();
            
            $tobSellingBrands = Brand::where('category_id', 'like', '%"' . $id . '"%')->inRandomOrder()->limit(10)->get();
            $tobSellingProducts = Product::where('category_id', 'like', '%"' . $id . '"%')->inRandomOrder()->limit(10)->get();
            $series = Series::find($vehicle->series_id);
            

            return view('vehicle.view',compact('series','vehicle','user','tobSellingBrands','tobSellingProducts','year','km','city'));       
            
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function givenDocuments(Request $request){
        $user = $this->userdata;
        $data = $request->all();
        $category_id = $request->session()->get('selling_category');
        $vehicleData = array(
            'vehicle_id' => $data['vehicle_id'],
            'variation_type' => "Year :".$data['year'].' | Kilometer Driven :'.$data['kmdriven'].' | Registration City :'.$data['city']
        );
        $request->session()->put('vehicleData', $vehicleData);

        $product = Product::find($data['vehicle_id']);
        $accessories = Accessories::where('category_id', $category_id)->get();
        $veriationType = $vehicleData["variation_type"];

        $tobSellingBrands = Brand::where('category_id', 'like', '%"' . $category_id . '"%')->inRandomOrder()->limit(10)->get();
        $tobSellingProducts = Product::where('category_id', 'like', '%"' . $category_id . '"%')->inRandomOrder()->limit(10)->get();

        return view('vehicle.valid-document',compact('accessories','product','user','tobSellingBrands','tobSellingProducts','veriationType'));
    }

    public function vehicleCondition(Request $request){
        $user = $this->userdata;
        $vehicleData = $request->session()->get('vehicleData');
        $data = $request->all();
        if (isset($data['accessories'])) {
            $vehicleData['accessories'] = $data['accessories'];
        } 
        
        $category_id = $request->session()->get('selling_category');
        $request->session()->put('vehicleData', $vehicleData);
        
        $product = Product::find($vehicleData['vehicle_id']);
        $conditions = Condition::where('category_id', $category_id)->get();
        $veriationType = $vehicleData['variation_type'];

        $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
        $tobSellingProducts = Product::inRandomOrder()->limit(10)->get();

        return view('vehicle.vahicle-condition',compact('conditions','product','user','tobSellingBrands','tobSellingProducts','veriationType'));
    }

    public function bookAppointment(Request $request){
        
        $user = $this->loggedinUser;
        $data = $request->all();
        $vehicleData = $request->session()->get('vehicleData');
        $vehicleData['condition_id'] = $data['condition_id'];        
        $request->session()->put('vehicleData', $vehicleData);

        $product = Product::find($vehicleData['vehicle_id']);
        return view('vehicle.book-appointment',compact('product','vehicleData','user'));
        
    }

    public function confirmBooking(Request $request) {
        $user = $this->userdata;
        $data = $request->all();
        $device_condition = array(
            'accessories' => (isset($this->vehicleData['accessories']))?$this->vehicleData['accessories']:'',
            'condition_id' => $this->vehicleData['condition_id']
        );
        $orderData = array(
            'user_id' => $data['user_id'],
            'product_id' => $data['product_id'],
            'variation_type' => $data['variation_type'],
            'device_condition' => json_encode($device_condition),
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
