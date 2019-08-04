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

//Auth::routes();
Auth::routes(['register' => false]);
Route::get('/listeItem', function () { return view('items.index'); });
Route::get('items','ItemsController@index');
Route::get('items/create','ItemsController@create');
Route::post('/items','ItemsController@store');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/user/registe', 'RegistreController@create');
Route::post('/registe', 'RegistreController@store');

