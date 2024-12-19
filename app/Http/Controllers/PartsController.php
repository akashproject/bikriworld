<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Brand;

class PartsController extends Controller
{
    //
    public $userdata = '';
    public function __construct(Request $request)
    {
        $this->userdata = $request->session()->get('userData');
    }

    public function index(){
        $user = $this->userdata;
        try {
            $categories = Categories::whereIn('id',[1,2])->get();
            $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
            return view('categories.parts',compact('categories','tobSellingBrands','user'));
        } catch(\Illuminate\Database\QueryException $e){
            dd($e);
        }
    }
}
