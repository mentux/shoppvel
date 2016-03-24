<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */


/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'FrenteLojaController@getIndex');
    Route::get('sobre', [
        'as' => 'sobre',
        'uses' => 'FrenteLojaController@getSobre'
    ]);
    Route::get('categoria/{id?}', [
        'as' => 'categoria.listar',
        'uses' => 'CategoriaController@getCategoria'
    ]);
    Route::get('produto/{id}', [
        'as' => 'produto.detalhes',
        'uses' => 'ProdutoController@getProdutoDetalhes'
    ]);
    Route::get('imagem/arquivo/{nome}', [
        'as' => 'imagem.file',
        'uses' => 'ImagemController@getImagemFile'
    ]);
    Route::any('produto/buscar', [
        'as' => 'produto.buscar',
        'uses' => 'ProdutoController@getBuscar'
    ]);
});
