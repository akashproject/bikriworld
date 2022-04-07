<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index($id){
        try {
            $products = Product::where('brand_id', $id)->get();
            return view('product.index',compact('products'));
            } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function view($id){
        try {
            $product = Product::find($id);
            return view('product.view',compact('product'));
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
        }
    }

    public function productQuote(Request $request){
        $product_id = "1";
        $session_data = $request->session()->all();
        //print_r($data);
        $product = Product::find($product_id);
        return view('product.quote',compact('product'));
    }

}
