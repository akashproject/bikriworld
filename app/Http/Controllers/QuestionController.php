<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Product;

class QuestionController extends Controller
{
    //
    //
    public function index($id){
        try {
            $questions = Question::all();
            
            $product = Product::find($id);
            return view('questions.index',compact('questions'));
            } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
