<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Parts;
use Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class RepairOrdersController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            $search = (request()->has('search'))?request()->get('search'):"";
            //$repair_orders = Order::all();
           $builder = DB::table('repair_orders');

           $builder->join('product', 'product.id', '=', 'repair_orders.product_id')
            ->join('users', 'users.id', '=', 'repair_orders.user_id')
            ->select('repair_orders.*', 'product.name as product_name','users.name as user_fullname','repair_orders.id as order_id');
             if(request()->has('search') && request()->get('search') != "") {
                $builder->where("repair_orders.service_no",request()->get('search'))
                        ->orWhere('users.name', 'LIKE', "%$search%")
                        ->orWhere('users.mobile',$search);
             }   

            $orders = $builder->distinct()->orderBy('repair_orders.id', 'desc')->paginate(10);
            return view('repairOrder.index',compact('orders'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }

    public function show($id)
    {
        try {
            $order = DB::table('repair_orders')
            ->join('product', 'product.id', '=', 'repair_orders.product_id')
            ->join('users', 'users.id', '=', 'repair_orders.user_id')
            ->where('repair_orders.id', '=', $id)
            ->select('repair_orders.*','product.*','users.*', 'repair_orders.id as order_id','product.name as product_name','users.name as user_fullname')
            ->first();
        
            $partsData = json_decode($order->parts,true);
            
            $parts = array();
            if(isset($partsData) && $partsData != ""){
                $parts = Parts::whereIn('id', $partsData)->get();
            }
                
            return view('repairOrder.show',compact('order','parts'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        $data = $request->all();
        $validatedData = $request->validate([
            'status' => 'required',
        ]);
        $order = Order::findOrFail($data['order_id']);
        $canEarn = Order::where('user_id',$order->user_id)->where('status','completed')->count();
        $order->update($data);
        switch ($data['status']) {
            case 'completed':
                if ($canEarn < 1) {
                    $referredUser = DB::table('users as u1')
                    ->join('users as u2', 'u1.referred_by', '=', 'u2.id')
                    ->select('u1.referred_by','u2.id','u2.earning')
                    ->where('u1.id',$order->user_id)->first();

                    if($referredUser !== null){
                        User::where('id',$referredUser->id)->update(['earning'=>$referredUser->earning + 300]);
                    }
                }
                $this->sendStatusMail($data['order_id']);
                break;
            default:
                # code...
                break;
        }

        return redirect('/order/'.$data['order_id']);
    }

    public function sendStatusMail($order_id){
        try {
            $order = DB::table('orders')
            ->join('product', 'product.id', '=', 'orders.product_id')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->where('orders.id', '=', $order_id)
            ->select('orders.*','product.*','users.*','product.name as product_name','users.name as user_fullname')
            ->first();
        
            $user = array(
                'name' => $order->user_fullname,
                'email' => $order->email,
                'service_no' => $order->service_no,
            );
            $orderData = array(
                'name' => $order->user_fullname,
                'device_name' => $order->product_name,
                'product_unique_no' => $order->product_unique_no,
                'variation_type' => $order->variation_type,
                'service_no' => $order->service_no,
                'amount' => number_format($order->amount),
                'payment_mode' => $order->payment_mode,
                'pickup_schedule' => $order->pickup_schedule,
                'pickup_address' => $order->pickup_address.','.$order->pickup_city.','.$order->pickup_state.' Pin -'.$order->pincode,
                'recived_at' => date('d M, Y'),
            );

            $data = array(
                'name' => $order->user_fullname,
                'device_name' => $order->product_name,
                'product_unique_no' => $order->product_unique_no,
                'variation_type' => $order->variation_type,
                'service_no' => $order->service_no,
                'amount' => number_format($order->amount),
                'payment_mode' => $order->payment_mode,
                'pickup_schedule' => $order->pickup_schedule,
                'pickup_address' => $order->pickup_address.','.$order->pickup_city.','.$order->pickup_state.' Pin -'.$order->pincode,
                'recived_at' => date('d M, Y'),
            );
            
            $pdf = Pdf::loadView('emails.invoice-pdf', $data);

            Mail::send('emails.order2', $orderData, function ($m) use ($user, $pdf) {
                $m->from('service@bikriworld.com', 'Bikriworld');
                $m->to($user['email'], $user['name'])->subject('Bikriworld Invoice! | '.$user['service_no'])->attachData($pdf->output(), "invoice.pdf");
            });
            return true;
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

    public function generateInvoiceAttachment()
    {
        echo public_path('files/demo-1.pdf');
       
        //return $pdf->stream(public_path('files/demo-1.pdf'));
    }
}
