@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body row justify-content-around flex-wrap">
            @if (session()->has('message'))
                    <div class="alert alert-succes alert-dismissible fade show" role="alert">
                        {{session('message')}}
                        <button type="submit" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            <form action="{{route('rol.store')}}" method="POST" class="col-sm-10 row justify-content-around flex-wrap">
                @csrf  
                
                <div class="col-sm-5">
                    <label for="">Nombre permiso:</label>
                    <input type="text" placeholder="Ingrese el nombre del permiso..." class="form-control" name="name">
                    <small class="text-danger">
                        {{$errors->first('name')}}
                    </small>
                </div>
                <div class="col-sm-5">
                    <label for="">Seleccione permisos:</label>
                    @foreach($permissions as $permission)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{$permission->id}}" id="flexCheckDefault" name="permissions">
                        <label class="form-check-label" for="flexCheckDefault">
                        {{$permission->name}}
                        </label>
                    </div>
                    @endforeach
                   
                   
                </div>
                <div class="col-sm-10 mt-3">
                    <button class="btn btn-warning">guardar</button>
                </div>
           </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> function ocultarAlerta() {
        document.querySelector(".alert").style.display = 'none';
    }
    setTimeout(ocultarAlerta,3000);  
    </script>
@stop