<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
            $questions = Question::where('category_id', $category_id)->get();
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
        $category_id = $request->session()->get('selling_category');
        $callculatedData = array(
            'question_id' => $data['question_id'],
            'product_id' => $data['product_id'],
            'veriation_price' => $data['veriation_price'],
            'variation_type' => $data['veriation_type']
        );
        $request->session()->put('sellprice', $callculatedData);

        $product = Product::find($data['product_id']);
        $accessories = Accessories::where('category_id', $category_id)->get();
        $veriationType = $data['veriation_type'];
        $tobSellingBrands = Brand::all();
        $tobSellingProducts = Product::all();

        return view('questions.accessories',compact('accessories','product','user','tobSellingBrands','tobSellingProducts','veriationType'));
    }

    public function deviceAge(Request $request){
        $user = $this->userdata;
        $callculatedData = $request->session()->get('sellprice');
        $data = $request->all();
        if (isset($data['accessories'])) {
            $callculatedData['accessories'] = $data['accessories'];
        }       
        $category_id = $request->session()->get('selling_category');
        $request->session()->put('sellprice', $callculatedData);
        
        $product = Product::find($callculatedData['product_id']);
        $ages = Age::where('category_id', $category_id)->get();
        $veriationType = $callculatedData['variation_type'];


        
        $tobSellingBrands = Brand::all();
        $tobSellingProducts = Product::all();

        return view('questions.device-age',compact('ages','product','user','tobSellingBrands','tobSellingProducts','veriationType'));
    }

    public function calculatePrice(Request $request){
        $user = $this->userdata;
        try {
            $data = $request->all();        
            $callculatedData = $request->session()->get('sellprice');
            $callculatedData['age_id'] = $data['age_id'];
            $category_id = $request->session()->get('selling_category');
            $veriation_price = (isset($callculatedData['veriation_price']))?$callculatedData['veriation_price']:0;

            
            $sum_deduction = 0;
            $brand_id = Product::find($callculatedData['product_id'])->brand_id;

            // Deduction calculation by question
            foreach ($callculatedData['question_id'] as $key => $value) {
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

            // Deduction calculation by accessories
            if(isset($callculatedData['accessories'])){
                $notProvidedAccessories = DB::table('accessories')
                                        ->select('accessories.brand_id','accessories.deducted_amount','accessories.extra_deducted_amount')
                                        ->whereNotIn('id', $callculatedData['accessories'])
                                        ->where('category_id', '=', $category_id)->get();

                foreach ($notProvidedAccessories as $key => $notProvidedAccessory) {
                    $sum_deduction += $notProvidedAccessory->deducted_amount;
                    if($notProvidedAccessory->brand_id){
                        $brands = json_decode($notProvidedAccessory->brand_id,true);
                        if(in_array($brand_id, $brands)){
                            $sum_deduction += $notProvidedAccessory->extra_deducted_amount;
                        }   
                    }
                }
            }

            // Deduction calculation by age
            $age = Age::find($callculatedData['age_id'])->first();
            $sum_deduction += $age->deducted_amount;
            $brands = json_decode($age->brand_id,true);
            if(in_array($brand_id, $brands)){
                $sum_deduction += $age->extra_deducted_amount;
            } 


            $exact_price = $veriation_price - $sum_deduction;

            $callculatedData['exact_price'] = $exact_price;

            $request->session()->put('sellprice', $callculatedData);
            return redirect('/product-quote');
        } catch (\Throwable $th) {
            return view('common.error',compact('user'));
        }
        
    }



}
