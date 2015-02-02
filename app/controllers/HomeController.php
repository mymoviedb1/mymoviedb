<?php

class HomeController extends BaseController {

	public function index(){
		return View::make('hello');
	}

	public function getLogin(){
		return View::make('login.loginform')->with('title', 'Login');
	}

}
