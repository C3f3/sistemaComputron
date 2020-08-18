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

Route::get('/gaming',function(){
    return view('gaming');
})->name('gaming');

Route::get('/reparacion', function(){
    return view('reparacion');
})->name('reparacion');

Route::get('/microelectronica', function(){
    return view('microelectronica');
})->name('microelectronica');

Route::get('/design', function(){
    return view('design');
})->name('diseño');

Route::get('/express', function(){
    return view('express');
})->name('express');

Route::get('/redes', function(){
    return view('redes');
})->name('redes');

Route::get('/prog', function(){
    return view('programar');
})->name('programacion');

Route::get('/test',function(){
    $user=App\User::findOrFail(2);
    return $user->trabajos;
});

Auth::routes();

//rutas para campañas de flyers
Route::get('/admin/eliminarFlyer/{id?}','FlyerController@destroy')->name('eliminarFlyer');
Route::get('/admin/nuevoFlyer','FlyerController@create')->name('nuevoFlyer');
Route::post('/admin/nuevoFlyer','FlyerController@store')->name('guardarFlyer');
Route::get('/admin/listaFlyers','FlyerController@index')->name('listaFlyers');
Route::get('/cliente/listaFlyers','FlyerController@index')->name('listaFlyersCliente');


//Rutas para datos personales
Route::get('/admin/misDatos','CountController@index')->name('verMisDatos');//ADMIN
Route::get('/cliente/misDatos','CountController@index')->name('clientesMisDatos');//CLIENTE

Route::patch('/admin/MisDatos/{id}','CountController@updateDatos')->name('actualizarMisDatosAdmin');//ADMIN
Route::patch('/cliente/MisDatos/{id}','CountController@updateDatos')->name('actualizarMisDatosClient');//CLIENTE


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





