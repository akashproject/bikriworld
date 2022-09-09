<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;
    public $sellprice = '';
    public $userdata = '';

    public function __construct(Request $request)
    {
        $this->userdata = $request->session()->get('userData');
        $this->sellprice = $request->session()->get('sellprice');
    }

    public function submitMobileOtp(Request $request){

        $otpValue = rand(000000,999999);
        
        // $url = "https://2factor.in/API/V1/30060f8f-034f-11eb-9fa5-0200cd936042/SMS/+919836555023/990375/OTP1";

        // $curl = curl_init($url);
        // curl_setopt($curl, CURLOPT_URL, $url);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // $resp = curl_exec($curl);
        // curl_close($curl);

        return response()->json($otpValue, $this->_statusOK);
    }

    public function isUserExist(Request $request){
        $data = $request->all();
        $user = User::where('mobile', $data['mobile'])->where('password', $data['password'])->first();
        if($user){
            $request->session()->put('userData', $user->toArray());
            $val = array(
                'userrecord' => 'exist'
            );
            return response()->json(['exist'],$this->_statusOK);
        } else {
            $val = array(
                'userrecord' => 'not-exist'
            );
            return response()->json($val,$this->_statusOK);
        }
    }

    public function registerUser(Request $request){
        $data = $request->all();
        $user = User::create($data)->toArray();
        $payment = Payment::create(array('user_id'=> $user['id']));
        $request->session()->put('userData', $data);
    }

    public function accessProfile(Request $request){
        $data = $request->all();
        $user = User::where('mobile', $data['mobile'])->where('password', $data['password'])->first();
        if($user){
            $request->session()->put('userData', $user->toArray());
            return response()->json(['true'],$this->_statusOK); 
        } else {
            $val = array(
                'userrecord' => 'not-exist'
            );
            return response()->json($val,$this->_statusOK);
        }

    }





}
