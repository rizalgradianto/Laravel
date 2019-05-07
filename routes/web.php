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
Route::get('/form','TestController@input');
Route::post('/form/input-process', 'TestController@inputprocess');
//Route::get('view', 'TestController@inputprocess');
Route::get('/view', 'TestController@view');
Route::get('/destroy/{id}', 'TestController@destroy');
Route::post('/form', 'TestController@store');
// Route::post('/update', 'TestController@edit');
Route::post('/update/{id}', 'TestController@update');