<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class Categories extends Controller
{
    public function index(){
        try {
            $categories = Categories::all();
            print_r($categories);

            //return view('banks.index',compact('banks'));
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
        }
        
    }
}
