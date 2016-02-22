<?php

class Model_feedback extends Model
{


	public function get_data()
	{	
		
		$model = Model::DB();
		$query = "SELECT * FROM `feedback`";
		$res = $model->select($query);
		return $res;
	}

	
}