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

Route::get('/', function () {
    return view('index');
});
// Route::get('/', ['as' => '/', 'uses' => 'App\Http\Controllers\PersonaController@index']);

Route::post('participantes/store', ['as' => 'participantes/store', 'uses' => 'App\Http\Controllers\ParticipanteController@store']);


Route::get('contratos', ['as' => 'contratos', 'uses' => 'App\Http\Controllers\ContratoController@index']);
Route::get('contratos/create', ['as' => 'contratos/create', 'uses' => 'App\Http\Controllers\ContratoController@create']);
Route::post('contratos/store', ['as' => 'contratos/store', 'uses' => 'App\Http\Controllers\ContratoController@store']);
Route::get('participantes/{id}', ['as' => 'participantes', 'uses' => 'App\Http\Controllers\ParticipanteController@index']);
Route::get('participantes/create/{id}', ['as' => 'participantes/create', 'uses' => 'App\Http\Controllers\ParticipanteController@create']);
Route::post('participantes/store', ['as' => 'participantes/store', 'uses' => 'App\Http\Controllers\ParticipanteController@store']);
Route::get('participantes/show/{id}', ['as' => 'participantes/show', 'uses' => 'App\Http\Controllers\ParticipanteController@show']);
Route::resource('/personas', App\Http\Controllers\PersonaController::class);
Route::resource('/participantesInco', App\Http\Controllers\ParticipanteIncomatrixController::class);
Route::get('/bloques/{id}', ['as' => 'bloques', 'uses' => 'App\Http\Controllers\BloqueController@index']);


Route::get('/bloques/create/{id}', ['as' => 'bloques/create', 'uses' => 'App\Http\Controllers\BloqueController@create']);

Route::get('/bloques/show/{id}', ['as' => 'bloques/show', 'uses' => 'App\Http\Controllers\BloqueController@show']);


Route::resource('/bloques', App\Http\Controllers\BloqueController::class);


Route::get('/lineas/{id}', ['as' => 'lineas', 'uses' => 'App\Http\Controllers\LineaController@index']);

Route::get('/lineas/show/{id}', ['as' => 'lineas/show', 'uses' => 'App\Http\Controllers\LineaController@show']);
Route::get('/lineas/create/{id}', ['as' => 'lineas/create', 'uses' => 'App\Http\Controllers\LineaController@create']);


Route::resource('/lineas', App\Http\Controllers\LineaController::class);


		