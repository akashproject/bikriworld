<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class IndexController extends Controller
{
    public function index(){
        try {
            $categories = Categories::all();
            return view('index',compact('categories'));
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
        }
        
    }
}
