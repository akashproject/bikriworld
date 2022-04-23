<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Categories;

class BrandController extends Controller
{

    public $userdata = '';
    public function __construct(Request $request)
    {
        $this->userdata = $request->session()->get('userData');
    }

    public function index($id,Request $request){
        $user = $this->userdata;
        try {   
            $category = Categories::find($id);
            $request->session()->put('selling_category', $id);
            //echo $request->session()->get('category_id');
            $brands = Brand::where('category_id', 'like', '%"' . $id . '"%')->get();
            $tobSellingBrands = Brand::all();
            $tobSellingProducts = Product::all();
            return view('brand.index',compact('category','brands','user','tobSellingBrands','tobSellingProducts'));

        } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
