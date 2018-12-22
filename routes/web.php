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

Route::get('/test', 'PagesController@test');

Route::get('/admin/children/view', 'ChildrenController@index');
Route::post('/admin/children/create', 'ChildrenController@store');
Route::get('/admin/children/create', 'ChildrenController@create');
Route::get('/admin/children/{child}/edit', 'ChildrenController@edit');
Route::patch('admin/children/{child}', 'ChildrenController@update');
Route::delete('admin/children/{child}', 'ChildrenController@destroy');


Route::get('/admin/index', 'AdminPageController@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
