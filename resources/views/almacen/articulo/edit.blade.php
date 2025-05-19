@extends('layouts.admin')

@section('contenido')

<div class="row">
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Articulo: {{$articulo->nombre}}</h3>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{url('almacen/articulo/update',$categoria->idarticulo)}}"  >
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$articulo->nombre}}" placeholder="Nombre..">

                <label for="nombre">Nombre</label>
                <input type="text" name="descripcion" class="form-control" value="{{$articulo->descripcion}}" placeholder="Descripcion..">
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-info" type="reset">Cancelar</button>
                <a href="{{url('almacen/articulo')}} " class="btn btn-success">Volver</a>
            </div>
        </form>







    </div>
</div>


@endsection
