<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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

// en esta ruta http://localhost/evaluacion1_framework/public/ muestra la pagina principal
Route::get('/', function () {
    return view('welcome');
});

/*// en esta ruta http://localhost/evaluacion1_framework/public/empleado muestra empleado
Route::get('/empleado', function () {
    return view('empleado.index'); //esta es la ruta de empleados dentro de la carpeta empleados y con la hoja index
});

// en esta ruta http://localhost/evaluacion1_framework/public/usuario muestra usuarios
Route::get('/usuario', function () {
    return view('usuario.index'); //esta es la ruta de empleados dentro de la carpeta usuario y con la hoja index
});
Route::get('/empleado/create', [EmpleadoController::class,'create']); */

Route::resource('empleado', EmpleadoController::class); // con esta ruta remplazamos todas las rutas que hicimos arriba