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

Route::post('participantes/store', ['as' => 'participantes/store', 'uses' => 'App\Http\Controllers\ParticipanteController@store']);


Route::get('contratos', ['as' => 'contratos', 'uses' => 'App\Http\Controllers\ContratoController@index']);
Route::get('participantes', ['as' => 'participantes', 'uses' => 'App\Http\Controllers\ParticipanteController@index']);
Route::get('participantes/create', ['as' => 'participantes/create', 'uses' => 'App\Http\Controllers\ParticipanteController@create']);
Route::post('participantes/store', ['as' => 'participantes/store', 'uses' => 'App\Http\Controllers\ParticipanteController@store']);
Route::get('participantes/show/{id}', ['as' => 'participantes/show', 'uses' => 'App\Http\Controllers\ParticipanteController@show']);
Route::resource('/personas', App\Http\Controllers\PersonaController::class);
		