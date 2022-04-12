<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Categories;

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
        $categories = Categories::all();
        return view('product.add',compact('categories'));
    }

    public function show($id)
    {
        try {
            $product = Product::find($id);
            $categories = Categories::all();
            return view('product.show',compact('product','categories'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

}
