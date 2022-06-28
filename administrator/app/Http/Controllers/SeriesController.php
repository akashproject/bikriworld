<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Series;
use App\Models\Categories;
use App\Models\Brand;

class SeriesController extends Controller
{
    //
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            $series = Series::all();
            return view('series.index',compact('series'));
        } catch(\Illuminate\Database\QueryException $e){
            
        }
    }

    public function add() {
        $categories = Categories::all();
        $brands = Brand::all();
        return view('series.add',compact('categories','brands'));
    }


    public function show($id)
    {
        try {
            $categories = Categories::all();
            $brands = Brand::all();
            $series = Series::find($id);
            return view('series.show',compact('series','categories','brands'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        $data = $request->all();
        $validatedData = $request->validate([
            'series' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);

        if($data['series_id'] <= 0){
            Series::create($data);
        } else {
            $series = Series::findOrFail($data['series_id']);
            $series->update($data);
        }
        
        return redirect('/serieses');
    }

    
    public function delete($id) {
        $category = Series::findOrFail($id);
        $category->delete();
        return redirect('/serieses');
    }
}
