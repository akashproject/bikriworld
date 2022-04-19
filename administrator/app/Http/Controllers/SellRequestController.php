<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SellRequest;

class SellRequestController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            $sellRequest = DB::table('sell_request')
            ->join('brand', 'brand.id', '=', 'sell_request.brand_id')
            ->join('categories', 'categories.id', '=', 'sell_request.category_id')            
            ->select('sell_request.*', 'brand.name as brand_name','categories.name as category_name')
            ->distinct()
            ->get();

            return view('sell-request.index',compact('sellRequest'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }


    
}
