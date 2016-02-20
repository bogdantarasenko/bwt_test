<?php

class Model_feedback extends Model
{


	public function get_data()
	{	
		
		/*$model = Moel::getDB();
		$query = "INSERT INTO `feedback` (name,email,message) VALUES('$name','$email','$message')";
		$res = */
		//echo "hello $name | $email | $message";
		$model = Model::DB();
		$query = "SELECT * FROM `feedback`";
		$res = $model->select($query);
		return $res;
		//print_r($res);
	}

	
}