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

//Basic routing
Route::get('/', function(){
	return ('Hello world');
});

//Route handling
Route::get('/', 'WelcomeController@index')->name('users.show');


//Route aliasing
Route::get('/',[
	'as' => 'users.show',
	'uses' => 'WelcomeController@index'
]);


//Use of route helper
route('users.show');


//Practicing Route grouping
Route::group([], function() {

	Route::get('/', function(){
		return "Hello World";
	});

	Route::get('/', function(){
		return "Hello User";
	});

});


//Application of Middlewares
Route::group(['middleware' => 'auth'], function() {

	Route::get('dashboard', function(){
		return view("dashboard");
	});
	Route::get('account', function(){
		return view("account");
	});

});














































































