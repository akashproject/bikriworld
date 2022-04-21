<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
//use Mail;

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
            $data = array('name'=>"Virat Gandhi");
            // Mail::send(['text'=>'mail'], $data, function($message) {
            //     $message->to('akashdutta.scriptcrown@gmail.com', 'Tutorials Point')->subject
            //        ('Laravel Basic Testing Mail');
            //     $message->from('info@bikriworld.com','Akash Dutta');
            //  });
             
            $categories = Categories::all();
            return view('index',compact('categories','user'));
        } catch(\Illuminate\Database\QueryException $e){
        }
        
    }
}
