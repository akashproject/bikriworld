<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function exportCsv(Request $request) {
        try {
            $data = $request->all();
            $fileName = 'tasks.csv';

            $orders = DB::table($data['table'])
            ->join('product', 'product.id', '=', 'orders.product_id')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->select('users.name as Name','users.mobile as Mobile','users.email as Email','product.name as product_name','orders.service_no','orders.amount','orders.payment_mode as Payment Mode','orders.pickup_schedule as Pickup Date','orders.pickup_address as Address','orders.pickup_state as State','orders.pickup_city as City','orders.pincode as Pincode')
            ->whereBetween('orders.created_at', [$data['startDate'],$data['endDate']])
            ->orderBy('orders.id', 'desc');
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
    
}
