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
Route::get('admin/companies', 'AdminPagesController@companies');

/* Main Pages */
Route::get('/', 'PagesController@index');
Route::get('/', 'PagesController@getIndex');
Route::get('advertising', 'PagesController@getAdvertising');
Route::get('search-engine-optimization', 'PagesController@getSearch');
Route::get('social-media-marketing', 'PagesController@getSocial');
Route::get('web-design', 'PagesController@getWebdesign');
Route::get('about-us', 'PagesController@getAboutus');
Route::get('your-form-submitted', 'PagesController@getYourformsubmitted');
Route::get('privacy-policy', 'PagesController@getPrivacypolicy');
Route::get('/sitemap.xml', 'PagesController@sitemap');
Route::get('contact-us', 'PagesController@getContactus');

/* Post Methods */
Route::post('contact-us', 'PagesController@postContactus');
