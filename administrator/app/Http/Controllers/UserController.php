<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;
use App\Models\Payment;

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
        $this->middleware('auth');
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
            $search = (request()->has('search'))?request()->get('search'):"";
            $builder = User::query();
            if(request()->has('search') && request()->get('search') != "") {
                $builder->where('name', 'LIKE', "%$search%")
                ->orWhere('mobile',$search)
                ->orWhere('email','LIKE',"%$search%");
             } 

            $users = $builder->orderBy('name')->paginate(20);
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
        }		
        return view('users.index',compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        $addressess = Address::where('user_id',$id)->get();
        $payment = Payment::where('user_id',$id)->first();
        return view('users.show',compact('user','addressess','payment'));
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
