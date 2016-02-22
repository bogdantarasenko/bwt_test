<?php

class Model_auth extends Model{

	public function sign_up($name,$surname,$email,$birthday,$gender,$login,$password)
	{	
		$validate = $this->validate($login);
		if($validate)
		{
			
			$name = $this->clean($name);
			$surname  = $this->clean($surname);
			$email  = $this->clean($email);
			$birthday = $this->clean($birthday);
			$gender = $this->clean($gender);
			$login = $this->clean($login);
			$password  = $this->clean($password);


			$model = Model::DB();
			$query = "INSERT INTO `user` (name,surname,email,birthday,gender,login,password) VALUES('$name','$surname','$email','$birthday','$gender','$login','$password')";
			$res = $model->query($query);

			return $res;
		}
				
	}

	public function sign_in($login,$password)
	{	
		
		$model = Model::DB();
		$query = "SELECT * FROM `user` WHERE login = '$login'";
		$data = $model->select($query);

		if($data[0]['password'] === $password)
		{
			$result = true;
		}else{
			$result = false;
		}

		return $result;
		
	}

	private function validate($login){

		$model = Model::DB();
		$query = "SELECT COUNT(id) FROM user WHERE login='$login' ";
		$data = $model->select($query);

		if($data[0]['COUNT(id)'] > 0)
		{
			return false;
		}else{
			return true;
		}
	}

	private function clean($data){
		$value = "";
	    $value = trim($data);
	    $value = stripslashes($value);
	    $value = strip_tags($value);
	    $value = htmlspecialchars($value);
	    
	    return $value;
	}


}