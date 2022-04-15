<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Product;
use App\Models\Brand;
class QuestionController extends Controller
{
    public $userdata = '';
    public function __construct(Request $request)
    {
        $this->userdata = $request->session()->get('userData');
    }
    
    public function index($id,Request $request){
        $user = $this->userdata;
        try {
            $category_id = $request->session()->get('selling_category');
            $questions = Question::where('category_id', $category_id)->get();
            $product = Product::find($id);
            $product_id = $id;
            $tobSellingBrands = Brand::all();
            return view('questions.index',compact('questions','product','user','tobSellingBrands'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function calculatePrice(Request $request){
        $data = $request->all();        
        $max_price = Product::find($data['product_id'])->max_price."-";
        $sum_deduction = 0;
        foreach ($data['question_id'] as $key => $value) {
            $deducted_amount = Question::find($key)->deducted_amount;
            if($value == '1'){
                $sum_deduction += $deducted_amount;
            }            
        }

        $exact_price = (int)$max_price - (int)$sum_deduction;

        $callculatedData = array(
            'product_id' => $data['product_id'],
            'exact_price' => $exact_price
        );
        $request->session()->put('sellprice', $callculatedData);
        return redirect('/product-quote');
    }

}
