@extends('plantilla')

@section('contenido')
<h1>Editar Registro</h1>

<form action="/articulos/{{ $articulo->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="mt-3">
        <label for="" class="form-label">Código</label>
        <input type="text" id="codigo" name="codigo" value="{{$articulo->codigo}}" class="form-control" tabindex="1">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" value="{{$articulo->descripcion}}" class="form-control" tabindex="2">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="text" id="cantidad" name="cantidad" value="{{$articulo->cantidad}}" class="form-control" tabindex="3">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Precio</label>
        <input type="text" id="precio" name="precio" value="{{$articulo->precio}}" class="form-control" tabindex="4">
    </div>
    <button type="submit" class="btn btn-secondary" tabindex="6">Guardar</button>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>

</form>

@endsection
