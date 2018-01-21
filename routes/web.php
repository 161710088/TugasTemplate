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
Route::get('/gallery', function () {
    return view('web.gallery');
});

Route::get('/paragraph', function () {
    return view('web.par');
});
Route::get('/artikel', function () {
    return view('web.ar');
});
Route::get('/contac', function () {
    return view('web.contac');
});
Route::get('/ar1', function () {
    return view('artikel.ar1');
});
Route::get('/table', 'SiswaController@table');
	
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return view('web.awal');
});