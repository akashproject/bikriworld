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
        try {
            $requestData = $request->all();
            $url = "https://2factor.in/API/V1/30060f8f-034f-11eb-9fa5-0200cd936042/SMS/".$requestData['mobile']."/AUTOGEN/BKWLG";
      
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      
            $resp = curl_exec($curl);
            curl_close($curl);
            return response()->json($resp, $this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], 401);
        }
    }

    public function verifyOtp(Request $request){
        try {
          $requestData = $request->all();
    
          $url = "https://2factor.in/API/V1/30060f8f-034f-11eb-9fa5-0200cd936042/SMS/VERIFY/".$requestData['session_id']."/".$requestData['otp_value'];
          $curl = curl_init($url);
          curl_setopt($curl, CURLOPT_URL, $url);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          
          $resp = curl_exec($curl);
          curl_close($curl);
          return response()->json($resp, $this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
          return response()->json(['error' => $e->errorInfo[2]], 401);
        }
      }

   
      public function isUserExist(Request $request){
        try {
            $requestData = $request->all();
            $exist = User::where('mobile', $requestData['mobile'])->count();
            return response()->json($exist, $this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], 401);
        }
    }

    public function register(Request $request){
        if($request->session()->get('userData')){
            return redirect('/');
        }

        return view('users.register');
    }

    public function registerUser(Request $request){
        $data = $request->all();
        $data['referral_code'] ="BW_".$this->random_strings(8);
        if (isset($data['referral_code']) && $data['referral_code'] !='') {
            $referredUser = User::where('referral_code',$data['referral_code'])->first();
            if($referredUser !== null){
                $data['referred_by'] = User::where('referral_code',$data['referral_code'])->first()->id;
            } else {
                return false;
            }
        }
        $user = User::create($data)->toArray();
        $payment = Payment::create(array('user_id'=> $user['id']));
        $request->session()->put('userData', $data);
    }

    public function accessProfile(Request $request){
        $data = $request->all();
        $user = User::where('mobile', $data['mobile'])->first();
        if($user){
            $request->session()->put('userData', $user->toArray());
        } else {
            $createData = array(
                'mobile'=> $data['mobile'],
                'name'=> $data['name'],
                'email'=> $data['email'],
                'referral_code'=> "BW_".$this->random_strings(8),
                'is_device'=> "1",
            );

            if (isset($data['referral_code']) && $data['referral_code'] !='') {
                $referredUser = User::where('referral_code',$data['referral_code'])->first();
                if($referredUser !== null){
                    $createData['referred_by'] = $referredUser->id;
                } else {
                    return false;
                }
            } else if(isset($_COOKIE['referral_code']) && $_COOKIE['referral_code'] !=''){
                $referredUser = User::where('referral_code',$_COOKIE['referral_code'])->first();
                if($referredUser !== null){
                    $createData['referred_by'] = $referredUser->id;
                } else {
                    return false;
                }
            }
            $user = User::create($createData)->toArray();
            $payment = Payment::create(array('user_id'=> $user['id']));
            $request->session()->put('userData', $user);
        }

        return response()->json(['true'],$this->_statusOK);

    }

    public function random_strings($length_of_string)
    {
    
        // String of all alphanumeric character
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
        // Shuffle the $str_result and returns substring
        // of specified length
        return substr(str_shuffle($str_result),
                        0, $length_of_string);
    }





}
