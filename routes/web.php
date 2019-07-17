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

//Vista del home
Route::get('/home', 'PostulanteController@home');


//Vistas que insertan postulantes
Route::get('/formularioPostulante', 'PostulanteController@index');
Route::post('/agregarPostulante', 'PostulanteController@insertarPostulante');


//Vistas que calculan el puintaje de un postulante
Route::get('/calculoPuntaje', 'PostulanteController@calculoPuntaje');
Route::post('calculoUnicoPuntaje','PostulanteController@calcularPuntajeUnico');


//Vistas que calculan el puntaje de todos los usuarios
Route::get('/calculoPuntajeTotal', 'PostulanteController@calculoPuntajeTotal');
Route::post('/calculoPuntajeTotal2', 'PostulanteController@calculoPuntajeTotal2');


