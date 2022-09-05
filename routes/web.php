<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\noticiasController;

use Illuminate\Http\Request;
use App\Models\noticias;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

Route::get('/', '\App\Http\Controllers\noticiasController@index');
Route::get('/nova_noticia', '\App\Http\Controllers\noticiasController@create');
Route::post('/salvar_noticia', '\App\Http\Controllers\noticiasController@store');
Route::get('/gerir_noticias', '\App\Http\Controllers\noticiasController@apresentarTabelaGestao');

//visibilidade
Route::get('/colocar_visivel/{id}', '\App\Http\Controllers\noticiasController@colocarVisivel');
Route::get('/colocar_invisivel/{id}', '\App\Http\Controllers\noticiasController@colocarInvisivel');

//eliminar
 Route::get('/eliminar_noticia/{id}', '\App\Http\Controllers\noticiasController@destroy');

//editar
Route::get('/editar_noticia/{id}', '\App\Http\Controllers\noticiasController@edit');
Route::post('/atualizar_noticia/{id}', '\App\Http\Controllers\noticiasController@update');




