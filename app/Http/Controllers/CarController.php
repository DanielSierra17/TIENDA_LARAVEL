<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mostrar variable de session 'cart'
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Estructurar la informacion del producto en un array

        $producto = [
            [
                "nombre" => $request->prod_nom,
                "id" => $request->prod_id,
                "cantidad" => $request->cantidad,
                "precio" => $request->prod_pre
            ]
        ];

        if (!session('cart')) {

            // Crear el estado de session 'cart'
            $auxiliar[] = $producto;
            session([ 'cart' => $auxiliar ]);
        } else {

            // Existe la variable de session
            // Extraer el contenido de la variable de session

            $auxiliar = session('cart');

            // Agregar el nuevo item al arreglo

            $auxiliar[] = $producto;

            // Volver a crear la session 'cart'

            session(['cart' => $auxiliar]);
        }

        // Redireccionar al catalogo de productos

        return redirect('productos')
               ->with('mensaje' , 'PRODUCTO AÑADIDO AL CARRITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar la session 'cart'

        session()->forget('cart');
        return redirect('car')
               ->with("mensaje","CARRITO ELIMINADO");

    }
}
