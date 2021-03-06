<?php

namespace App\Http\Controllers;

use App\Models\site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites= site::simplePaginate(2);
        return view('sites.index',compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sites.create');
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
             'minucipio'=>'required',
             'sitio'=>'required',
             'direccion'=>'required',
             'telefono'=>'required',
             'correo'=>'required',
             'imagen'=>'required',
             'descripcion'=>'required',
             'tipo_actividad'=>'required',
             'horario_atencion'=>'required',
             'estado'=>'required'
         ]);
         if(isset($validations))
         {
            $site=new site();
            $site->minucipio=$request->minucipio;
            $site->sitio=$request->sitio;
            $site->direccion=$request->direccion;
            $site->telefono=$request->telefono;
            $site->correo=$request->correo;
            $site->imagen=$request->imagen;
            $site->descripcion=$request->descripcion;
            $site->tipo_actividad=$request->tipo_actividad;
            $site->horario_atencion=$request->horario_atencion;
            $site->estado=$request->estado;
            $site->save();  
            session()->flash('message','Servicio creado sastifactoriamente!!');
            return redirect()->route('site.create');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(site $site)
    {
        //
    }
}
