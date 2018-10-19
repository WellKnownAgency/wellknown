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

Route::get('admin/', 'AdminPagesController@index');
Route::get('admin/customers', 'AdminPagesController@customers');


/* Main Pages */
Route::get('/', 'PagesController@index');
Route::get('/', 'PagesController@aboutus');
Route::get('/', 'PagesController@contactus');

/* Service Pages */
Route::get('/', 'PagesController@advertising');
Route::get('/', 'PagesController@search');
Route::get('/', 'PagesController@social');


Route::get('/', 'PagesController@');
