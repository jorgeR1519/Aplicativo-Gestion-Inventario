@extends('layouts.admin')
@section('contenido')

<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre..." required value="{{ old('nombre') }}">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" class="form-control" placeholder="Descripción...">
        </div>
    </div>
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <select name="categoria" class="form-control">
                @foreach($categorias as $cat)
                <option value="{{ $cat->idcategoria }}">{{ $cat->nombre }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo Artículo</h3>
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
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        <form action="{{ url('almacen/articulo') }}" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" class="form-control" placeholder="Código.." required value="{{ old('codigo') }}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Descripción...">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
                <a href="{{ url('almacen/articulo') }}" class="btn btn-success">Volver</a>
            </div>
        </form>
    </div>
</div>
@endsection
