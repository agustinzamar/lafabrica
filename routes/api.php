<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'photos', ['middleware' => 'auth:api']], function(){
    Route::post('/delete', 'PhotosController@delete')->name('photos.delete');
    Route::post('/create', 'PhotosController@create')->name('photos.create');
});

Route::group(['prefix' => 'news', ['middleware' => 'auth:api']], function(){
    Route::post('/delete', 'ArticlesController@delete')->name('news.delete');
    Route::post('/create', 'ArticlesController@create')->name('news.create');
});
