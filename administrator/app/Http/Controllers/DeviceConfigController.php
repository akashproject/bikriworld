<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\DeviceConfig;

class DeviceConfigController extends Controller
{
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
            $configs = DeviceConfig::all();
            return view('config.index',compact('configs'));

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
        return view('config.add',compact('categories'));
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
            $config = DeviceConfig::find($id);
            $categories = Categories::all();
            return view('config.show',compact('config','categories'));
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
            'value' => 'required',
            'price' => 'required',
        ]);

        if($data['config_id'] <= 0){
            DeviceConfig::create($data);
        } else {
            $config = DeviceConfig::findOrFail($data['config_id']);
            $config->update($data);
        }

        
        
        return redirect('/configs');
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
            $config = DeviceConfig::find($id)->delete();
            return redirect('/configs');
        } catch(\Illuminate\Database\QueryException $e){
        }
    }
}
