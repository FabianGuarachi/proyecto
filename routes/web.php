<?php

use Illuminate\Support\Facades\Route;

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


/*Route::get('/articulo', function () {
    return view('articulo');
});*/
/*Route::get('/', function () {
    return view('Articulos.Index');
});*/
Route::resource('articulos','App\Http\Controllers\ArticuloController');

Route::resource('empleados/{id}','App\Http\Controllers\EmpleadoController');
/*Route::get('/plantilla', function () {
    return view('plantilla');
}); */

/*Route::get('/Login', function () {
    return view('Articulos.Login');
})->name('login');
Route::get('/Registrarse', function () {
    return view('Articulos.Registrarse');
});
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