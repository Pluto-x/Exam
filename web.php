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
Route::prefix('week')->group(function (){
    Route::get('index','weekController@index');
    Route::post('add','weekController@add');
    Route::get('show','weekController@show');
    Route::get('del','weekController@del');
    Route::get('ck','weekController@ck');
});
