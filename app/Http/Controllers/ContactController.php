<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public $sellprice = '';
    public $userdata = '';
    public $loggedinUser = '';

    public function __construct(Request $request)
    {
        $this->userdata = $request->session()->get('userData');
    }

    public function saveContact(Request $request){
        $data = $request->all();
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $contact = Contact::create($data);
        $user = $this->userdata;
        return view('users.contact',compact('user'));
    }
}
