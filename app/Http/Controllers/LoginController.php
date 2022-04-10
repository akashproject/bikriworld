<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
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
        $otpValue = array('otp'=>'1234');
        return response()->json($otpValue, $this->_statusOK);
    }

    public function accessProfile(Request $request){
        $data = $request->all();
        $user = User::where('mobile', $data['mobile'])->get();
        if($user->count()){
            $request->session()->put('userData', $data);
        } else {
            User::create(array('mobile',$data['mobile']));
        }
        return response()->json(['true'],$this->_statusOK);
    }
}
