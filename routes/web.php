<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Primera Ruta
//get: mostrar por el navegador
//parametros: 1. nombre de la ruta
Route::get('HOLA', function() {
    echo "Hola mi primera ruta en PHP";
});

//Ruta Paises
Route::get('paises', function() {

    $paises=[
    
    "Colombia" => ["Capital" => "Bogotá",
                    "Moneda" => "Peso",
                    "Población" => 51.6,
                    "Ciudades" => ["Medellin",
                                    "Cali",
                                    "Barranquilla"]],

    "Peru" => ["Capital" => "Lima",
                "Moneda" => "Sol",
                "Población" => 32.97,
                "Ciudades" => ["Cusco",
                                "Trujillo"]],

    "Paraguay"=> ["Capital" => "Asunción",
                    "Moneda" => "Guaraní",
                    "Población" => 7.133,
                    "Ciudades" => ["Encarnación",
                                    "Areguá",
                                    "Villarica",
                                    "San Lorenzo"]]
                   
    ];

    // echo"<pre>";
    // var_dump($paises);
    // echo"</pre>";

//Mostrar Vista
    return view('paises')
    ->with("paises", $paises);

});

Route::get('prueba', function() {

    return view('productos.new');

});

//Rutas REST
//Producto

Route::resource('productos' ,
                ProductoController::class);
Route::resource('car' ,
                CarController::class,
            [ 'only' => ['store', 'destroy', 'categoria']
        ]);                