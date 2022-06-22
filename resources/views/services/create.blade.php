@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ingresa el nuevo sitio</h1>
@stop

@section('content')
<form class="col-lg-5 col-sm-5 col-md-5" method="POST" action="">
 
    <div class="mb-3 ">
      <label for="exampleInputEmail1" class="form-label">ingresa al municipio</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">puedes ingresar cualquier municipio del cauca.</div>
    </div>
    <div class="mb-3">
        <label for="disabledTextInput" class="form-label">sitio</label>
        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">direccion</label>
      <input type="text" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">telefono</label>
        <input type="number" class="form-control" id="exampleInputPassword1">
      </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    
    @if (session()->has('message'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
     </div>
        
    @endif
  </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
