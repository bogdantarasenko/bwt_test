<?php

class Controller_Contacts extends Controller
{
	


	function action_index()
	{
		$this->view->generate('contacts_view.php', 'template_view.php');
	}

	function action_addinfo()
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			

			$model_feedback = new Model_Contacts;

			//$model_feedback->set_data($name,$email,$message);
			$add_to_db = $model_feedback->set_data($name,$email,$message);
			if($add_to_db){
				self::action_index();
			}else{
				echo "err";
			}
		} 
	}

}
