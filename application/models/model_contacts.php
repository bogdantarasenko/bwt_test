<?php

class Model_contacts extends Model
{


	public function set_data($name,$email,$message)
	{
		$model = Model::DB();
		$query = "INSERT INTO `feedback` (name,email,message) VALUES('$name','$email','$message')";
		$res = $model->query($query);
		
		return $res;
	}

}
