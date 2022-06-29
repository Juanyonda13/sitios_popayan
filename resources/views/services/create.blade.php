@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ingresa el nuevo servicio</h1>
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
<form class="col-lg-5 col-sm-5 col-md-5" method="POST" enctype="multipart/form-data"action="{{route('service.store')}}">
  @csrf
    <div class="mb-3 ">
      <label for="exampleInputEmail1" class="form-label">ingrese el nombre del servicio...</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="servicio">
      <small class="text-danger">{{$errors->first('servicio')}}</small>
      <div id="emailHelp" class="form-text">puedes ingresar cualquier municipio del cauca.</div>
    </div>
    <div class="mb-3">
        <label for="disabledTextInput" class="form-label">precio</label>
        <input type="number" id="disabledTextInput" class="form-control" placeholder="Ingrese el precio del servicio..." name="precio">
        <small class="text-danger">{{$errors->first('servicio')}}</small>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label col-12">foto</label>
      <span class="btn btn-secondary btn-file">
          <i class="far fa-images "></i><input accept="image/*" onchange="vistaPrevia(event)" type="file" name="fotografia">
      </span>
       <label for="" class="col-12">vista previa fotografia:</label>
       <div class="container-fluid col-4 d-flex flex-wrap">
        <img src="" alt="" id="img-foto">
       </div>
       
    </div>

    <select class="form-control form-select" aria-label="Default select example" name="sites_id">
      <option selected>seleccione el sitio</option>
      @foreach ($sitios as $sitio)
      <option value="{{$sitio->id}}">{{$sitio->minucipio}}</option>
      @endforeach    
    </select>

    <small class="text-danger">{{$errors->first('sitio')}}</small>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    
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
    <script> function ocultarAlerta() {
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
