<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','Api\indexController@index');
Route::get('/slider','Controller@index');


Route::get('/importExportView', 'Controller@importExportView');
Route::get('/export', 'Controller@export')->name('export');
Route::post('/import', 'Controller@import')->name('import');
