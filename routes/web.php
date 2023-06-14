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
    return view('welcome');
});

Route::get('proyecto', 'ProyectoController@index')->name('Proyecto.index');
Route::get('proyecto/create', 'ProyectoController@create')->name('Proyecto.create');
Route::post('proyecto/create', 'ProyectoController@store')->name('Proyecto.store');
Route::delete('proyecto/{id}', 'proyectoController@destroy')->name('Proyecto.destroy');
Route::get('proyecto/{id}/edit', 'proyectoController@edit')->name('Proyecto.edit');
Route::put('proyecto/{id}', 'proyectoController@update')->name('Proyecto.update');