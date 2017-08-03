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
})->name('home');

Route::post('/signup',[
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);
Route::post('/signin',[
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
]);
Route::get('/dashboard',[
    'uses' => 'UserController@getDashboard',
    'as' => 'dashboard',
    'middleware'=> 'auth'
]);
Route::get('/client',[
    'uses' => 'ClientController@getClient',
    'as' => 'client',
]);
Route::post('/createclient',[
    'uses' => 'ClientController@clientCreateclient',
    'as' => 'client.create'
]);
Route::get('/clientsingle',[
    'uses' => 'ClientController@getClientSingle',
    'as' => 'client.get',
]);