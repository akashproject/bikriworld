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
            $data = array('name'=>"Virat Gandhi");
            // Mail::send('emails.welcome', $data, function ($message) {
            //     $message->from('service@bikriworld.com', 'Bikriworld');
             
            //     $message->to('akashduttaphp@gmail.com')->cc('akashdutta.scriptcrown@gmail.com');
            // });
 
            $categories = Categories::all();
            return view('index',compact('categories','user'));
        } catch(\Illuminate\Database\QueryException $e){
        }
        
    }
}
