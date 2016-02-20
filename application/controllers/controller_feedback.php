<?php

class Controller_Feedback extends Controller
{

	function action_index()
	{
		$model_feedback = new Model_Feedback;
		$data = $model_feedback->get_data();
		//print_r($res);
		$this->view->generate('feedback_view.php', 'template_view.php',$data);
	}

}
