<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/

/*
|-----------------------------------------
| Start Route Login
|-----------------------------------------
*/
Route::get('/', array('as'=>'index', function(){
	return View::make('index');
}))->before('guest');

Route::get('home', array('as'=>'home', function(){
	return View::make('home');
}));

Route::post('login', array('as'=>'login', function(){
	$data = array(
		'username' => Input::get('username'),
		'password' => Input::get('password')
	);

	if(Auth::attempt($data)){
		return Redirect::route('home');
	}else{
		return Redirect::route('index')
			->with('warning', 'Your username or password was incorrect!');
	}
}));

Route::get('logout', array('as'=>'logout', function(){
	Auth::logout();

	return Redirect::route('index')
		->with('info', 'You are successfully logged out');
}))->before('auth');
/*
|-----------------------------------------
| End Route Login
|-----------------------------------------
*/

Route::resource('authors', 'AuthorsController');