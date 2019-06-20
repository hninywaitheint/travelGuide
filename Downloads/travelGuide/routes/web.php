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

Route::resource('travelling', 'DivisionController');

Route::get('/mainpage', 'ContentController@showmain');

Route::get('/about', 'ContentController@showabout');

Route::get('/action', 'ContentController@showaction');

Route::get('/visit', 'ContentController@showvisits');

Route::get('/mainpage', 'ContentController@randommainpage');

Route::get('/action', 'ContentController@randomaction');

 Route::get('/morecontent', 'ContentController@showmorecontent');

// Route::get('/morecontent', 'ContentController@morecontact');

// Route::get('/frontend/morecontent/{id}','ContentController@showmorecontents');

Route::get('/frontend/visit/{id}','ContentController@showvisit');

// Route::get('/frontend/visit/{id}','ContentController@showmorevisit');



Route::get('/morecontent', 'ContentController@index');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
