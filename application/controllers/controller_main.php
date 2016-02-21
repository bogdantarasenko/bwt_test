<?php

class Controller_Main extends Controller
{

	public function action_index()
	{	
		if($this->AuthCheck() == true){
			$this->view->generate('main_view.php', 'template_view.php');	
		}else{
			$this->view->generate('auth_view.php', 'template_view.php');
		}

		
	}
}