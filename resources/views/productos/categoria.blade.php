@extends('layouts.menu')

@section('contenido')

<div class="row">
    <h1 class="cyan-text text-darken-3">CATALOGO DE PRODUCTOS</h1>
</div>

@foreach($productos as $producto)
<div class="row" style="display: inline-block">
    <div class="col">  
        <div class="card">
            <div class="card-image" style="height:150px; width:200px">
                @if( $producto->imagen === null )
                    <img src="{{ asset( 'img/producto_no_disponible.png' ) }}" alt="" />
    
                @else
                    <img src="{{ asset( 'img/'.$producto->imagen ) }}" alt="" />

                @endif
                
                <span class="card-title">{{ $producto->nombre }}</span>
            </div>
            <div class="card-content">
                <p>{{ $producto->desc }}</p>
            </div>
            <div class="card-action">
            <a href="{{route ('productos.show', $producto->id)}}">Ver Detalles</a>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection