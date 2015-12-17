<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@getIndex');

Route::get('relatos', 'HomeController@getRelatos');

Route::get('perfil', ['middleware' => ['admin'], function() {
    return view('home-admin');
}]);

//Bug Login Laravel
Route::get('home', function (){
  return redirect('/');
});

//Contatp
Route::get('contato', 'ContatoController@index');
Route::post('contato', 'ContatoController@store');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(["prefix" => "perfil", 'middleware' =>'admin'], function() {

    Route::get('/textos','TextController@index');
    Route::get('/textos/create','TextController@create');
    Route::post('/textos','TextController@store');
    Route::get('/textos/{id}/edit','TextController@edit');
    Route::post('/textos/{id}/edit', 'TextController@update');
    Route::get('/textos/{id}', 'TextController@destroy');

});