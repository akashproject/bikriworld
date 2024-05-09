<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Franchise;


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
            $categories = Categories::orderBy('order','asc')->get();
            return view('index',compact('categories','user'));
        } catch(\Illuminate\Database\QueryException $e){
        }
        
    }

    public function franchisePartner(){
        $user = $this->userdata;
        try {
            
            return view('users.franchise-partner',compact('user'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function saveFranchisePartner(Request $request){
        $user = $this->userdata;
        try {
            $data = $request->all();
            
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'city' => 'required',
                'document_satus' => 'required',
            ]);
            $data['dealing_model'] = (isset($data['dealing_model']))?json_encode($data['dealing_model']):'';

            $franchise = Franchise::create($data);
            return redirect("/franchise-thank-you");
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function franchiseThankyou(){
        $user = $this->userdata;
        try {
            
            return view('users.franchise-thank-you',compact('user'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
