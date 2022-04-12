<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Brand;

class ProductController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        
    }
    //
    public function index(){
        try {
            $products = Product::all();
            return view('product.index',compact('products'));
            } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function add() {
        $brands = Brand::all();
        return view('product.add',compact('brands'));
    }

    public function show($id)
    {
        try {
            $product = Product::find($id);
            $brands = Brand::all();
            return view('product.show',compact('product','brands'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

}
