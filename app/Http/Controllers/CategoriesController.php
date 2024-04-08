<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Brand;

class CategoriesController extends Controller
{
    public $userdata = '';
    public function __construct(Request $request)
    {
        $this->userdata = $request->session()->get('userData');
    }

    public function index(){
        $user = $this->userdata;
        try {
            $categories = Categories::where('status', '1')->orderBy('order','asc')->get();
            $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
            return view('categories.index',compact('categories','tobSellingBrands','user'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }

    public function laptopWhatsapp(){
        $user = $this->userdata;
        try {
            
            return view('categories.laptop-whatsapp');
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }

    public function laptopUsedWhatsapp(Request $request){
        $user = $this->userdata;
        try {
            $category = Categories::where('slug', 'sell-old-used-laptop')->firstOrFail();
            $id = $category->id;
            $request->session()->put('selling_category', $id);
            //echo $request->session()->get('category_id');
            $brands = Brand::where('category_id', 'like', '%"' . $id . '"%')->orderBy('name', 'asc')->get();
            return view('categories.laptop-whatsapp-model',compact('category','brands','user'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }


    public function apiIndex(){
        try {
            $categories = Categories::where('status', '1')->orderBy('id', 'DESC')->get();
            $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
            return view('categories.index',compact('categories','tobSellingBrands','user'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }

    public function repair(){
        $user = $this->userdata;
        try {
            $categories = Categories::where('status', '1')->get();
            $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
            return view('categories.repair',compact('categories','tobSellingBrands','user'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }
}
