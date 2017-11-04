<?php 
header('Content-Type:text/html; charset=utf-8');

if (isset($_POST["id"]) && isset($_POST["op"]) && $_POST["op"] == "insert"){
	$arr=[
		"code"=>1,
		"data"=>[
			"status"=> 1,
			"failed_message"=> "the reason for failing"
		],
	];
	echo json_encode($arr);
}
else{
	echo json_encode($_POST);
}
?>
