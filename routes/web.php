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

Route::get('/', function(Request $request) {

  Auth::logout();

  return view('welcome');
});

Route::post('/signin', [
  'uses' => 'userController@signIn',
  'as' => 'signin'
]);

Route::get('/dashboard', [
	'uses' => 'userController@dashboard',
	'as' => 'dashboard',
	'middleware' => 'auth'
]);
  
Route::resource('user', 'userController');