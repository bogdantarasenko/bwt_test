<h1>FEEDBACK</h1>
<?php
foreach ($data as $key => $value) {
	
		
		//echo $value["id"]."|".$value["name"]."|".$value["message"]."|".$value["email"]."<br>";
		echo "<div class='panel panel-default'><div class='panel-heading'>name:".$value['name']."&nbsp;email:".$value['email']."</div><div class='panel-body'>".$value['message']."</div></div>";
}
?>