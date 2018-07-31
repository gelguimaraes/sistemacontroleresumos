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
    return View::make('home');
});

//usuarios
//Route::get('/', 'ControllerUser@index');
Route::post('resumo', 'ControllerResumo@createForm');


Route:: group(['prefix' => 'admin', 'midleware' =>'auth'], function(){


//    Route::get('getFaculdade/{id}', 'ControllerResumo@get');


 //Index
    Route:: get('/', 'ControllerAdmin@createForm');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
