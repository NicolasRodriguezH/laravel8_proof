@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')



    <h1>Lista de vendedores</h1>
@stop

@section('content')

    <div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($sellers as $seller)
                    <tr>
                        <td>{{$seller->id}}</td>
                        <td>{{$seller->cedula}}</td>
                        <td>{{$seller->nombre}}</td>
                        <td>{{$seller->email}}</td>
                        <td>{{$seller->telefono}}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@stop
