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
Route::get('/novedades/{id}', 'HomeController@new')->name('new');
Route::get('/novedades', 'HomeController@news')->name('news');
Route::get('/proyectos', 'HomeController@projects')->name('projects');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

    Route::get('/fotos/new/{project_id}', 'AdminController@newPhoto')->name(
        'admin.newPhoto'
    );
    Route::post('/fotos/delete', 'PhotosController@delete')->name(
        'photos.delete'
    );
    Route::post('/fotos/create', 'photosController@create')->name(
        'photos.create'
    );

    Route::get('novedades', 'AdminController@news')->name('admin.news');
    Route::get('novedades/new/{id?}', 'AdminController@newNew')->name(
        'admin.newNew'
    );
    Route::post('novedades/delete', 'ArticlesController@delete')->name(
        'news.delete'
    );
    Route::post('novedades/create', 'ArticlesController@create')->name(
        'news.create'
    );
    Route::post('novedades/edit/{id}', 'ArticlesController@edit')->name(
        'news.edit'
    );

    Route::get('proyectos', 'AdminController@projects')->name('admin.projects');

    Route::get('proyectos/{id}', 'AdminController@project')->name(
        'admin.project'
    );
});

Route::post('/contact', 'EmailController@contact')->name('email.contact');
