<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ProductConfigPrice;
use App\Models\Product;
use App\Models\DeviceConfig;

class ProductConfigPriceController extends Controller
{
    //
    public $_statusOK = 200;
    public $_statusErr = 500;
    
    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            $productConfigPrices = DB::table('product_config_price')
            ->join('product', 'product.id', '=', 'product_config_price.product_id')
            ->join('device_config', 'device_config.id', '=', 'product_config_price.config_id')
            ->select('product_config_price.*','product_config_price.price as config_price', 'product.name as product_name', 'device_config.value')
            ->distinct()
            ->orderBy('id', 'asc') //order in descending order
            ->get();    
            return view('product-config-price.index',compact('productConfigPrices'));

        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function add() {
        $products = Product::all();
        $configs = DeviceConfig::all();
        return view('product-config-price.add',compact('configs','products'));
    }

    public function show($id)
    {
        try {
            $productConfigPrice = ProductConfigPrice::find($id);
            $products = Product::all();
            $configs = DeviceConfig::all();
            return view('product-config-price.show',compact('productConfigPrice','configs','products'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function delete($id)
    {
        try {
            $productConfigPrice = ProductConfigPrice::find($id)->delete();
            return redirect('/product-config-prices');
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        $data = $request->all();
        $validatedData = $request->validate([
            'config_id' => 'required',
            'product_id' => 'required',
            'price' => 'required',
        ]);

        
        if($data['product_config_price_id'] <= 0){
            ProductConfigPrice::create($data);
        } else {
            $productConfigPrice = ProductConfigPrice::findOrFail($data['product_config_price_id']);
            $productConfigPrice->update($data);
        }
        
        return redirect('/product-config-prices');
    }


}
