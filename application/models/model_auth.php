<?php

class Model_auth extends Model{

	public function sign_up($name,$surname,$email,$birthday,$gender,$login,$password)
	{	
		
		$model = Model::DB();
		$query = "INSERT INTO `user` (name,surname,email,birthday,gender,login,password) VALUES('$name','$surname','$email','$birthday','$gender','$login','$password')";
		$res = $model->query($query);
		return $res;
		
	}

	public function sign_in($login,$password)
	{	
		
		$model = Model::DB();
		$query = "SELECT * FROM `user` WHERE login = '$login'";
		$data = $model->select($query);

		if($data[0]['login'] == $login && $data[0]['password'] == $password){
			$result = true;
		}else{
			$result = false;
		}

		return $result;
		
	}
}