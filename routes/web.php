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
  Route::get('/leads', 'AdminPagesController@leads')->name('admin.leads');
  Route::get('/clients', 'AdminPagesController@clients');
  Route::get('/partners', 'AdminPagesController@partners');
  Route::get('posts', 'AdminPagesController@posts');
  Route::get('categories', 'AdminPagesController@categories');
  Route::get('/posts/create', 'PostController@create');
  Route::get('/posts/{id}/edit', 'PostController@edit');
  Route::get('/posts/{id}/show', 'PostController@show');
	Route::get('/subscribers', 'AdminPagesController@subs');

  Route::get('cases', 'AdminPagesController@cases');
  Route::get('/cases/{id}/edit', 'ScaseController@edit');
  Route::get('/cases/create', 'ScaseController@create');
  Route::post('/cases/{id}', 'ScaseController@update');
  Route::get('caseservices', 'AdminPagesController@caseservices');
  Route::get('casetechnologies', 'AdminPagesController@casetechnologies');

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

			Route::resource('events', 'EventsController', [
        'except' => ['create', 'show', 'update', 'edit']
      ]);

			Route::resource('subs', 'SubController', [
				'except' => ['create', 'show', 'update', 'edit']
			]);

  });


/* Notifications */
  Route::post('/notification/get', 'NotificationController@get');
  Route::post('/notification/read', 'NotificationController@read');
  Route::post('/notification/readall', 'NotificationController@readall');


});

	Route::post('/api/postsub', 'SubController@subStore');

/* Main Pages */
Route::get('/', 'PagesController@getIndex');
Route::get('advertising', 'PagesController@getAdvertising');
Route::get('search-engine-optimization', 'PagesController@getSearch');
Route::get('social-media-marketing', 'PagesController@getSocial');
Route::get('web-design', 'PagesController@getWebdesign');
Route::get('about-us', 'PagesController@getAboutus');
Route::get('landing-pages', 'PagesController@getLanding');
Route::get('social-media-marketing', 'PagesController@getSocial');
Route::get('content-marketing', 'PagesController@getContentmarketing');
Route::get('wordpress-seo', 'PagesController@getWordpressseo');
/*Route::get('case-studies', 'PagesController@getCase');*/
/*Route::get('your-form-submitted', 'PagesController@getYourformsubmitted');*/
Route::get('privacy-policy', 'PagesController@getPrivacypolicy');
Route::get('sitemap.xml', 'PagesController@sitemap');
Route::get('contact-us', 'PagesController@getContactus');

/* Cases */
Route::get('https://secure.flashmoving.net/', function(){
    return Redirect::to('/moving-quote', 301);
});
Route::get('/born-to-move', function(){
    return Redirect::to('/case-studies/born-to-move', 301);
});
Route::get('/omdarling', function(){
    return Redirect::to('/case-studies/omdarling', 301);
});

/* Blog */
Route::get('blog', 'PagesController@blogIndex');
Route::get('/blog/{slug}', ['as' => 'blog.single', 'uses' => 'PagesController@getSingle' ]) -> where('slug', '[\w\d\-\_]+');

/* Cases */
Route::get('case-studies', 'PagesController@scasesIndex');
Route::get('/case-studies/{slug}', ['as' => 'case-studies.single', 'uses' => 'PagesController@getSinglecase' ]) -> where('slug', '[\w\d\-\_]+');
/* Auth Routes */
Auth::routes();

/* Post Methods */
Route::post('contact-send', 'PagesController@postContactus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
