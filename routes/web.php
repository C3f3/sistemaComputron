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
})->name('index');

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


Route::get('/admin/nuevoFlyer','FlyerController@create')->name('nuevoFlyer');
Route::post('/admin/nuevoFlyer','FlyerController@store')->name('guardarFlyer');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('index');
Route::get('/admin/clientes','AdminController@listarClientes')->name('listaClientes');
Route::get('/admin/{id}','AdminController@verCliente')->name('verCliente');
Route::patch('/admin/{id?}/editar','AdminController@updateCliente')->name('actualizarCliente');
Route::delete('/admin/{id}','AdminController@deleteCliente')->name('eliminarCliente');

