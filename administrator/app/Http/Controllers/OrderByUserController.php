<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Age;
use App\Models\Accessories;
use App\Models\Question;
use App\Models\Condition;
use Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Address;
use App\Models\Payment;

class OrderByUserController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function index(){
        try {
            $search = (request()->has('search'))?request()->get('search'):"";
            //$orders = Order::all();
           $builder = DB::table('orders');

           $builder->join('product', 'product.id', '=', 'orders.product_id')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'product.name as product_name','users.name as user_fullname','orders.id as order_id');
             if(request()->has('search') && request()->get('search') != "") {
                $builder->where("orders.service_no",request()->get('search'))
                        ->orWhere('users.name', 'LIKE', "%$search%")
                        ->orWhere('users.mobile',$search);
             }   

            $orders = $builder->distinct()->orderBy('orders.id', 'desc')->paginate(10);
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
            $age = new age();
            if (isset($device_condition['age_id'])) {
                $age = Age::findOrFail($device_condition['age_id']);
            }

            $condition = new condition();
            if (isset($device_condition['condition_id'])) {
                $condition = Condition::findOrFail($device_condition['condition_id']);
            }
            
            $accessories = array();
            if(isset($device_condition['accessories']) && $device_condition['accessories'] != ""){
                $accessories = Accessories::whereIn('id', $device_condition['accessories'])->get();
            }
                       
            $questions = array();
            if(isset($device_condition['question_id'])){
                foreach ($device_condition['question_id'] as $key => $value) {
                    $question = DB::table('calculation_question')
                    ->where('calculation_question.id', '=', $key)
                    ->select('calculation_question.question')->first();
                    if(isset($question)){
                        $questions[$question->question] = ($value == '1')?"Yes":"No";
                    }
                    
                }
            }

            return view('order.show',compact('order','age','condition','accessories','questions'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function exportAllCsv(Request $request) {
        try {
            $data = $request->all();
            $fileName = 'tasks.csv';
            $data['startDate'] = date("Y-m-d h:i:s",$data['startDate']);
            $data['endDate'] = date("Y-m-d h:i:s",$data['endDate']);

            $orders = DB::table($data['table'])
            ->join('product', 'product.id', '=', 'orders.product_id')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->select('users.name as Name','users.mobile as Mobile','users.email as Email','product.name as product_name','orders.service_no','orders.amount','orders.payment_mode as Payment Mode','orders.pickup_schedule as Pickup Date','orders.pickup_address as Address','orders.pickup_state as State','orders.pickup_city as City','orders.pincode as Pincode')
            ->whereBetween('orders.created_at', [$data['startDate'],$data['endDate']])
            ->orderBy('orders.id', 'desc');

            if($orders->count() <= 0) {
                return redirect()->back()->with('message', 'No Record to Export!');
            }

            $rows = $orders->get();
            $dbColumns = $orders->first();
            
            $headers = array(
                "Content-type"        => "text/csv",
                "Content-Disposition" => "attachment; filename=$fileName",
                "Pragma"              => "no-cache",
                "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                "Expires"             => "0"
            );
            $columns = array();
            foreach ($dbColumns as $key => $value) {
                $columns[] = $key;
            }
            $rows = json_decode(json_encode($rows), true);
            //echo "<pre>"; print_r($rows); exit;
            //$columns = DB::getSchemaBuilder()->getColumnListing($data['table']);
            $callback = function() use($rows, $columns) {
                $file = fopen('php://output', 'w');
                fputcsv($file, $columns);
                foreach ($rows as $order) {
                    fputcsv($file, $order);
                }
                fclose($file);
            };

            return response()->stream($callback, 200, $headers);

        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e);
        } 

    }

    public function exportCsv(Request $request) {
        try {
            $data = $request->all();
            $fileName = 'tasks.csv';

            $orders = DB::table('orders')
            ->join('product', 'product.id', '=', 'orders.product_id')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->select('users.name as Name','users.mobile as Mobile','users.email as Email','product.name as product_name','orders.service_no','orders.amount','orders.payment_mode as Payment Mode','orders.pickup_schedule as Pickup Date','orders.pickup_address as Address','orders.pickup_state as State','orders.pickup_city as City','orders.pincode as Pincode')
            ->whereBetween('orders.created_at', [$data['startDate'],$data['endDate']])
            ->orderBy('orders.id', 'desc');
            $rows = $orders->first();
            
            $headers = array(
                "Content-type"        => "text/csv",
                "Content-Disposition" => "attachment; filename=$fileName",
                "Pragma"              => "no-cache",
                "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                "Expires"             => "0"
            );
            $columns = array();
            foreach ($rows as $key => $value) {
                $columns[] = $key;
            }
            $rows = json_decode(json_encode($rows), true);
            //echo "<pre>"; print_r($rows); exit;
            //$columns = DB::getSchemaBuilder()->getColumnListing($data['table']);
            $callback = function() use($rows, $columns) {
                $file = fopen('php://output', 'w');
                fputcsv($file, $columns);
                foreach ($rows as $order) {
                    fputcsv($file, $order);
                }
                fclose($file);
            };

            return response()->stream($callback, 200, $headers);

        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e);
        } 

    }


    //User
    public function indexByUser()
    {
        $users = "";
		try {
            $search = (request()->has('search'))?request()->get('search'):"";
            $builder = User::query();
            if(request()->has('search') && request()->get('search') != "") {
                $builder->where('name', 'LIKE', "%$search%")
                ->orWhere('mobile',$search)
                ->orWhere('email','LIKE',"%$search%");
             } 

            $users = $builder->orderBy('name')->paginate(20);
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
        }		
        return view('users.index',compact('users'));
    }

    public function showByUser($id)
    {
        $user = User::find($id);
        $addressess = Address::where('user_id',$id)->get();
        $payment = Payment::where('user_id',$id)->first();
        return view('users.show',compact('user','addressess','payment'));
    }
}
