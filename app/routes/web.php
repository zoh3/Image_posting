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

// Route::get('/', function(){
//     return view('index');
// });

// index'/'から'/works'に変更したら上手くいった
Route::get('/', 'WorkController@index');
Route::get('/works/create', 'WorkController@create');
Route::get('/works/{work}/edit', 'WorkController@edit');
Route::put('/works/{work}', 'WorkController@update');
Route::get('/works/{work}', 'WorkController@show');
Route::post('/works' , 'WorkController@store');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
