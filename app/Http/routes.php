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

//To fix / , home
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//To be fixed;
Route::get('/login', function(){
    echo "login";
});

Route::get('/register', function(){
    echo "register";
});

Route::get('/user/{id}', function($id){
    echo "user: " . $id;
});

Route::get('/forum', function(){
    echo "forum";
});

Route::get('/forum/topic/{id?}', function($id = 0){
    if($id === 0){
        echo 'view all';
    }
    else {
        echo "forum/topic/id = " . $id;
    }
});

Route::get('/admin', function(){
    echo 'admin panel';
});