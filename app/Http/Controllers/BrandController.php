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

    public function index($id){
        $user = $this->userdata;
        try {
            //$brands = Brand::where('category_id', $id)->get();
            $brands = Brand::where('category_id', 'like', '%' . $id . '%')->get();
            return view('brand.index',compact('brands','user'));

        } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
