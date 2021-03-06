<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Age;
use App\Models\Accessories;
use App\Models\Question;
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
            
            $device_condition = json_decode($order->device_condition,true);
            
            $age = Age::findOrFail($device_condition['age_id'])->first();
            $accessories = array();
            if($device_condition['accessories']){
                $accessories = Accessories::whereIn('id', $device_condition['accessories'])->get();
            }
            
            
            $questions = array();
            foreach ($device_condition['question_id'] as $key => $value) {
                $question = DB::table('calculation_question')
                ->where('calculation_question.id', '=', $key)
                ->select('calculation_question.question')->first();
                if(isset($question)){
                    $questions[$question->question] = ($value == '1')?"Yes":"No";
                }
                
            }

            return view('order.show',compact('order','age','accessories','questions'));
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
