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
Route::prefix('admin')->middleware('auth:web')->group(function() {
  Route::get('/', 'AdminPagesController@index')->name('admin.index');
  Route::get('/leads', 'AdminPagesController@leads');
  Route::get('/clients', 'AdminPagesController@clients');
  Route::get('/partners', 'AdminPagesController@partners');
  Route::get('posts', 'AdminPagesController@posts');
  Route::get('categories', 'AdminPagesController@categories');
  Route::get('/posts/create', 'PostController@create');
  Route::get('/posts/{id}/edit', 'PostController@edit');
  Route::get('/posts/{id}/show', 'PostController@show');
  Route::post('/posts/{id}','PostController@update');
  Route::get('/settings', 'AdminPagesController@settings');
  Route::get('/seo', 'AdminPagesController@seo');
  Route::get('/seo/projects/{seoProject}/edit', 'SeoProjectController@edit')->name('seo-project.edit');
  Route::get('/calendar', 'AdminPagesController@calendar');

  Route::prefix('api')->group(function() {
      Route::resource('authUser', 'AuthUserController', [
        'except' => ['create', 'show', 'update', 'edit']
      ]);

      Route::resource('posts', 'PostController', [
        'except' => ['create', 'show', 'update', 'edit']
      ]);

  });

/* Notifications */
  Route::post('/notification/get', 'NotificationController@get');
  Route::post('/notification/read', 'NotificationController@read');
  Route::post('/notification/readall', 'NotificationController@readall');


});

/* Main Pages */
Route::get('/', 'PagesController@getIndex');
Route::get('advertising', 'PagesController@getAdvertising');
Route::get('search-engine-optimization', 'PagesController@getSearch');
Route::get('social-media-marketing', 'PagesController@getSocial');
Route::get('web-design', 'PagesController@getWebdesign');
Route::get('about-us', 'PagesController@getAboutus');
Route::get('landing-pages', 'PagesController@getLanding');
Route::get('social-media-marketing', 'PagesController@getSocial');
/*Route::get('case-studies', 'PagesController@getCase');*/
/*Route::get('your-form-submitted', 'PagesController@getYourformsubmitted');*/
Route::get('privacy-policy', 'PagesController@getPrivacypolicy');
Route::get('sitemap.xml', 'PagesController@sitemap');
Route::get('contact-us', 'PagesController@getContactus');

/* Cases */
Route::get('fancy-flowers', 'PagesController@fancyflowers');
Route::get('born-to-move', 'PagesController@borntomove');
Route::get('omdarling', 'PagesController@omdarling');

/* Blog */
Route::get('blog', 'PagesController@blogIndex');
Route::get('/blog/{slug}', ['as' => 'blog.single', 'uses' => 'PagesController@getSingle' ]) -> where('slug', '[\w\d\-\_]+');

/* Auth Routes */
Auth::routes();

/* Post Methods */
Route::post('contact-send', 'PagesController@postContactus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
