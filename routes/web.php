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
Route::get('/galeria', 'HomeController@gallery')->name('gallery');
Route::get('/jujuylab', 'HomeController@jujuyLab')->name('jujuyLab');
Route::get('/cultivar', 'HomeController@cultivar')->name('cultivar');
Route::get('/normas', 'HomeController@normas')->name('normas');
Route::get('/novedades', 'HomeController@news')->name('news');
Route::get('/proyectos', 'HomeController@projects')->name('projects');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

    Route::get('/fotos', 'AdminController@photos')->name('admin.photos');
    Route::get('/fotos/new', 'AdminController@newPhoto')->name('admin.newPhoto');
    Route::post('/fotos/delete', 'PhotosController@delete')->name('photos.delete');
    Route::post('/fotos/create', 'photosController@create')->name('photos.create');

    Route::get('novedades', 'AdminController@news')->name('admin.news');
    Route::get('novedades/new', 'AdminController@newNew')->name('admin.newNew');
    Route::post('novedades/delete', 'ArticlesController@delete')->name('news.delete');
    Route::post('novedades/create', 'ArticlesController@create')->name('news.create');

});
