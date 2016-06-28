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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ruc',[
    'as' => 'ruc', 'uses' => 'SoapController@ruc'
]);

Route::get('/webservice', function () {
    return view('formulario');
});

Route::post('/webservice',['uses'=>'SoapController@webservice'] );

Route::get('/dni',[
  'as' => 'dni', 'uses' => 'SoapController@dni'
]);