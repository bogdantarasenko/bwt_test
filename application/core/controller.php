<?php

class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
	}
	
	
	function action_index(){}

	public function AuthCheck()
	{

		if($_SESSION["is_auth"] == true)
		{
			return true;
		}else{
			return false;
		}
	}
}
