<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Condition;
use App\Models\Categories;
use App\Models\Brand;


class ConditionController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            $conditions = DB::table('conditions')
            ->join('categories', 'categories.id', '=', 'conditions.category_id')
            ->select('conditions.*', 'categories.name as cat_name')
            ->distinct()
            ->orderBy('id', 'asc') //order in descending order
            ->get();
            return view('conditions.index',compact('conditions'));
            } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function add() {
        $categories = Categories::all();
        $brands = Brand::all();
        return view('conditions.add',compact('categories','brands'));
    }

    public function show($id)
    {
        try {
            $conditions = Condition::find($id);
            $conditions->brand_id = ($conditions->brand_id)?json_decode($conditions->brand_id,true):array();
            $categories = Categories::all();
            $brands = Brand::all();
            return view('conditions.show',compact('conditions','categories','brands'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        $data = $request->all();
        $validatedData = $request->validate([
            'condition' => 'required',
            'category_id' => 'required',
            'deducted_amount' => 'required',
        ]);

        if(isset($data['brand_id'])){
            $data['brand_id'] = json_encode($data['brand_id']);
        }
        
        if($data['condition_id'] <= 0){
            Condition::create($data);
        } else {
            $condition = Condition::findOrFail($data['condition_id']);
            $condition->update($data);
        }
        
        return redirect('/conditions');
    }

    public function delete($id){
        try {
            $condition = Condition::find($id)->delete();
            return redirect('/accessories');
        } catch(\Illuminate\Database\QueryException $e){
        } 
    }
}
