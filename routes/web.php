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

/* general routes */

Route::get('/', function () {
	return view('main.front');
});

Route::get('/peraturan-umum', function () {
	return view('main.peraturan');
});

Route::get('/login', function () {
	return view('main.login');
});
Route::post('/login', 'UserController@login');