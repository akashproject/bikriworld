<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            //$orders = Order::all();
           $orders = DB::table('orders')
            ->join('product', 'product.id', '=', 'orders.product_id')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'product.name as product_name','users.name as user_fullname')
            ->distinct()
            ->get();
            return view('order.index',compact('orders'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }

    public function show($id)
    {
        try {
            $order = DB::table('orders')
            ->join('product', 'product.id', '=', 'orders.product_id')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->where('orders.id', '=', $id)
            ->select('orders.*','product.*','users.*', 'orders.id as order_id','product.name as product_name','users.name as user_fullname')
            ->first();
            return view('order.show',compact('order'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        $data = $request->all();
        $validatedData = $request->validate([
            'status' => 'required',
        ]);

        $institute = Order::findOrFail($data['order_id']);
            $institute->update($data);
        
        return redirect('/order/'.$data['order_id']);
    }
}
