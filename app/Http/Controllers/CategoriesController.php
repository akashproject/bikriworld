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
            $categories = Categories::all();
            $tobSellingBrands = Brand::inRandomOrder()->limit(20)->get();
            return view('categories.index',compact('categories','tobSellingBrands','user'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }
}
