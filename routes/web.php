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
//user routes
Route::get('/', 'Pagescontroller@index')->name('index');
Route::get('/companies', 'Pagescontroller@companies');

//admin routes
Route::get('/admin', 'PostsController@adminIndex');


//post routes
Route::resource('posts', 'PostsController');
Route::get('/materials', 'PostsController@materials');
Route::get('/materials/{id}', 'PostsController@showMaterial');


//auth routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
