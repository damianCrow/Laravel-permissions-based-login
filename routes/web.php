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

Route::get('/', function () {

  return view('welcome');
});

Route::get('/signout', [
	'uses' => 'userController@signOut',
  'as' => 'signout'  
]);

Route::post('/signin', [
  'uses' => 'userController@signIn',
  'as' => 'signin'
]);

Route::get('/dashboard', [
	'uses' => 'userController@dashboard',
	'as' => 'dashboard'
]);

Route::get('/file/{folderName}/{fileName}', 'contentController@serveFiles');
Route::get('/content/{id}/add', 'contentController@addAssets');
Route::post('/content/{id}/upload', 'contentController@uploadAssets');
Route::delete('/delete_file/{folderName}/{fileName}', 'contentController@deleteFile');

Route::resource('user', 'userController');
Route::resource('content', 'contentController');
Route::resource('group', 'groupController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
  
  Route::get('/oyster', 'oysterController@mainDashboard');
  Route::get('/oyster/campaign', 'oysterController@campaignDashboard');
  Route::get('/oyster/expressionengine', 'oysterController@expressionengineDashboard');
  Route::get('/oyster/brokerage_images', 'oysterController@brokerageImages');
  Route::get('/oyster/image_size', 'oysterController@imageSize');
  Route::get('/oyster/editing', 'oysterController@editing');
  Route::get('/oyster/subscribers', 'oysterController@subscribers');
  Route::get('/oyster/sending', 'oysterController@sending');
  Route::get('/oyster/reports', 'oysterController@reports');
  Route::get('/oyster/content', 'oysterController@content');
  Route::get('/oyster/create', 'oysterController@create');
  Route::get('/oyster/campaign_sender', 'oysterController@campaignSender');
  Route::get('/oyster/snapshot', 'oysterController@snapShot');
  Route::get('/oyster/login', 'oysterController@login');
});
