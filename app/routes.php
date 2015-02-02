<?php

// Check authentication prior to allowing the user access to the content
Route::group(array('before' => 'auth'), function(){
	Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
});

Route::get('login', ['as' => 'home', 'uses' => 'HomeController@getLogin']);
Route::post('login', 'UserController@login');
Route::get('logout', function(){
	Auth::logout();
	Session::flush();
	return Redirect::to('login')
		->with('message', FlashMessage::DisplayAlert('Logout successfully', 'info'));
});

// Route to the signup form
Route::get('signup', function(){
	return View::make('user.signup')->with('title', 'Signup');
});

// Route to the signup page for post
Route::post('signup', 'UserController@signup');

// Route to the forgotten password form
Route::get('forgotpassword', function(){
	return View::make('user.forgotpassword')->with('title', 'Password Reset');
});

// Route submit of forgotten password form to the UserController
Route::post('forgotpassword', 'UserController@forgotpassword');

// Route that uses the reset code to reset a users password
Route::get('resetpassword/{resetcode}', 'UserController@resetpassword');

// next part is 9