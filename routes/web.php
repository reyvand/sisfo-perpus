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
Route::get('/signin', function () {
	return view('main.login');
});
Route::post('/signin', 'UserController@signIn');
Route::get('/signout', 'UserController@signOut');
Route::get('/signup', function () {
	return view('main.signup');
});
Route::post('/signup', 'UserController@signUp');

/* end of general routes */


/* authenticated routes */

Route::middleware('auth')->group( function() {
	/* user group routes */
	Route::prefix('user')->group( function() {
		Route::get('profile', 'UserController@showProfile');
		Route::post('profile', 'UserController@updateProfile');
		Route::get('changepass', function() {
			return view('user.changepass');
		});
		Route::post('changepass', 'UserController@changePass');
	});
});