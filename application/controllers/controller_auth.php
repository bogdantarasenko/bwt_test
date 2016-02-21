<?php

class Controller_Auth extends Controller
{

		public function __construct()
		{
			//$this->model = new Model_Portfolio();
			$this->view = new View();
		}
		
		public function action_index()
		{
			//$data = $this->model->get_data();		
			if($this->AuthCheck() == true){
				echo "reg";
			}else{
				$this->view->generate('auth_view.php', 'template_view.php');
			}
			
		}

		public function action_signup(){
			
			if($_SERVER['REQUEST_METHOD'] === 'POST')
			{

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

		public function action_signin()
		{
			
			if($this->AuthCheck() == true){
				$this->view->generate('main_view.php', 'template_view.php');
			}else{
				$this->view->generate('auth_view.php', 'template_view.php');
			}

			if($_SERVER['REQUEST_METHOD'] === 'POST'){

					$login = $_POST['login'];
					$password = $_POST['password'];

					$model_auth = new Model_auth;

					//$model_feedback->set_data($name,$email,$message);
					$sign_in = $model_auth->sign_in($login,$password);

					
					if($sign_in == true){
						//self::action_index();
						$_SESSION["is_auth"] = true;
						$_SESSION["login"] = $login;;
					}else{
						$_SESSION["is_auth"] = false;
						self::action_index();
					}
			} 
		}

		public function action_signout()
		{
			$_SESSION =  array();
			session_destroy();

			$this->view->generate('auth_view.php', 'template_view.php');
		}

		
}
