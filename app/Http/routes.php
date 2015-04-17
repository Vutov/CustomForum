<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'TopicsController@index');

Route::get('/home', function() {
    return redirect('/');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('/forum', 'TopicsController');

Route::get('/forum/show/{id}', 'TopicsController@show')->where('id','[0-9]+');

Route::resource('/reply', 'ReplyController');