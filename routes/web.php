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


Auth::routes();

Route::get('/', 'WelcomeController@index');
Route::get('/home',['as' => 'home', 'uses' =>'HomeController@index']);
Route::get('1', function() { return 'Je suis la page 1 !'; });

Route::get('/APropos',['as' => 'APropos', 'uses' =>'AProposController@index']);


// Route for priant
Route::get('/priants',['as' => 'priants', 'uses' =>'PriantsController@index']);
Route::get('/priants/add',['as' => 'priants.add', 'uses' =>'PriantsController@add']);
Route::post('/priants/create',['as' => 'priants.create', 'uses' =>'PriantsController@create']);
Route::get('/priants/delete',['as' => 'priants.delete', 'uses' =>'PriantsController@delete']);
