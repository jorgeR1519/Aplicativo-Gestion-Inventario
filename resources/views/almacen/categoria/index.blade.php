@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-12 col-sm-8 col-xs-12">
        <h3>Listado de Categorias <a href="{{url('/almacen/categoria/create')}}"><button class="btn btn-success">Nueva Categoria</button></a></h3>
        @include('almacen.categoria.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($categorias as $cat)
                    <tr>
                        <td>{{$cat->idcategoria}}</td>
                        <td>{{$cat->nombre}}</td>
                        <td>{{$cat->descripcion}}</td>
                        <td>
                            <a href="{{ url ('almacen/categoria/edit', $cat->idcategoria)}}" class="btn btn-info">Editar</a>
                            <a href="" data-target="#modal-delete{{ $cat->idcategoria}}" data-toggle="modal" ><button class="btn btn-danger">Eliminar</button></a>
                        </td>
                    </tr>
                    @include('almacen.categoria.modal')
                    @endforeach
                </tbody>
            </table>
            @if($categorias->isEmpty())
                <p>No se encontraron categorias.</p>
            @endif
        </div>
        {{ $categorias ->render() }}
    </div>
</div>

@endsection