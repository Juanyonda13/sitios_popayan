@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>sitio</h1>
@stop

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style type="text/css">
    .btn-file {
        position: relative;
        overflow: hidden;
        width: 100px;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
    .btn-file i{
        font-size:23px;
    }
    .imagen img{
        max-width: 100%;
        max-height: 50vh;
    }
</style>
<form class="col-lg-5 col-sm-5 col-md-5" method="POST" enctype="multipart/form-data"action="{{route('site.store')}}">
@csrf
@if (session()->has('message'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('message')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
 </div>
    
@endif
<div class="mb-3 ">
  <label for="exampleInputEmail1" class="form-label">ingresa el municipio</label>
  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" name="minucipio" placeholder="......">
  <small class="text-danger">{{$errors->first('servicio')}}</small>
  <div id="emailHelp" class="form-text">puedes ingresar cualquier municipio del cauca.</div>
</div>
<div class="mb-3">
    <label for="disabledTextInput" class="form-label">ingrese el sitio </label>
    <input type="text" id="disabledTextInput" class="form-control" placeholder="ingresa el sitio" name="sitio">
    <small class="text-danger">{{$errors->first('servicio')}}</small>
</div>

<div class="mb-3">
    <label for="disabledTextInput" class="form-label">ingresa la dirccion del sitio </label>
    <input type="text" id="disabledTextInput" class="form-control" placeholder="#direccion" name="direccion">
    <small class="text-danger">{{$errors->first('servicio')}}</small>
</div>
<div class="mb-3">
    <label for="disabledTextInput" class="form-label">tu numero de telefono</label>
    <input type="number" id="disabledTextInput" class="form-control" placeholder="+57" name="telefono">
    <small class="text-danger">{{$errors->first('servicio')}}</small>
</div>

<div class="input-group mb-3">
  <label for="disabledTextInput" class="form-label col-12">ingresa tu correo</label>
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="correo">
</div>

<div class="mb-3">
      <label for="exampleInputPassword1" class="form-label col-12">imagen</label>
      <span class="btn btn-secondary btn-file">
          <i class="far fa-images "></i><input accept="image/*" onchange="vistaPrevia(event)" type="file" name="imagen">
      </span>
       <div class="container-fluid col-4 d-flex flex-wrap">
        <img src="" alt="" id="img-foto">
       </div>
</div>


<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">descripcion</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
  <small class="text-danger">{{$errors->first('servicio')}}</small>
</div>

<div class="mb-3">
    <label for="disabledTextInput" class="form-label">tipo de actividad </label>
    <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="tipo_actividad">
    <small class="text-danger">{{$errors->first('servicio')}}</small>
</div>

<div class="m-3">
    <label for="disabledTextInput" class="form-label">Select a time:</label>
    <input type="time" id="appt" class="form-control"name="horario_atencion">
    <small class="text-danger">{{$errors->first('servicio')}}</small>
</div>

<div class="mb-3">
    <label for="disabledTextInput" class="form-label">estado</label>
    <input type="number" id="disabledTextInput" class="form-control" placeholder="" name="estado">
    <small class="text-danger">{{$errors->first('servicio')}}</small>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>



</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>function ocultarAlerta() {
      document.querySelector(".alert").style.display = 'none';
  }
  setTimeout(ocultarAlerta,3000);

  // vista previa de la imagen

  let vistaPrevia = ()=>{
      let leerImg = new FileReader();
      let id_img = document.getElementById('img-foto');

      leerImg.onload = ()=>{
          if (leerImg.readyState == 2) {
              id_img.src = leerImg.result;
          }
      }

      leerImg.readAsDataURL(event.target.files[0])
  } </script>
@stop