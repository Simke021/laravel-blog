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

// Authentication Routes
Route::get ('auth/login',  'Auth\LoginController@getLogin');
Route::post('auth/login',  'Auth\LoginController@postLogin');
Route::get ('auth/logout', 'Auth\LoginController@getLogout');

// Registration Routes
Route::get ('auth/register', 'Auth\RegisterController@getRegister');
Route::post('auth/register', 'Auth\RegisterController@postRegister');

// blog/slug
Route::get('blog/{slug}',['as' => 'blog.single','uses' => 'BlogController@getSingle'
	// reg. izraz prihvata bilo koji koje slovo, bilo koji broj, - ili _
])->where('slug', '[\w\d\-\_]+');

// blog page
Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@getIndex' ]);

// contact page
Route::get('contact', 'PagesController@getContact');
// about page
Route::get('about', 'PagesController@getAbout');
// home page
Route::get('/', 'PagesController@getIndex');

Route::resource('posts', 'PostController');



















// contact page
// Route::get('contact', function () {
//     return view('contact');
// });

// about page
// Route::get('about', function () {
//     return view('about');
// });

// home page
// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
