<?php 


class Controller {
	public function view($value, $data = [])
	{
		require_once 'App/Views/' . $value . '.php';
	}

	public function model($name)
	{
		require_once 'App/Models/' . $name .'.php';
		return new $name;
	}
}