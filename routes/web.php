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

Route::get('/', 'HomeController@index');

Route::get('/create-account', 'AccountsController@create');
Route::post('/create-account', 'AccountsController@store');

Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');

Route::get('/exercises', 'ExercisesController@index');
Route::post('/exercises', 'ExercisesController@store');
Route::get('/exercises/create', 'ExercisesController@create');
