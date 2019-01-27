<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
> >
Alt-Gr+Maj+n ====> <
|
*/

Route::get('/', [
	'as' => 'root_path',
	'uses' => 'PagesController@home',
]);

Route::get('/about', [
	'as' => 'about_path',
	'uses' => 'PagesController@about',
]);