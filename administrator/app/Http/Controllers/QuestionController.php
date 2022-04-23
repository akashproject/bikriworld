<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Categories;
use App\Models\Brand;

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
        $question = Question::all();
        $categories = Categories::all();
        $brands = Brand::all();
        return view('question.add',compact('question','categories','brands'));
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
