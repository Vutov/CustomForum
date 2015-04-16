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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//To be fixed;
//Route::get('/user/{id}', function($id){
//    echo "user: " . $id;
//})->where('id','[a-zA-Z]+'); //To fix regex later

Route::get('/logout', 'LogoutController@index');

Route::resource('/forum', 'TopicsController');

Route::get('/forum/show/{id}', 'TopicsController@show')->where('id','[0-9]+');

Route:resource('/reply', 'ReplyController');

Route::get('/admin', function(){
    echo 'admin panel';
});