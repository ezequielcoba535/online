<?php

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


// Route::get('index', function () {
//     return view('tienda.index');
// });


// Route::get('login', function () {
//     return view('tienda.login');
// });

// Route::get('pago', function () {
//     return view('tienda.pago');
// });

// Route::get('catalogo', function () {
//     return view('tienda.catalogo');
// });

// Route::get('celulares', function () {
//     return view('tienda.celulares');
// });

// Route::get('perfumeria', function () {
//     return view('tienda.perfumeria');
// });

// Route::get('ropa', function () {
//     return view('tienda.ropa');
// });

// Route::get('mascotas', function () {
//     return view('tienda.mascotas');
// });

// Route::get('electronica', function () {
//     return view('tienda.electronica');
// });

/////////////////// vistas
Route::view('diseño','galeria.diseños');
Route::view('admin','galeria.administrador');
Route::view('mod','galeria.modal');
Route::view('car','galeria.carusel');


// Route::view('log','galeria.login');
Route::view('prod','galeria.productos');
Route::view('error','galeria.mensaje');

/////apisssssss

// Route::apiResource('apiRopa','ApiRopaController');
Route::apiResource('apiRop','ApiRopasController');
Route::apiResource('apiFot','ApiFotoController');
Route::apiResource('apiImage','ApiImagenesController');
///// logueo con la base de datos
Route::view('/','galeria.logueo');
Route::post('login','AccesoController@validar');
Route::get('logout','AccesoController@salir');