@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>sitios</h1>
@stop

@section('content')


<div class="container-fluid">
<div class="row">

<table cellspacing="0" width="100%" class="table table-bordered table-responsive display compact no-wrap">
    <thead>
        <tr id="chargedaysheader">
            <th width="60%" class="headcol" rowspan="2" style="width: 30%;color: white; clear: both; table-layout: fixed; text-align: center; vertical-align: middle; background-color: #0094ff;">#id</th>
        </tr>
        <tr id="chargelegendheader">
            
                <th scope="col">municipio</th>
                <th scope="col">sitio</th>
                <th scope="col">direccion</th>
                <th scope="col">telefono</th>
                <th scope="col">correo</th>
                <th scope="col">imagen</th>
                <th scope="col">descripcion</th>
                <th scope="col">tipo_actividad</th>
                <th scope="col">horario_atencion</th>
                <th scope="col">estado</th>
        </tr>
    </thead>
    <tbody id="chargetabledata">
        <tr>
           @foreach($sites as $site)
           <tr>
               <th class="fijar" scope="row">{{$site->id}}</th>
               <td>{{$site->minucipio}}</td>
               <td>{{$site->sitio}}</td>
               <td>{{$site->direccion}}</td>
               <td>{{$site->telefono}}</td>
               <td>{{$site->correo}}</td>
               <td>
                <div class="imagen">
                    <img src="{{asset('img/'.$site->imagen)}}" alt="" width="200px">
                </div>
                   
                </td>
               <td class=""><div class="d-flex flex-wrap" style="font-size: 1rem; width:400px">
                  {{$site->descripcion}}
                   </div>
               </td>
               <td>{{$site->tipo_actividad}}</td>
               <td>{{$site->horario_atencion}}</td>
               <td>{{$site->estado}}</td>
             </tr>
           @endforeach
         
        </tr>
    </tbody>
</table>
<section class="mx-5">
    {{$sites->links()}}
</section>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop