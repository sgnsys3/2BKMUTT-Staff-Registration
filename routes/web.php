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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/regis/step1', 'StaffRegisterController@step1');
Route::get('/regis/step2', 'StaffRegisterController@step2');
Route::get('/regis/step3', 'StaffRegisterController@step3');
