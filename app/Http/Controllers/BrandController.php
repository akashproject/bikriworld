<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index($id){
        try {
            $brands = Brand::where('category_id', $id)->get();
            return view('brand.index',compact('brands'));
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
        }
    }
}
