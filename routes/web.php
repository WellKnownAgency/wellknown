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
Route::prefix('admin')->middleware('auth:admin')->group(function() {
  Route::get('/', 'AdminPagesController@index')->name('admin.index');
  Route::get('/leads', 'AdminPagesController@leads');
  Route::get('/clients', 'AdminPagesController@clients');
  Route::get('posts', 'AdminPagesController@posts');
  Route::get('categories', 'AdminPagesController@categories');
  Route::get('/posts/create', 'PostController@create');
  Route::get('/posts/{id}/edit', 'PostController@edit');
  Route::post('/posts/{id}','PostController@update');
  Route::get('/settings', 'AdminPagesController@settings');
  Route::get('/seo', 'AdminPagesController@seo');

  Route::post('/notification/get', 'NotificationController@get');
  Route::post('/notification/read', 'NotificationController@read');
  Route::post('/notification/readall', 'NotificationController@readall');
});

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
Route::get('sitemap.xml', 'PagesController@sitemap');
Route::get('contact-us', 'PagesController@getContactus');
Route::get('fancyflowers', 'PagesController@fancyflowers');

/* Blog */
Route::get('blog', 'PagesController@blogIndex');
Route::get('/blog/{slug}', ['as' => 'blog.single', 'uses' => 'PagesController@getSingle' ]) -> where('slug', '[\w\d\-\_]+');

/* Auth Routes */
Auth::routes();
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

/* Post Methods */
Route::post('contact-send', 'PagesController@postContactus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
