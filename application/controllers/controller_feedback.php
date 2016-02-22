<?php

class Controller_Feedback extends Controller
{

	public function action_index()
	{	
		if($this->AuthCheck() == true)
		{
			
			$model_feedback = new Model_Feedback;
			
			$data = $model_feedback->get_data();
			
			$this->view->generate('feedback_view.php', 'template_view.php',$data);
			
		}else{
			$this->view->generate('auth_view.php', 'template_view.php');
		}

	}

}
