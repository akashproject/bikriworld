<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Accessories;
use App\Models\Categories;
use App\Models\Brand;


class AccessoriesController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            $accessories = DB::table('accessories')
            ->join('categories', 'categories.id', '=', 'accessories.category_id')
            ->select('accessories.*', 'categories.name as cat_name')
            ->distinct()
            ->orderBy('id', 'asc') //order in descending order
            ->get();
            return view('accessories.index',compact('accessories'));
            } catch(\Illuminate\Database\QueryException $e){
        }
    }

    public function add() {
        $categories = Categories::all();
        $brands = Brand::all();
        return view('accessories.add',compact('categories','brands'));
    }

    public function show($id)
    {
        try {
            $accessories = Accessories::find($id);
            $accessories->brand_id = ($accessories->brand_id)?json_decode($accessories->brand_id,true):array();
            $categories = Categories::all();
            $brands = Brand::all();
            return view('accessories.show',compact('accessories','categories','brands'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        $data = $request->all();
        $validatedData = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'deducted_amount' => 'required',
        ]);

        if(isset($data['brand_id'])){
            $data['brand_id'] = json_encode($data['brand_id']);
        }
        
        if($data['accessories_id'] <= 0){
            Accessories::create($data);
        } else {
            $question = Accessories::findOrFail($data['accessories_id']);
            $question->update($data);
        }
        
        return redirect('/accessories');
    }
}
