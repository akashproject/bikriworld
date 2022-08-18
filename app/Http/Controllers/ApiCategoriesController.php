<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Brand;

class ApiCategoriesController extends Controller
{
    //
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function apiIndex(){
        try {
            $categories = Categories::where('status', '1')->get();
            return response()->json($categories,$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }

    public function apiBrands($id){
        try {
            
            $brands = Brand::where('category_id', 'like', '%"' . $id . '"%')->orderBy('name', 'asc')->get();
            return response()->json($brands,$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }
}
