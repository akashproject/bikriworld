<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Categories;
use App\Models\Brand;
use App\Models\Series;
use Mail;

class ProductController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }
    //
    public function index(Request $request){
        try {
            $products = Product::select();
            if($request->has('name')){
                $products->where('name', 'like', '%'.$request->input('name').'%');
            }
            $products = $products->paginate(50);
            return view('product.index',compact('products'));
            } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function add() {
        $brands = Brand::all();
        $categories = Categories::all();
        $serieses = Series::all();
        return view('product.add',compact('brands','serieses','categories'));
    }

    public function show($id)
    {
        try {

            $product = Product::find($id);
            $brands = Brand::all();
            $categories = Categories::all();
            $serieses = Series::all();
            return view('product.show',compact('product','brands','categories','serieses'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        $data = $request->all();
        $variation = array();
        $data['variant'] = null;
        if ($data['ram'][0] != '') {
            for ($i=0; $i < count($data['ram']); $i++) { 
                $variation[$i] = array(
                    'ram'=> $data['ram'][$i],
                    'storage'=> $data['storage'][$i],
                    'price'=> $data['price'][$i],
                );
            }
            $data['variant'] = json_encode($variation);
        }
        
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        if($data['product_id'] <= 0){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);
        }

        if ($request->hasFile('image')) {
            
            $imageFile = strtolower(str_replace(" ","",$data['name'])).'_logo_'.time().'.'.$request->image->extension();  
            
            $request->image->move(public_path('images/product'), $imageFile);
            $data['image'] = "product/".$imageFile;
        }

        if($data['product_id'] <= 0){
            $data['slug'] = "sell-old-used-".str_replace(" ","-",strtolower($data['name']));
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
