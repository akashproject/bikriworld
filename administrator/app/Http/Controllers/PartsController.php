<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parts;
use App\Models\Categories;
use App\Models\Brand;
use App\Models\Product;

class PartsController extends Controller
{
    //
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function index($id){
        try {
            $parts = Parts::where('category_id',$id)->get();
            return view('parts.index',compact('parts'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }

    public function add() {
        $categories = Product::all();
        $brands = Brand::all();
        return view('parts.add',compact('categories','brands'));
    }


    public function show($id)
    {
        try {
            $part = Parts::find($id);
            $brands = Brand::all();
            $categories = Categories::all();
            return view('parts.show',compact('part','brands','categories'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        $data = $request->all();
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        if($data['parts_id'] <= 0){
            $parts = Parts::create($data);
        } else {
            $parts = Parts::findOrFail($data['parts_id']);
            $parts->update($data);
        }
        
        return redirect('parts/'.$parts->category_id);
    }

    
    public function delete($id) {
        $parts = Parts::findOrFail($id);
        $parts->delete();
        return route('parts',$parts->category_id);
    }
}
