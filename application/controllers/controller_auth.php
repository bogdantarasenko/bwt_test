<?php

class Controller_Auth extends Controller
{

	function __construct()
	{
		//$this->model = new Model_Portfolio();
		$this->view = new View();
	}
	
	function action_index()
	{
		//$data = $this->model->get_data();		
		$this->view->generate('auth_view.php', 'template_view.php');
	}
	function action_signup(){
		
		if($_SERVER['REQUEST_METHOD'] === 'POST'){

				$name = $_POST['name'];
				$surname = $_POST['surname'];
				$email = $_POST['email'];
				$gender = $_POST['gender'];
				$birtgday = $_POST['birtgday'];
				$login = $_POST['login'];
				$password = $_POST['password'];

				$model_auth = new Model_auth;

				//$model_feedback->set_data($name,$email,$message);
				$sign_up = $model_auth->sign_up($name,$surname,$email,$birtgday,$gender,$login,$password);
				//print_r($model_auth);
				if($sign_up){
					//self::action_index();
					echo "ok";//session/redirect
				}else{
					self::action_index();
				}
		}
	} 

		function action_signin(){
		
			if($_SERVER['REQUEST_METHOD'] === 'POST'){

					$login = $_POST['login'];
					$password = $_POST['password'];

					$model_auth = new Model_auth;

					//$model_feedback->set_data($name,$email,$message);
					$sign_in = $model_auth->sign_in($login,$password);

					
					if($sign_in == true){
						//self::action_index();
						echo "ok";//session/redirect
					}else{
						self::action_index();
					}
			} 
		}
}
