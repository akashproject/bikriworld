<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = "";
		try {
            $users = User::all();    
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
        }		
        return view('users.index',compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('users.show',compact('user'));
    }

    public function edit($id, $request)
    {
		try {
            $requestData = $request->all();
            $user = User::findOrFail($id);
            $user->update($requestData);
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
        }		
    }
	
}
