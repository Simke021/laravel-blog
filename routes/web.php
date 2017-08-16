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

// contact page
Route::get('contact', 'PagesController@getContact');
// about page
Route::get('about', 'PagesController@getAbout');
// home page
Route::get('/', 'PagesController@getIndex');


















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


