<?php

class Controller_Contacts extends Controller
{
	


	public function action_index()
	{
		$this->view->generate('contacts_view.php', 'template_view.php');
	}

	public function action_addinfo()
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			
			$model_feedback = new Model_Contacts;
			
			$add_to_db = $model_feedback->set_data($name,$email,$message);

			if($add_to_db)
			{
				self::action_index();
			}else{
				echo "err";
			}
		} 
	}

}
