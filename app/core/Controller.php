<?php

class Controller 
{

	public function model($model)
	{
		require_once realpath(__DIR__ . '/..') . '/models/' . $model . '.php';
		return new $model();
	}

	public function view($view, $data = [])
	{
		require_once realpath(__DIR__ . '/..') . '/views/' . $view . '.php';
	}
}

?>