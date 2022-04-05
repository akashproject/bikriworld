<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index(){
        try {
            $categories = Categories::all();
            return view('categories.index',compact('categories'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }
}
