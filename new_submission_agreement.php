<?php 
	header('Content-Type:text/html; charset=utf-8');


	if(isset($_POST["is_accepted"])){
		echo json_encode(array("code"=>0, "data"=>array("state"=>1, "failed_message"=>"insert to database failed")));
	}
	else{
		echo json_encode(array("code"=>0, "data"=>array("state"=>0)));
	}
 ?>