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
/*Route::get('/plantilla', function () {
    return view('plantilla');
}); */

Route::get('/Login', function () {
    return view('Articulos.Login');
});
Route::get('/Registrarse', function () {
    return view('Articulos.Registrarse');
});
Route::get('/Carreras', function () {
    return view('Articulos.Navegacion.Carreras');
});
Route::get('/index', function () {
    return view('Articulos.Index');
});
Route::get('/profesor', function () {
    return view('Articulos.Profesores');
});
Route::get('/salud', function () {
    return view('Articulos.ServicioSalud');
});
Route::get('/asistentesocial', function () {
    return view('Articulos.AsistenteSocial');
});
Route::get('/recaudacion', function () {
    return view('Articulos.Recaudacion');
});
Route::get('/Artc', function () {
    return view('Articulos.Artc');
});
Route::get('/Guardar', function () {
    return view('Articulos.Guardar');
});