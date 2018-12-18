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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/children', 'PagesController@children');
Route::get('/donate', 'PagesController@donate');
Route::get('/photos', 'PagesController@photos');
Route::get('/volunteer', 'PagesController@volunteer');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
ROute::get('/admin', 'AdminController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
