<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Categories;
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
        $categories = Categories::all();
        return view('product.add',compact('brands','categories'));
    }

    public function show($id)
    {
        try {

            $product = Product::find($id);
            $brands = Brand::all();
            $categories = Categories::all();
            return view('product.show',compact('product','brands','categories'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        $data = $request->all();
        $variation = array();
        for ($i=0; $i < count($data['ram']); $i++) { 
            $variation[$i] = array(
                'ram'=> $data['ram'][$i],
                'storage'=> $data['storage'][$i],
                'price'=> $data['price'][$i],
            );
        }
        $data['variant'] = json_encode($variation);
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        if($data['product_id'] <= 0){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }

        if ($request->hasFile('image')) {
            
            $imageFile = strtolower(str_replace(" ","",$data['name'])).'_logo_'.time().'.'.$request->image->extension();  
            
            $request->image->move(public_path('images/product'), $imageFile);
            $data['image'] = "product/".$imageFile;
        }

        if($data['product_id'] <= 0){
            Product::create($data);
        } else {
            $brand = Product::findOrFail($data['product_id']);
            $brand->update($data);
        }
        
        return redirect('/products');
    }

    public function delete($id)
    {
        try {
            $brand = Product::find($id)->delete();
            return redirect('/products');
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

}
