<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\VehicleVariation;

class VehicleVariationController extends Controller
{
    //
    public $_statusOK = 200;
    public $_statusErr = 500;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $variations = VehicleVariation::all();
            return view('vericle-veriations.index',compact('variations'));

        } catch(\Illuminate\Database\QueryException $e){
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $categories = Categories::all();
        return view('vericle-veriations.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeviceConfigRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeviceConfigRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeviceConfig  $deviceConfig
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        try {
            $variation = VehicleVariation::find($id);
            return view('vericle-veriations.show',compact('variation'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeviceConfig  $deviceConfig
     * @return \Illuminate\Http\Response
     */
    public function edit(DeviceConfig $deviceConfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeviceConfigRequest  $request
     * @param  \App\Models\DeviceConfig  $deviceConfig
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

        $data = $request->all();
        $validatedData = $request->validate([
            'type' => 'required',
            'name' => 'required',
        ]);

        if($data['variation_id'] <= 0){
            VehicleVariation::create($data);
        } else {
            $config = VehicleVariation::findOrFail($data['variation_id']);
            $config->update($data);
        }

        
        
        return redirect('/vehicle-configs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeviceConfig  $deviceConfig
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $config = VehicleVariation::find($id)->delete();
            return redirect('/vehicle-configs');
        } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
