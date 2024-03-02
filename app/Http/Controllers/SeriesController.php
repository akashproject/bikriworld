<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\Series;

class SeriesController extends Controller
{
    public $sellprice = '';
    public $userdata = '';
    public $loggedinUser = '';
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->userdata = $request->session()->get('userData');
    }

    public function index($slug,Request $request){
        $user = $this->userdata;
        try {   
            
            $category = $request->session()->get('selling_category');
            $brand = Brand::where('slug', $slug)->firstOrFail();

            $series = Series::where('category_id', $category)
                                ->where('category_id', $brand->id)
                                ->orderBy('name', 'asc')
                                ->get();
            
            $tobSellingBrands = Brand::where('category_id', 'like', '%"' . $id . '"%')->inRandomOrder()->limit(10)->get();
            $tobSellingProducts = Product::where('category_id', 'like', '%"' . $id . '"%')->inRandomOrder()->limit(10)->get();
            
            return view('series.index',compact('series','category','brands','user','tobSellingBrands','tobSellingProducts'));

        } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
