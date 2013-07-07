<?php

class LoginController extends BaseController
{
	// public $restful = true;

	public function index()
	{
		if(Auth::check())
		{
			echo "esta logueado el nombre es". Auth::user()->name;
		}else{
			return View::make('page.login');
		}
	}
	public function valido()
	{
		$userData=array(
			'username'=>Input::get('user'),
			'password'=>Input::get('pass'),
			'estatus'=>1
		);
		if(Auth::attempt($userData,true)){
			echo "Usuario Valido".Auth::user()->name;
		}else{
			echo "Usuario invalido";
		}
	}
	public function logout()
	{
		Auth::logout();

		return Redirect::to('');
	}
}
