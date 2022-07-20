<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Categories;
use App\Models\Series;
class VehicleController extends Controller
{
    //
    public $sellprice = '';
    public $userdata = '';
    public $loggedinUser = '';
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->sellprice = $request->session()->get('sellprice');
        $this->userdata = $request->session()->get('userData');
        if($this->userdata != ''){
            $this->loggedinUser = User::where('mobile', $this->userdata['mobile'])->first();
        }
        
    }
    //

    public function view($id,Request $request){
        $user = $this->userdata;
        try {
            $brand_id = $request->session()->get('selling_brand');
            $vehicle = Product::find($id);
            if($request->session()->get('selling_category')){
                $request->session()->put('selling_category', $vehicle->category_id);
            }
            $tobSellingBrands = Brand::inRandomOrder()->limit(10)->get();
            $tobSellingProducts = Product::inRandomOrder()->limit(10)->get();
            $series = Series::find($vehicle->series_id);
            

            return view('vehicle.view',compact('series','vehicle','user','tobSellingBrands','tobSellingProducts'));       
            
        } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
