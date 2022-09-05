@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')

{{-- @can('admin.categories.create') --}}
    <a href="{{route('admin.superusers.create')}}" class="btn btn-secondary btn-sm float-right">Agregar vendedor</a>
{{-- @endcan --}}

    <h1>Lista de vendedores</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-danger">
            <strong>{{(session('info'))}}</strong>
        </div>
    @endif

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
                        <td width="10px">
                            {{-- @can('admin.superusers.edit') --}}
                                <a href="{{route("admin.superusers.edit", $seller)}}" class="btn btn-primary btn-sm">Editar</a>
                            {{-- @endcan --}}
                        </td>
                        <td width="10px">
                            {{-- @can('admin.superusers.destroy') --}}
                                <form action="{{route("admin.superusers.destroy", $seller)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            {{-- @endcan --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@stop
