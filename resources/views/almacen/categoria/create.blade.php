
@extends('layouts.admin')
@section('contenido')

    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
            <h3>Nueva Categoria</h3>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                </ul>
            </div>
            @endif
        </div>

        <form action="{{ url('almacen/categoria') }}" method="post" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre...">

                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion...">
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
                <a href="{{url('almacen/categoria')}}" class="btn btn-success">Volver</a>
            </div>
        </form>
    </div>
@endsection