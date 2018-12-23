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

Route::get('/test', 'PagesController@test');

Route::get('/admin/children/view', 'ChildrenController@index');
Route::post('/admin/children/create', 'ChildrenController@store');
Route::get('/admin/children/create', 'ChildrenController@create');
Route::get('/admin/children/{child}/edit', 'ChildrenController@edit');
Route::patch('admin/children/{child}', 'ChildrenController@update');
Route::delete('admin/children/{child}', 'ChildrenController@destroy');


Route::get('/admin/staffs/view', 'StaffsController@index');
Route::post('/admin/staffs/create', 'StaffsController@store');
Route::get('/admin/staffs/create', 'StaffsController@create');
Route::get('/admin/staffs/{staff}/edit', 'StaffsController@edit');
Route::patch('admin/staffs/{staff}', 'StaffsController@update');
Route::delete('admin/staffs/{staff}', 'StaffsController@destroy');

Route::get('/admin/activities/view', 'ActivitiesController@index');
Route::post('/admin/activities/create', 'ActivitiesController@store');
Route::get('/admin/activities/create', 'ActivitiesController@create');
Route::get('/admin/activities/{activity}/edit', 'ActivitiesController@edit');
Route::patch('admin/activities/{activity}', 'ActivitiesController@update');
Route::delete('admin/activities/{activity}', 'ActivitiesController@destroy');


Route::get('/admin/users/view', 'UsersController@index');

Route::get('/volunteer', 'VolunteersController@index');
Route::post('/volunteer/apply', 'VolunteersController@store');
Route::get('/volunteer/apply', 'VolunteersController@create');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
Route::get('/admin/index', 'AdminPageController@dashboard');
Route::get('/admin/logout', 'Auth\AdminLoginController@logout');

Route::get('/admin/index', 'LaravelGoogleGraph@index');
