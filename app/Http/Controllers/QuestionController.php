<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Accessories;
use App\Models\Age;

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
            $veriationType = $productData['veriation_type'];
            $tobSellingBrands = Brand::all();
            $tobSellingProducts = Product::all();
            return view('questions.index',compact('questions','product','user','tobSellingBrands','tobSellingProducts','veriationPrice','veriationType'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function givenAccessories(Request $request){
        $user = $this->userdata;
        $data = $request->all();
        $callculatedData = array(
            'question_id' => $data['question_id'],
            'product_id' => $data['product_id'],
            'veriation_price' => $data['veriation_price'],
            'variation_type' => $data['veriation_type']
        );
        $request->session()->put('sellprice', $callculatedData);

        $product = Product::find($data['product_id']);
        $accessories = Accessories::all();
        $veriationType = $data['veriation_type'];
        $tobSellingBrands = Brand::all();
        $tobSellingProducts = Product::all();

        return view('questions.accessories',compact('accessories','product','user','tobSellingBrands','tobSellingProducts','veriationType'));
    }

    public function deviceAge(Request $request){
        $user = $this->userdata;
        $callculatedData = $request->session()->get('sellprice');
        $data = $request->all();
        $callculatedData['accessories'] = $data['accessories'];
        $request->session()->put('sellprice', $callculatedData);
        
        $product = Product::find($callculatedData['product_id']);
        $ages = Age::all();
        $veriationType = $callculatedData['variation_type'];

        
        $tobSellingBrands = Brand::all();
        $tobSellingProducts = Product::all();

        return view('questions.device-age',compact('ages','product','user','tobSellingBrands','tobSellingProducts','veriationType'));
    }

    public function calculatePrice(Request $request){
        $data = $request->all();        
        $callculatedData = $request->session()->get('sellprice');
        $callculatedData['age'] = $data['age'];

        echo "<pre>"; print_r($callculatedData); echo "<pre>";
        exit;
        
        $veriation_price = $data['veriation_price'];
        $sum_deduction = 0;
        $brand_id = Product::find($data['product_id'])->brand_id;
        foreach ($data['question_id'] as $key => $value) {
            $question = Question::find($key);
            if($value == '0'){               
                $sum_deduction += $question->deducted_amount;
                if($question->brand_id){
                    $brands = json_decode($question->brand_id,true);
                    if(in_array($brand_id, $brands)){
                        $sum_deduction += $question->extra_amount;
                    }   
                }
                
            }            
        }

        $exact_price = $veriation_price - $sum_deduction;

        $callculatedData = array(
            'product_id' => $data['product_id'],
            'exact_price' => $exact_price,
            'variation_type' => $data['veriation_type']
        );
        $request->session()->put('sellprice', $callculatedData);
        return redirect('/product-quote');
    }



}
