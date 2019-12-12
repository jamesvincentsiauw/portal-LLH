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
//Start Home Route
Route::get('/', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::get('/news', 'HomeController@news');
Route::get('/forms', 'HomeController@forms');
Route::get('/tracks', 'HomeController@tracks');
Route::get('/news/detail/{id}', 'HomeController@newsDetails');
Route::get('/search', 'HomeController@search');
//End Home Route

//Start Submission Route
Route::post('/submission/add','UserController@addSubmission');
Route::get('/SOPAWUASUUW82901SSL/submission/track/{id}','UserController@trackSubmission');
Route::get('/submission/accept/{id}','AdminController@showAcceptanceForm');
Route::post('/submission/accept/{id}','AdminController@acceptSubmission');
Route::post('/submission/decline/{id}','AdminController@declineSubmission');
Route::post('/submission/change/{id}', 'AdminController@changeProgress');
//End Submission Route

//Start Admin Route
Route::get('/admin', 'AdminController@index')->middleware('admin');
Route::post('/admin/login', 'AdminController@loginAdmin');
Route::get('/admin/login', 'AdminController@showLoginForm');
Route::post('/admin/logout', 'AdminController@logout');
Route::get('/admin/published', 'AdminController@publishedRegulation')->middleware('admin');
Route::get('/admin/on-progress', 'AdminController@onProgressRegulation')->middleware('admin');
Route::get('/admin/news','AdminController@showNews')->middleware('admin');
Route::get('/admin/news/add','AdminController@addNewsForm')->middleware('admin');
Route::post('/admin/news/add','AdminController@addNews')->middleware('admin');
Route::post('/admin/news/delete/{id}','AdminController@deleteNews')->middleware('admin');
//End Admin Route