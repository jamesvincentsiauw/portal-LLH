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
Route::post('/submission/add','UserController@addSubmission');
Route::post('/submission/track','UserController@trackSubmission');
Route::post('/news/add','AdminController@addNews');
Route::post('/news/edit','AdminController@editNews');
Route::post('/news/delete','AdminController@deleteNews');
Route::get('/tes','TesController@index');