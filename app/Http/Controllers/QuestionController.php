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
    
    public function index(Request $request){
        $user = $this->userdata;
        try {
            $productData = $request->all();
            $category_id = $request->session()->get('selling_category');
            $questions = Question::where('category_id', 'like', '%"' . $category_id . '"%')->get();
            $product = Product::find($productData['product_id']);
            $veriationPrice = $productData['veriation_price'];
            $tobSellingBrands = Brand::all();
            $tobSellingProducts = Product::all();
            return view('questions.index',compact('questions','product','user','tobSellingBrands','tobSellingProducts','veriationPrice'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function calculatePrice(Request $request){
        $data = $request->all();        
        $veriation_price = $data['veriation_price'];
        $sum_deduction = 0;
        foreach ($data['question_id'] as $key => $value) {
            $deducted_amount = Question::find($key)->deducted_amount;
            if($value == '0'){
                $sum_deduction += $deducted_amount;
            }            
        }

        $exact_price = $veriation_price - $sum_deduction;

        $callculatedData = array(
            'product_id' => $data['product_id'],
            'exact_price' => $exact_price
        );
        $request->session()->put('sellprice', $callculatedData);
        return redirect('/product-quote');
    }

}
