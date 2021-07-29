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
Route::resource('articulos','App\Http\Controllers\ArticuloController');
Route::resource('/','App\Http\Controllers\ArticuloController');

Route::resource('empleados','App\Http\Controllers\EmpleadoController',['except' => ['index','show']]);
Route::get('empleados/{area}/{id}',[EmpleadoController::class, 'mostrar']);
Route::get('empleados/{id}',[EmpleadoController::class, 'index']);

/*Route::get('/plantilla', function () {
    return view('plantilla');
}); */

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Registrarse', function () {
    return view('Registrarse');
});

Route::get('/CRUD', function () {
    return view('Crud');
});
/*
/*
Route::get('/Index', function () {
    return view('Articulos.Index');
});
Route::get('/Artc', function () {
    return view('Articulos.Artc');
});
Route::get('/Editar', function () {
    return view('Articulos.EditarArticulo');
});
Route::get('/Empleados', function () {
    return view('Articulos.Empleados');
});*/