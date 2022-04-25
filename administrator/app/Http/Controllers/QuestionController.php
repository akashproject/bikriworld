<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Categories;
use App\Models\Brand;
use App\Models\Age;

class QuestionController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }
    
    public function index(){
        try {
            $questions = DB::table('calculation_question')
            ->join('categories', 'categories.id', '=', 'calculation_question.category_id')
            ->select('calculation_question.*', 'categories.name')
            ->distinct()
            ->orderBy('id', 'asc') //order in descending order
            ->get();
            return view('question.index',compact('questions'));
            } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function add() {
        $categories = Categories::all();
        $brands = Brand::all();
        return view('question.add',compact('categories','brands'));
    }

    public function show($id)
    {
        try {
            $question = Question::find($id);
            $question->brand_id = ($question->brand_id)?json_decode($question->brand_id,true):array();
            $categories = Categories::all();
            $brands = Brand::all();
            return view('question.show',compact('question','categories','brands'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function showDeviceAge($id)
    {
        try {
            $age = Age::find($id);
            $age->brand_id = ($age->brand_id)?json_decode($age->brand_id,true):array();
            $categories = Categories::all();
            $brands = Brand::all();
            return view('question.show-devive',compact('age','categories','brands'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

     

    public function addDeviceAge()
    {
        try {
            $categories = Categories::all();
            $brands = Brand::all();
            return view('question.add-age',compact('categories','brands'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }
    
    public function deviceAge()
    {
        try {
            $ages = DB::table('ages')
            ->join('categories', 'categories.id', '=', 'ages.category_id')
            ->select('ages.*', 'categories.name')
            ->distinct()
            ->orderBy('id', 'asc') //order in descending order
            ->get();
            return view('question.age',compact('ages'));
            } catch(\Illuminate\Database\QueryException $e){
        }      
    }

    public function saveDeviceAge(Request $request)
    {
        $data = $request->all();
        $validatedData = $request->validate([
            'age' => 'required',
            'category_id' => 'required',
            'deducted_amount' => 'required',
        ]);
        
        if(isset($data['brand_id'])){
            $data['brand_id'] = json_encode($data['brand_id']);
        }

        if($data['age_id'] <= 0){
            Age::create($data);
        } else {
            $question = Age::findOrFail($data['age_id']);
            $question->update($data);
        }

        return redirect('/device-age');     
    }

    public function save(Request $request) {
        $data = $request->all();
        $validatedData = $request->validate([
            'question' => 'required',
            'description' => 'required',
            'deducted_amount' => 'required',
        ]);

        if(isset($data['brand_id'])){
            $data['brand_id'] = json_encode($data['brand_id']);
        }
        
        if($data['question_id'] <= 0){
            Question::create($data);
        } else {
            $question = Question::findOrFail($data['question_id']);
            $question->update($data);
        }
        
        return redirect('/questions');
    }

}
