@extends('layouts..menu')

@section('contenido')

<div class="row">
    <h1 class="teal-text text-darken-3">NUEVO PRODUCTO</h1>
</div>

<div class="row">
<form class='col s8' method="POST" action="{{ route('productos.store') }}">
    @csrf
<div class="row">
<div class="input-field col s8">
<input placeholder="Nombre de Producto" id="nombre" type="text" name="nombre" class="validate">
<label for="nombre">Nombre de Producto</label>
</div>
</div>

<div class="row">
<div class="input-field col s8">
<textarea name="desc" id="desc" class="materialize-textarea">
</textarea>
<label for="desc">Descripción</label>
</div>
</div>

<div class="row">
<div class="input-field col s8">
<input placeholder="Precio de Producto" id="precio" type="text" name="precio" class="validate">
<label for="precio">Precio de Producto</label>
</div>
</div>

<div class="row">
<div class="input-field col s8">
    <select name="marca" id="marca">
        @foreach($marcas as $marca)
        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
        @endforeach
    </select>
    <label>Seleccione la Marca</label>
  </div>
</div>

<div class="row">
<div class="input-field col s8">
    <select name="categoria" id="categoria">
        @foreach($categorias as $categoria)
        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
        @endforeach
    </select>
    <label>Seleccione la Categoria</label>
  </div>
</div>

<div class="row">
<div class="file-field input-field col s8">
<div class="btn teal darken-3">
<span>Imagen</span>
<input type="file" name="imagen" id="imagen">
</div>
<div class="file-path-wrapper">
<input class="file-path validate" type="text" placeholder="Imagen de Producto">
</div>
</div>
</div>

<div class="row">
<button class="btn waves-effect waves-light teal darken-3" type="submit" name="action">GUARDAR
</button>
</div>

</form>
</div>

@endsection