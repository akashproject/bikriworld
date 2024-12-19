<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            $categories = Categories::all();
            return view('categories.index',compact('categories'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }

    public function add() {
        return view('categories.add');
    }


    public function show($id)
    {
        try {
            $category = Categories::find($id);
            return view('categories.show',compact('category'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        $data = $request->all();
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        if (count($data['service']) > 0) {
            $data['service'] = json_encode($data['service']);
        }
        if($data['category_id'] <= 0){
            Categories::create($data);
        } else {
            $institute = Categories::findOrFail($data['category_id']);
            $institute->update($data);
        }
        
        return redirect('/categories');
    }

    
    public function delete($id) {
        $category = Categories::findOrFail($id);
        $category->delete();
        return redirect('/categories');
    }


}
