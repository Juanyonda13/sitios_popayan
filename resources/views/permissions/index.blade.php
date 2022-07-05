@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>pemsos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Guard Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{$permission->name}}</td>
                            <td>{{$permission->guard_name}}</td>
                            <td class="grid">

                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
       
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .grid
        {
            display:grid;
            grid-template-columns: 1fr 1fr;
            gap:4px;
        }
        .grid a,button
        {
            width: 40px;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop