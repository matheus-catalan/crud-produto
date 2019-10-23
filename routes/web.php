<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::resource('/gravar', ['uses' => 'ProdutoController@store']);
*/
Route::get('/', ['uses' => 'ProdutoController@index']);
Route::get('/produtos', ['uses' => 'ProdutoController@index']);
Route::get('/produtos/cadastro', ['uses' => 'ProdutoController@cadastro']);
Route::get('/produtos/update', ['uses' => 'ProdutoController@edicao']);
Route::resource('/produtos', 'ProdutoController');




?>
