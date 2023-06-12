<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Brand;

class BrandController extends Controller
{

    public $_statusOK = 200;
    public $_statusErr = 500;
    
    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            $brands = Brand::all();
            return view('brand.index',compact('brands'));

        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function add() {
        $categories = Categories::all();
        return view('brand.add',compact('categories'));
    }

    public function show($id)
    {
        try {
            $brand = Brand::find($id);
            $brand['category_id'] = json_decode($brand['category_id']);
            $categories = Categories::all();
            return view('brand.show',compact('brand','categories'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function delete($id)
    {
        try {
            $brand = Brand::find($id)->delete();
            return redirect('/brands');
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        $data = $request->all();
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        if($data['brand_id'] <= 0){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }

        if ($request->hasFile('image')) {
            $imageFile = strtolower($data['name']).'_logo_'.time().'.'.$request->image->extension();  
            
            $request->image->move(public_path('images/brand'), $imageFile);
            $data['image'] = "brand/".$imageFile;
        }

        $data['category_id'] = json_encode($data['category_id']);
        if($data['brand_id'] <= 0){
            Brand::create($data);
        } else {
            $brand = Brand::findOrFail($data['brand_id']);
            $brand->update($data);
        }
        
        return redirect('/brands');
    }

}
