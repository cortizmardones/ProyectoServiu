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

Route::get('/home', 'PostulanteController@home');


Route::get('/formularioPostulante', 'PostulanteController@index');
Route::post('/agregarPostulante', 'PostulanteController@insertarPostulante');



Route::get('/calculoPuntaje', 'PostulanteController@calculoPuntaje');

Route::get('/calculoPuntajeTotal', 'PostulanteController@calculoPuntajeTotal');



//Calcular Puntaje por año y RUT
Route::post('urgente','PostulanteController@calcularAno');