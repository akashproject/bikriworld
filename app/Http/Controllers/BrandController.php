<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

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
            $request->session()->put('selling_category', $id);
            //echo $request->session()->get('category_id');
            $brands = Brand::where('category_id', 'like', '%' . $id . '%')->get();
            $tobSellingBrands = Brand::all();
            return view('brand.index',compact('brands','user','tobSellingBrands'));

        } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
