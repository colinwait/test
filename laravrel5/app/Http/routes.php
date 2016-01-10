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
Route::get('test','MyController@index');
Route::get('text','TextController@create');
Route::get('text2','TextController@check');
Route::get('regist',function(){
	return view('regist');
});
Route::get('arr',function(){
	$arr=[
		'name'=>'haha',
		'age'=>20
	];
	return array_add($arr,0,40);
});
Route::get('help','HelpController@index');
