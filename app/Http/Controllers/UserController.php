<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
//use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;
    public $sellprice = '';
    public $user = '';

    public function __construct(Request $request)
    {
        $userdata = $request->session()->get('userData');
        $this->sellprice = $request->session()->get('sellprice');
        $this->user = User::where('mobile', $userdata['mobile'])->first();
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

    public function payments(){
        $user = $this->user;

        return view('users.payments',compact('user'));
    }

    public function dashboard(){
        $user = $this->user;
        return view('users.dashboard',compact('user'));
    }


}
