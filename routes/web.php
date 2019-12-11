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

Route::get('/admin', 'AdminController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'admin']], function(){
	Route::get('/', function(){
		return "halaman dashboard admin";
	});
});

Route::group(['prefix' => 'operator', 'middleware' => ['auth' => 'operator']], function(){
	Route::get('/', function(){
		return "halaman dashboard operator";
	});
});

Route::group(['prefix' => 'verifikator', 'middleware' => ['auth' => 'verifikator']], function(){
	Route::get('/', function(){
		return "halaman dashboard verifikator";
	});
});