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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// RUTAS DE LAS LECTURAS
Route::get('/readings/list', 'LecturasController@index')->name('listsReadings'); //lista de lecturas
Route::get('/readings/create', 'LecturasController@create')->name('readingC');//formulario lectura
Route::post('/reading', 'LecturasController@store')->name('reading'); //registrar lectura
Route::get('/reading/{id}/show', 'LecturasController@show');
Route::get('/reading/{id}/edit', 'LecturasController@edit'); //Editar lectura
Route::post('/reading/{id}/update', 'LecturasController@update'); //Actualizar lectura
Route::post('/reading/{id}/delete', 'LecturasController@destroy');  // Eliminar lectura

// RUTAS DE LAS CATEGORIAS
Route::get('/categories/list', 'CategoryController@index')->name('categoriesL'); // Lista de categorias
Route::get('/categories/create','CategoryController@create')->name('categoriesC'); // Formulario category
Route::post('/categories', 'CategoryController@store')->name('categories'); //registrar lectura
Route::get('/categories/{id}/show', 'CategoryController@show');
Route::get('/categories/{id}/edit', 'CategoryController@edit'); //Editar lectura
Route::post('/categories/{id}/update', 'CategoryController@update'); //Actualizar lectura
Route::post('/categories/{id}/delete', 'CategoryController@destroy');  // Eliminar lectura

// Users
Route::get('/profile', 'UserController@profile')->name('profile');