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

    Route::get('/home', function () {
        return view('home');
    });
    
    Route::group(['prefix' => 'setoresClientes'], function(){
        Route::get('index', ['as' => 'setoresClientes.index', 'uses' => 'SetorClienteController@index']);
        Route::get('create', ['as' => 'setoresClientes.create', 'uses' => 'SetorClienteController@create']);
        Route::post('store', ['as' => 'setoresClientes.store', 'uses' => 'SetorClienteController@store']);
        Route::get('edit/{id}', ['as' => 'setoresClientes.edit', 'uses' => 'SetorClienteController@edit']);
        Route::get('show/{id}', ['as' => 'setoresClientes.show', 'uses' => 'SetorClienteController@show']);
        Route::put('update/{id}', ['as' => 'setoresClientes.update', 'uses' => 'SetorClienteController@update']);
        Route::get('destroy/{id}', ['as' => 'setoresClientes.destroy', 'uses' => 'SetorClienteController@destroy']);
     });
     
    Route::group(['prefix' => 'status'], function(){
        Route::get('index', ['as' => 'status.index', 'uses' => 'StatusController@index']);
        Route::get('create', ['as' => 'status.create', 'uses' => 'StatusController@create']);
        Route::post('store', ['as' => 'status.store', 'uses' => 'StatusController@store']);
        Route::get('edit/{id}', ['as' => 'status.edit', 'uses' => 'StatusController@edit']);
        Route::put('update/{id}', ['as' => 'status.update', 'uses' => 'StatusController@update']);
        Route::get('destroy/{id}', ['as' => 'status.destroy', 'uses' => 'StatusController@destroy']);
     });

});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


