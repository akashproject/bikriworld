<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;


class IndexController extends Controller
{
    public $userdata = '';
    public function __construct(Request $request)
    {
        $this->userdata = $request->session()->get('userData');
    }

    public function index(){
        $user = $this->userdata;
        try {
            //$categories = Categories::where('status', '1')->orderBy('name', 'asc')->get();
            $categories = Categories::all();
            return view('index',compact('categories','user'));
        } catch(\Illuminate\Database\QueryException $e){
        }
        
    }

    public function franchisePartner(){
        $user = $this->userdata;
        try {
            
            return view('franchise-partner');
        } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
