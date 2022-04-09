<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public $sellprice = '';
    public $userdata = '';

    public function __construct(Request $request)
    {
        $this->sellprice = $request->session()->get('sellprice');
        $this->userdata = $request->session()->get('userData');
    }
    //
    public function index($id){
        $user = $this->userdata;
        try {
            $products = Product::where('brand_id', $id)->get();
            return view('product.index',compact('products','user'));
            } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function view($id){
        $user = $this->userdata;
        try {
            $product = Product::find($id);
            return view('product.view',compact('product','user'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function productQuote(Request $request){
        $user = $this->userdata;
        $product = Product::find($this->sellprice['product_id']);
        
        return view('product.quote',compact('product','user'));
    }

    public function checkOut(){
        $user = $this->userdata;
        $sellprice = $this->sellprice;
        $product = Product::find($this->sellprice['product_id']);
        return view('product.checkout',compact('product','sellprice','user'));
    }

    public function confirmPickup(Request $request) {
        $data = $request->all();
        print_r($data);
        exit;
    }
}
