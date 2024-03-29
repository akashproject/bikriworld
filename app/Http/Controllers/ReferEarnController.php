<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ReferEarnController extends Controller
{
    //
    public $_statusOK = 200;
    public $_statusErr = 500;
    public $sellprice = '';
    public $user = null;

    public function __construct(Request $request)
    {
        $userdata = $request->session()->get('userData');
        if($userdata){
            $this->sellprice = $request->session()->get('sellprice');
            $this->user = User::where('mobile', $userdata['mobile'])->first();
        } 
    }

    public function index(Request $request){
       
        try {

            $user = $this->user;
            $shareLink = null;
            if($user){
                $shareLink = route('categories-index').'?ref='.$user->referral_code;
            }
            
            return view('refer-earn.index',compact('user','shareLink'));
            } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
