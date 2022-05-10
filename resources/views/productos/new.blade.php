@extends('layouts..menu')

@section('contenido')

<div class="row">
    <h1 class="cyan-text text-darken-3">NUEVO PRODUCTO</h1>
</div>

<div class="row">
<form class='col s8' method="" action="">
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
<div class="file-field input-field col s8">
<div class="btn cyan darken-1">
<span>Imagen</span>
<input type="file">
</div>
<div class="file-path-wrapper">
<input class="file-path validate" type="text" placeholder="Imagen de Producto">
</div>
</div>
</div>

<div class="row">
<button class="btn waves-effect waves-light cyan darken-1" type="submit" name="action">GUARDAR
</button>
</div>

</form>
</div>

@endsection