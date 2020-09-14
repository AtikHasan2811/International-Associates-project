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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/',[frontendController::class, 'index']);
//Route::get('photo',[frontendController::class,'photo'])->name('photo');
Route::get('/','frontendController@index');
Route::get('/photo','PhotoController@index')->name('photo');
Route::get('/corrective','CorrectiveController@index')->name('corrective');
Route::get('/result','ResultController@index')->name('result');
Route::get('/secutity','SelectController@security')->name('secutity');
Route::post('/report','ReportController@report')->name('report');
Route::post('/image/store','PhotoController@store')->name('store');



//...................for backend..........................
Route::get('dashboard','backendController@view_dashboard');
