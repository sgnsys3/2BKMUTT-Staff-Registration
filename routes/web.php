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

// Route::get('/', 'HomeController@index');
// Route::get('/regis/step1', 'StaffRegisterController@step1');
// Route::post('/regis/step2', 'StaffRegisterController@postStep2');
// Route::get('/regis/step2', 'StaffRegisterController@step2');
// Route::get('/regis/step4', 'Step4RegisterController@step4');
// Route::post('/regis/step4', 'Step4RegisterController@uploadDoc');
// Route::get('/regis/quiz', 'Step4RegisterController@quiz');
// Route::get('/logout', 'Step4RegisterController@logout');
// Route::get('/chkregis','StaffRegisterController@checkCompleteUser');

// Route::post('/api/schoolinfo', 'ApiController@schoolInfo');
// Route::post('/api/homeinfo', 'ApiController@homeInfo');
// Route::post('/api/parentinfo', 'ApiController@parentInfo');
// Route::post('/api/2binfo', 'ApiController@a2bInfo');
// Route::post('/api/iscomplete', 'ApiController@isComplete');
// Route::post('/api/answer', 'ApiController@answer');
// Route::post('/api/answercheck', 'ApiController@answerCheck');

// Route::post('/api/test', 'ApiController@testApi');

Route::get('', function () {
    return view('welcome');
});

