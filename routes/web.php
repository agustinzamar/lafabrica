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
    return view('index');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/fotos', 'AdminController@photos')->name('admin.photos');
    Route::get('/fotos/nueva', 'AdminController@newPhoto')->name('admin.newPhoto');
    Route::get('/novedades', 'AdminController@news')->name('admin.news');
    Route::get('/novedades/nueva', 'AdminController@newNew')->name('admin.newNew');
});
