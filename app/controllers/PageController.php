<?php

class PageController extends BaseController
{
	public function index(){
		$usuario = new user();
		$usuario->name="benja";
		$usuario->avatar="benja";
		$usuario->email="bchavez@adcity.com.mx";
		$usuario->username="benja";
		$usuario->password=Hash::make('benja');
		$usuario->estatus=1;
		$usuario->save();
		$view = View::make('page.index')
			->with('title','miautousado.com')
			->with('subtitle','Inicio')
			->with('descript','algo')
			->with('keywords','asdkjlksd');
		return $view;
	}


}
