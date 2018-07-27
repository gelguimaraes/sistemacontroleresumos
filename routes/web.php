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

//usuarios
//Route::get('/', 'ControllerUser@index');
Route::post('addResumo', 'ControllerUser@add');
Route::post('viewTrabalhos', 'ControllerUser@view');

Route:: group(['prefix' => 'admin', 'middleware'=>'auth'], function(){
//Faculdade
    Route::post('addFaculdade', 'ControllerFaculdade@add');
    Route::delete('deleteFaculdade/{id}', 'ControllerFaculdade@delete');
    Route::get('getFaculdade/{id}', 'ControllerFaculdade@get');
    Route::get('listFaculdade', 'ControllerFaculdade@list');
    Route::get('formFaculdade', 'ControllerFaculdade@createForm');
    Route::put('updadeFaculdade/{id}', 'ControllerFaculdade@update');
    Route::get('editFormFaculdade/{id}', 'ControllerFaculdade@edit');

//Semestre
    Route::post('addSemestre', 'ControllerSemestre@add');
    Route::delete('deleteSemestre/{id}', 'ControllerSemestre@delete');
    Route::get('getSemestre/{id}', 'ControllerSemestre@get');
    Route:: group(['prefix' => 'listSemestre'], function(){
        Route::get('/', 'ControllerSemestre@list'); ///criar grupo para o mesmo controler setar valor null para os parametros
        Route::get('/faculdade/{id?}', 'ControllerSemestre@list');
    });
    Route::get('formSemestre', 'ControllerSemestre@createForm');
    Route::put('updadeSemestre/{id}', 'ControllerSemestre@update');
    Route::get('editFormSemestre/{id}', 'ControllerSemestre@edit');

//Disciplina
    Route::post('addDisciplina', 'ControllerDisciplina@add');
    Route::delete('deleteDisciplina/{id}', 'ControllerDisciplina@delete');
    Route::get('getDisciplina/{id}', 'ControllerDisciplina@get');
    Route::get('listDisciplina/faculdade/{id?}/{semestre?}/{id?}', 'ControllerDisciplina@list');
    Route::get('formDisciplina', 'ControllerDisciplina@createForm');
    Route::put('updadeDisciplina/{id}', 'ControllerDisciplina@update');
    Route::get('editFormDisciplina/{id}', 'ControllerDisciplina@edit');

//Tema
    Route::post('addTema', 'ControllerTema@add');
    Route::delete('deleteTema/{id}', 'ControllerTema@delete');
    Route::get('getTema/{id}', 'ControllerTema@get');
    Route::get('listTema', 'ControllerTema@list');
    Route::get('formTema', 'ControllerTema@createForm');
    Route::put('updadeTema/{id}', 'ControllerTema@update');
    Route::get('editFormTema/{id}', 'ControllerTema@edit');

//Login
    Route::post('addLogin', 'ControllerLogin@add');
    Route::delete('deleteLogin/{id}', 'ControllerLogin@delete');
    Route::get('getLogin/{id}', 'ControllerLogin@get');
    Route::get('listLogin', 'ControllerLogin@list');
    Route::get('formLogin', 'ControllerLogin@createForm');
    Route::put('updadeLogin/{id}', 'ControllerLogin@update');
    Route::get('editFormLogin/{id}', 'ControllerLogin@edit');

//Resumo
    Route::post('addResumo', 'ControllerResummo@add');
    Route::delete('deleteResumo/{id}', 'ControllerResumo@delete');
    Route::get('getResumo/{id}', 'ControllerResumo@get');
    Route::get('listResumo', 'ControllerResumo@list');
    Route::get('formResumo', 'ControllerResumo@createForm');
    Route::put('updadeResumo/{id}', 'ControllerResumo@update');
    Route::get('editFormResumo/{id}', 'ControllerResumo@edit');

 //Index
    Route:: get('/', 'ControllerAdmin@index');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
