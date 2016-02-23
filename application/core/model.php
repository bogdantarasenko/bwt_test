<?php

class Model
{
	
	
	  private static $instance;
	   
	  private $mysqli;
	 
	  /*
	  private $host  = "localhost";
	  private $user  = "mysql";
	  private $pass  = "mysql";
	  private $dbname = "bwt";
	  */



	  public static function DB() {

		    if (!isset(self::$instance)){
		    	//self::$db = new Model;
		    	self::$instance =  new self;
		    	
		    }

		    return self::$instance;
		    

	  }

	  
	  public function __construct() {

	    $this->mysqli = new mysqli(host,user,pass,dbname);
	    $this->mysqli->query("SET lc_time_names = 'ru_RU'");
	    $this->mysqli->query("SET NAMES 'utf8'");
	  }

	 
	 
	  public function select($query) {

	    $result = $this->mysqli->query($query);
	    if (!$result){
	    	return false;
	    }else{
	    	return self::ConvertToArray($result);
	    }
	    
	  }

	 

	  
	  public function query($query) {

	    	$success = $this->mysqli->query($query);

		    if ($success) {
		      if ($this->mysqli->insert_id === 0) 
		      	return true;
		      else 
		      	return $this->mysqli->insert_id;
		    }
		    else{
		    	return false;
		    }
	    
	  }
	  
	  
	  private function ConvertToArray($result_set) {

	    $array = array();

	    while (($row = $result_set->fetch_assoc()) != false) {
	      $array[] = $row;
	    }
	    
	    return $array;
	  }
	  

	  
	  public function __destruct() {
	    if ($this->mysqli) $this->mysqli->close();
	  }


}