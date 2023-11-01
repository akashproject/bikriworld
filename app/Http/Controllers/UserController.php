<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Address;
use Illuminate\Support\Facades\DB;
use Mail;

class UserController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;
    public $sellprice = '';
    public $user = '';

    public function __construct(Request $request)
    {
        $userdata = $request->session()->get('userData');
        if($userdata){
            $this->sellprice = $request->session()->get('sellprice');
            $this->user = User::where('mobile', $userdata['mobile'])->first();
        } else {
            return redirect('/');          
        }
    }

    public function dashboard(){
        $user = $this->user;
        return view('users.dashboard',compact('user'));
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }

    public function pickups(){
        $user = $this->user;
        //$order = Order::where('user_id', $user->id)->get();

        $order = DB::table('orders')
            ->join('product', 'orders.product_id', '=', 'product.id')
            ->where('orders.user_id', '=', $user->id)
            ->select('orders.*', 'product.*')
            ->distinct()
            ->get();
        return view('users.pickups',compact('user','order'));
    }

    public function service(){
        $user = $this->user;
        //$order = Order::where('user_id', $user->id)->get();

        $order = DB::table('repair_orders')
            ->join('product', 'repair_orders.product_id', '=', 'product.id')
            ->where('repair_orders.user_id', '=', $user->id)
            ->select('repair_orders.*', 'product.*')
            ->distinct()
            ->get();
        return view('users.services',compact('user','order'));
    }

    public function payments(Request $request){
        $user = $this->user;
        $payment = Payment::where('user_id', $user->id)->first();
        return view('users.payments',compact('user','payment'));
    }

    public function addresses(){
        $user = $this->user;
        $address = Address::where('user_id', $this->user->id)->get();
        return view('users.address',compact('user','address'));
    }

    public function bwEarning(){
        $user = $this->user;
        return view('users.bw-earning',compact('user'));
    }

    public function confirmWithdrawal(Request $request){
        $user = $this->user;
        if(isset($user->email)) {
            Mail::raw('Bikriworld has new Withdrawl Request', function ($message) use ($user) {
                $message->from('service@bikriworld.com', 'Bikriworld');
                $message->to('akashdutta.scriptcrown@gmail.com');
                $message->subject('Bikriworld has new Withdrawl Request - '.$user->mobile);
            });
        }
        $request->session()->put('message', 'Bw Coin withdrawal request submitted successfully! Amount will be credit within 7 working days');

        return redirect('bw-earning');
    }
    

    public function getAddress(Request $request){
        $user = $this->user;
        $data = $request->all();
        try {
            $address = Address::where('user_id',  $this->user->id)->where('type', $data['type'])->first();
            return response()->json($address,$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
        }
       

    }

    public function addAddress(){
        $user = $this->user;
        return view('users.add-address',compact('user'));
    }

    public function editAddress($id){
        $user = $this->user;
        $address = Address::find($id);
        return view('users.edit-address',compact('user','address'));
    }

    public function deleteAddress($id){
        $address = Address::find($id);
        $address->delete();
        return redirect('/addresses')->with('message','address Information has been deleted!');;
    }

    public function saveAddress(Request $request){

        $data = $request->all();
        $validatedData = $request->validate([
            'address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'type' => 'required',
        ]);

        
        if($data['address_id'] <= 0){
            Address::create($data);
        } else {
            $address = Address::findOrFail($data['address_id']);
            $address->update($data);
        }
        return redirect('/addresses')->with('message','address Information has been updated!');;
    }

    public function saveInfo(Request $request){
        $user = $this->user;
        $data = $request->all();
        $user = User::find($data['user_id']);
        $user->update($data);
        return redirect('/dashboard')->with('message','User Information has been updated!');;
    }


    public function savePayment(Request $request){
        $data = $request->all();
        $payment = Payment::where('user_id', $this->user->id)->first();
        if($payment){
            $payment->update($data);
        } else {
            Payment::create($data);
        }
        return redirect('/payments')->with('message','Payment Information has been updated!');
    }

    public function contact(){
        $user = $this->user;
        return view('users.contact',compact('user'));
    }

    public function aboutUs(){
        $user = $this->user;
        return view('users.about',compact('user'));
    }

    public function privacyPolicy(){
        $user = $this->user;
        return view('users.privacy',compact('user'));
    }

    public function termsConditions(){
        $user = $this->user;
        return view('users.terms',compact('user'));
    }




}
