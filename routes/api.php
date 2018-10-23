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
  Route::put('leads/statuschange/{id}','LeadsController@statuschange');
  Route::put('leads/introemail/{id}','LeadsController@doneintroemail');
  Route::put('leads/introcall/{id}','LeadsController@doneintrocall');
  Route::put('leads/fllupemail/{id}','LeadsController@donefllupemail');
  Route::put('leads/lastemail/{id}','LeadsController@donelastemail');
  /* End of Lead Routes */

  Route::resource('statuses', 'StatusesController', [
    'except' => ['create']
  ]);
  Route::resource('companies', 'CompaniesController', [
    'except' => ['create']
  ]);
  Route::resource('posts', 'PostController', [
    'except' => ['create', 'show', 'update', 'edit']
  ]);
  Route::resource('categories', 'CategoryController');
