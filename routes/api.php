<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
  /* Lead Routes */
  Route::resource('leads', 'LeadsController', [
    'except' => ['create']
  ]);
  Route::get('clients', 'LeadsController@indexClients');
  Route::get('partners', 'LeadsController@indexPartners');
  Route::put('leads/statuschange/{id}','LeadsController@statuschange');
  Route::put('leads/introemail/{id}','LeadsController@doneintroemail');
  Route::put('leads/introcall/{id}','LeadsController@doneintrocall');
  Route::put('leads/fllupemail/{id}','LeadsController@donefllupemail');
  Route::put('leads/lastemail/{id}','LeadsController@donelastemail');
  /* End of Lead Routes */

  /* Notifications */

  /*Endof Notifications */

  Route::resource('statuses', 'StatusesController', [
    'except' => ['create']
  ]);
  Route::resource('sources', 'SourcesController', [
    'except' => ['create']
  ]);
  Route::resource('services', 'ServiceController', [
    'except' => ['create']
  ]);
  Route::resource('companies', 'CompaniesController', [
    'except' => ['create']
  ]);
  Route::resource('posts', 'PostController', [
    'except' => ['create', 'show', 'update', 'edit']
  ]);

  Route::put('posts/statuschange/{id}','PostController@statuschange');


  Route::resource('categories', 'CategoryController');
