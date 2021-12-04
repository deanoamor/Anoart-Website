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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/download', 'App\Http\Controllers\clientsideController@indexclient')->name('download');
Route::get('/download/cari', 'App\Http\Controllers\clientsideController@caridata');
Route::get('/download/{id}', 'App\Http\Controllers\clientsideController@getdata');



Route::get('/loginmasayologin', 'App\Http\Controllers\AuthController@showFormLogin')->name('login');
Route::post('/login/store', 'App\Http\Controllers\AuthController@Login');
// Route::get('/register', 'App\Http\Controllers\AuthController@showFormRegister')->name('register');
// Route::post('/register/store', 'App\Http\Controllers\AuthController@register');


Route::get('/dashboardinilohsumpah', 'App\Http\Controllers\HomeController@index')->name('dashboard');
Route::get('/createinilohanjir', 'App\Http\Controllers\HomeController@create')->name('create');
Route::post('/create/store', 'App\Http\Controllers\HomeController@store');
Route::get('/editinilohanjir/{id}', 'App\Http\Controllers\HomeController@edit')->name('edit');
Route::post('/edit/update', 'App\Http\Controllers\HomeController@update');
Route::get('/deletebang/{id}', 'App\Http\Controllers\HomeController@hapus');



Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
