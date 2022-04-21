<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        
    }

    public function index(){
        try {
            $contacts = Contact::all();
            return view('contact.index',compact('contacts'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }

    public function show($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            return view('contact.show',compact('contact'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        $data = $request->all();
        $validatedData = $request->validate([
            'status' => 'required',
        ]);
        

        $contact = Contact::findOrFail($data['id']);
        $contact->update($data);

        
        return redirect('/quary/'.$data['id']);
    }
}
