<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Models\site;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sitios = site::All();
        return view('services.create',compact('sitios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validations=request()->validate
        ([
                'servicio'=>'required',
                'precio'=>'required',
                'fotografia'=>'required',
                'sites_id'=>'required',
        ]);
        if(isset($validations))
        {
            $servicio=new service(); 
            $servicio->servicio=$request->servicio;
            $servicio->precio=$request->precio;
            $servicio->fotografia=$request->fotografia;
            $servicio->sites_id=$request->sites_id;
            $servicio->save();
            session()->flash('message','Servicio creado sastifactoriamente!!');
            return redirect()->route('service.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        //
    }
}
