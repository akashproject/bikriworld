<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Country;

class CountryController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        try {
            $countries = Country::all();
            return view('country.index',compact('countries'));
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
        }
        
    }


    public function show($id)
    {
        try {
            return response()->json(Country::find($id),$this->_statusOK);
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
        }        
    }

    public function add() {
        return view('country.add');
    }

    public function save(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'currency' => 'required',
        ]);

        Country::create($request->all());
        return redirect('/countries');

    }

    public function delete() {

    }

    


}
