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
use App\Models\Condition;
use App\Models\DeviceConfig;
use App\Models\Series;
use App\Models\ProductConfigPrice;

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

            $category_id = $request->session()->get('selling_category');
            $productData = $request->all();

            
            $veriationPrice = 0;

            if(isset($productData['config']) && $productData['config']){
                // Device Configuration Price
                $configPrice = DeviceConfig::select('price')
                ->whereIn('id', $productData['config'])
                ->get(); 

                foreach($configPrice as $key => $value){
                    $veriationPrice += $value->price;
                }

                // Device Configuration Extra Price
                $productConfigPrice = ProductConfigPrice::select('price')
                ->where('product_id', '=', $productData['product_id'])
                ->whereIn('config_id', $productData['config'])
                ->get(); 
                foreach($productConfigPrice as $key => $value){
                    $veriationPrice += $value->price;
                }
            } else {
                $veriationPrice = $productData['veriation_price'];
            }

            if(isset($productData['series_price']) && $productData['series_price'] != ''){
                $veriationPrice += $value->price;
            }

            $questions = Question::where('category_id', $category_id)->get();
            $product = Product::find($productData['product_id']);


            $veriationType = $productData['veriation_type'];


            $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
            $tobSellingProducts = Product::inRandomOrder()->limit(10)->get();
            return view('questions.index',compact('questions','product','user','tobSellingBrands','tobSellingProducts','veriationPrice','veriationType'));
        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function givenAccessories(Request $request){
        $user = $this->userdata;
        $data = $request->all();
        $category_id = $request->session()->get('selling_category');
        $callculatedData = array(
            'question_id' => (isset($data['question_id']))?$data['question_id']:array(),
            'product_id' => $data['product_id'],
            'veriation_price' => $data['veriation_price'],
            'variation_type' => $data['veriation_type']
        );
        $request->session()->put('sellprice', $callculatedData);

        $product = Product::find($data['product_id']);
        $accessories = Accessories::where('category_id', $category_id)->get();
        $veriationType = $data['veriation_type'];
        $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
        $tobSellingProducts = Product::inRandomOrder()->limit(10)->get();

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


        
        $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
        $tobSellingProducts = Product::inRandomOrder()->limit(10)->get();

        return view('questions.device-age',compact('ages','product','user','tobSellingBrands','tobSellingProducts','veriationType'));
    }

    public function deviceCondition(Request $request){
        $user = $this->userdata;
        $callculatedData = $request->session()->get('sellprice');
        $data = $request->all();
        if (isset($data['accessories'])) {
            $callculatedData['accessories'] = $data['accessories'];
        } 
        
        $callculatedData['age_id'] = $data['age_id'];

        $category_id = $request->session()->get('selling_category');
        $request->session()->put('sellprice', $callculatedData);
        
        $product = Product::find($callculatedData['product_id']);
        $conditions = Condition::where('category_id', $category_id)->get();
        $veriationType = $callculatedData['variation_type'];

        $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
        $tobSellingProducts = Product::inRandomOrder()->limit(10)->get();

        return view('questions.device-condition',compact('conditions','product','user','tobSellingBrands','tobSellingProducts','veriationType'));
    }

    public function calculatePrice(Request $request){
        $user = $this->userdata;
        try {
            $data = $request->all();      
            $callculatedData = $request->session()->get('sellprice');
            $callculatedData['condition_id'] = $data['condition_id'];
            $category_id = $request->session()->get('selling_category');
            $veriation_price = (isset($callculatedData['veriation_price']))?$callculatedData['veriation_price']:0;
                   
            $sum_deduction = 0;
            $brand_id = Product::find($callculatedData['product_id'])->brand_id;
            
            // Deduction calculation by question
            foreach ($callculatedData['question_id'] as $key => $value) {
                $question = Question::find($key);
                if($value == '1'){               
                    $sum_deduction += $question->deducted_amount;
                    if($question->brand_id){
                        $brands = json_decode($question->brand_id,true);
                        if(in_array($brand_id, $brands)){
                            $brand_extra_amount = ($question->extra_amount / 100) * $veriation_price;
                            $sum_deduction += $brand_extra_amount;
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
                            $accessory_extra_amount = ($notProvidedAccessory->extra_deducted_amount / 100) * $veriation_price;
                            $sum_deduction += $accessory_extra_amount;
                        }   
                    }
                }
            }

            
            // Deduction calculation by age
            $age = Age::find($callculatedData['age_id'])->first();
            $sum_deduction += $age->deducted_amount;
            $brands = json_decode($age->brand_id,true);
            if(in_array($brand_id, $brands)){
                $age_extra_amount = ($age->extra_deducted_amount / 100) * $veriation_price;
                $sum_deduction += $age_extra_amount;
            } 

            
            // Deduction calculation by conditions
            $condition = Condition::find($callculatedData['condition_id'])->first();           
            $sum_deduction += $condition->deducted_amount;          
            $conditions = json_decode($condition->brand_id,true);
            
            if(in_array($brand_id, $brands)){
                $condition_extra_amount = ($condition->extra_deducted_amount / 100) * $veriation_price;
                $sum_deduction += $condition_extra_amount;
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
