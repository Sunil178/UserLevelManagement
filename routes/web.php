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

Auth::routes();

Route::resource('/role', 'RoleController');
Route::resource('/permission', 'PermissionController')->middleware('auth');
Route::resource('/role-permission', 'RolePermissionController')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('company','CompanyController');
Route::resource('revenue','RevenueController');
