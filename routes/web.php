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

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Route::get('/personas',function(){
    return view('personas');
})->name('personas');

Route::get('/empresas',function(){
    return view('empresas');
})->name('empresas');

Auth::routes();

//rutas para campañas de flyers
Route::get('/admin/eliminarFlyer/{id?}','FlyerController@destroy')->name('eliminarFlyer');
Route::get('/admin/nuevoFlyer','FlyerController@create')->name('nuevoFlyer');
Route::post('/admin/nuevoFlyer','FlyerController@store')->name('guardarFlyer');
Route::get('/admin/listafFlyers','FlyerController@index')->name('listaFlyers');


//Rutas para datos personales
Route::get('/admin/misDatos','CountController@index')->name('verMisDatos');
Route::get('/cliente/misDatos','CountController@index')->name('clientesMisDatos');


//Rutas para trabajar con los clientes
Route::get('/admin/eliminarCliente/{id}','AdminController@deleteCliente')->name('eliminarCliente');
Route::get('/admin/clientes','AdminController@listarClientes')->name('listaClientes');

//rutas para manejar trabajos
Route::get('/admin/verTrabajos','WorksController@index')->name('listarTrabajos');

//Rutas basicas
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('index');
Route::get('/admin/{id}','AdminController@verCliente')->name('verCliente');
Route::patch('/admin/editar/{id}','AdminController@updateCliente')->name('actualizarCliente');





