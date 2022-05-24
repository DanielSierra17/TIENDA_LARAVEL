<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "aqui va a ir el catalogo de productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Seleccionar Categorias y Marcas
        $marcas = Marca::all();
        $categorias = Categoria::all();

        return view('productos.new')
                ->with('marcas' , $marcas)
                ->with('categorias' , $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        // Reglas de validacion
        $reglas = [
            "nombre" => 'required|alpha',
            "desc" => 'required|min:10|max:50',
            "precio" => 'required|numeric',
            "marca" => 'required',
            "categoria" => 'required'
        ];

        $mensajes = [
            "required" => "Campos Obligatorios",
            "numeric" => "Solo Numeros",
            "alpha" => "Solo Letras"
        ];

        // Crear el objeto validador
        $v =  Validator::make($r->all(),
                                $reglas, 
                                    $mensajes);

        // Validar datos:metodo fails()
        if($v->fails()) {
        // Mostrar mensaje de falla
        return redirect('productos/create')
        ->withErrors($v)
        ->withInput();
        }
        else {

        // Creamos entidad de producto
        $p = new Producto;

        // Asignar valores a atributos
        // Del nuevo producto

        $p->nombre = $r->nombre;
        $p->desc = $r->desc;
        $p->precio =$r->precio; 
        $p->marca_id = $r->marca;
        $p->categoria_id = $r->categoria;
        // Grabar en base de datos
        $p->save();

        /*echo "Producto guardado exitosamente";*/
        // Redireccionar
        return redirect('productos/create')
                ->with('mensaje', 'Producto registrado');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        echo "aqui va la info del producto cuyo id es: $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "aqui va la edicion del producto cuyo id es: $producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
