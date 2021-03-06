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

Route::group(['middleware' => ['auth']], function () {

    Route::get('auth/logout', function() {
        \Auth::logout();
        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/login');
    });

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'setoresClientes'], function() {
        Route::get('/', ['as' => 'setoresClientes.index', 'uses' => 'SetorClienteController@index']);
        Route::get('index', ['as' => 'setoresClientes.index', 'uses' => 'SetorClienteController@index']);
        Route::get('create', ['as' => 'setoresClientes.create', 'uses' => 'SetorClienteController@create']);
        Route::post('store', ['as' => 'setoresClientes.store', 'uses' => 'SetorClienteController@store']);
        Route::get('edit/{id}', ['as' => 'setoresClientes.edit', 'uses' => 'SetorClienteController@edit']);
        Route::get('show/{id}', ['as' => 'setoresClientes.show', 'uses' => 'SetorClienteController@show']);
        Route::put('update/{id}', ['as' => 'setoresClientes.update', 'uses' => 'SetorClienteController@update']);
        Route::get('destroy/{id}', ['as' => 'setoresClientes.destroy', 'uses' => 'SetorClienteController@destroy']);
    });

    Route::group(['prefix' => 'status'], function() {
        Route::get('/', ['as' => 'status.index', 'uses' => 'StatusController@index']);
        Route::get('index', ['as' => 'status.index', 'uses' => 'StatusController@index']);
        Route::get('create', ['as' => 'status.create', 'uses' => 'StatusController@create']);
        Route::post('store', ['as' => 'status.store', 'uses' => 'StatusController@store']);
        Route::get('edit/{id}', ['as' => 'status.edit', 'uses' => 'StatusController@edit']);
        Route::put('update/{id}', ['as' => 'status.update', 'uses' => 'StatusController@update']);
        Route::get('destroy/{id}', ['as' => 'status.destroy', 'uses' => 'StatusController@destroy']);
    });

    Route::group(['prefix' => 'prioridade'], function() {
        Route::get('/', ['as' => 'prioridade.index', 'uses' => 'PrioridadeController@index']);
        Route::get('index', ['as' => 'prioridade.index', 'uses' => 'PrioridadeController@index']);
        Route::get('create', ['as' => 'prioridade.create', 'uses' => 'PrioridadeController@create']);
        Route::post('store', ['as' => 'prioridade.store', 'uses' => 'PrioridadeController@store']);
        Route::get('edit/{id}', ['as' => 'prioridade.edit', 'uses' => 'PrioridadeController@edit']);
        Route::put('update/{id}', ['as' => 'prioridade.update', 'uses' => 'PrioridadeController@update']);
        Route::get('destroy/{id}', ['as' => 'prioridade.destroy', 'uses' => 'PrioridadeController@destroy']);
    });

    Route::group(['prefix' => 'tiposUsuarios'], function() {
        Route::get('/', ['as' => 'tiposUsuarios.index', 'uses' => 'TiposUsuariosController@index']);
        Route::get('index', ['as' => 'tiposUsuarios.index', 'uses' => 'TiposUsuariosController@index']);
        Route::get('create', ['as' => 'tiposUsuarios.create', 'uses' => 'TiposUsuariosController@create']);
        Route::post('store', ['as' => 'tiposUsuarios.store', 'uses' => 'TiposUsuariosController@store']);
        Route::get('edit/{id}', ['as' => 'tiposUsuarios.edit', 'uses' => 'TiposUsuariosController@edit']);
        Route::put('update/{id}', ['as' => 'tiposUsuarios.update', 'uses' => 'TiposUsuariosController@update']);
        Route::get('destroy/{id}', ['as' => 'tiposUsuarios.destroy', 'uses' => 'TiposUsuariosController@destroy']);
    });

    Route::group(['prefix' => 'clientes'], function() {
        Route::get('/', ['as' => 'clientes.index', 'uses' => 'ClientesController@index']);
        Route::get('index', ['as' => 'clientes.index', 'uses' => 'ClientesController@index']);
        Route::get('create', ['as' => 'clientes.create', 'uses' => 'ClientesController@create']);
        Route::post('store', ['as' => 'clientes.store', 'uses' => 'ClientesController@store']);
        Route::get('edit/{id}', ['as' => 'clientes.edit', 'uses' => 'ClientesController@edit']);
        Route::get('show/{id}', ['as' => 'clientes.show', 'uses' => 'ClientesController@show']);
        Route::put('update/{id}', ['as' => 'clientes.update', 'uses' => 'ClientesController@update']);
        Route::get('destroy/{id}', ['as' => 'clientes.destroy', 'uses' => 'ClientesController@destroy']);
    });

    Route::group(['prefix' => 'atendentes'], function() {
        Route::get('/', ['as' => 'atendentes.index', 'uses' => 'AtendentesController@index']);
        Route::get('index', ['as' => 'atendentes.index', 'uses' => 'AtendentesController@index']);
        Route::get('edit/{id}', ['as' => 'atendentes.edit', 'uses' => 'AtendentesController@edit']);
        Route::get('show/{id}', ['as' => 'atendentes.show', 'uses' => 'AtendentesController@show']);
        Route::put('update/{id}', ['as' => 'atendentes.update', 'uses' => 'AtendentesController@update']);
        Route::get('destroy/{id}', ['as' => 'atendentes.destroy', 'uses' => 'AtendentesController@destroy']);
    });

    Route::group(['prefix' => 'chamados'], function() {
        Route::get('/', ['as' => 'chamados.index', 'uses' => 'ChamadosController@index']);
        Route::get('index', ['as' => 'chamados.index', 'uses' => 'ChamadosController@index']);
        Route::get('emaberto', ['as' => 'chamados.emaberto', 'uses' => 'ChamadosController@emAberto']);
        Route::get('ematendimento', ['as' => 'chamados.ematendimento', 'uses' => 'ChamadosController@emAtendimento']);
        Route::get('atendidos', ['as' => 'chamados.atendidos', 'uses' => 'ChamadosController@atendidos']);
        Route::get('meuschamados', ['as' => 'chamados.meuschamados', 'uses' => 'ChamadosController@meusChamados']);
        Route::get('create', ['as' => 'chamados.create', 'uses' => 'ChamadosController@create']);
        Route::post('store', ['as' => 'chamados.store', 'uses' => 'ChamadosController@store']);
        Route::get('edit/{id}', ['as' => 'chamados.edit', 'uses' => 'ChamadosController@edit']);
        Route::get('show/{id}', ['as' => 'chamados.show', 'uses' => 'ChamadosController@show']);
        Route::put('update/{id}', ['as' => 'chamados.update', 'uses' => 'ChamadosController@update']);
        Route::get('destroy/{id}', ['as' => 'chamados.destroy', 'uses' => 'ChamadosController@destroy']);
    });

    Route::group(['prefix' => 'usuarios'], function() {
        Route::get('/', ['as' => 'usuarios.index', 'uses' => 'UsuariosController@index']);
        Route::get('index', ['as' => 'usuarios.index', 'uses' => 'UsuariosController@index']);
        Route::get('create', ['as' => 'usuarios.create', 'uses' => 'UsuariosController@create']);
        Route::post('store', ['as' => 'usuarios.store', 'uses' => 'UsuariosController@store']);
        Route::get('edit/{id}', ['as' => 'usuarios.edit', 'uses' => 'UsuariosController@edit']);
        Route::get('show/{id}', ['as' => 'usuarios.show', 'uses' => 'UsuariosController@show']);
        Route::put('update/{id}', ['as' => 'usuarios.update', 'uses' => 'UsuariosController@update']);
        Route::get('perfil/{id}', ['as' => 'usuarios.perfil', 'uses' => 'UsuariosController@perfil']);
        Route::put('updatePerfil/{id}', ['as' => 'usuarios.updatePerfil', 'uses' => 'UsuariosController@updatePerfil']);
        Route::get('password/{id}', ['as' => 'usuarios.password', 'uses' => 'UsuariosController@password']);
        Route::put('updatePassword/{id}', ['as' => 'usuarios.updatePassword', 'uses' => 'UsuariosController@updatePassword']);
        Route::get('destroy/{id}', ['as' => 'usuarios.destroy', 'uses' => 'UsuariosController@destroy']);
    });
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


