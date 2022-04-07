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
            $product_id = $id;
            return view('questions.index',compact('questions','product_id'));
            } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function calculatePrice(Request $request){
        $data = $request->all();
        $request->session()->put('sellprice', $data);
        return redirect('/product-quote/'.$request->institute_id);
    }

}
