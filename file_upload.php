<?php

header('Content-Type:text/html; charset=utf-8');

$files='';
if(isset($_FILES["template_file"])){
	$files=$_FILES["template_file"];
}
elseif(isset($_FILES["photos"])){
	$files=$_FILES["photos"];
}
if(is_array($files)){//if $_FILES is'not a array, the file you upload may beyong the size you set in the php .ini file 
	$url="images/".$files["name"];
	$name=$files["name"];
	echo json_encode(array("code"=>0, "data"=>array("is_valid"=>true,"file_id"=> 2, "file_name"=> "yyy.xls", "failed_message"=>"incorrected file")));
}
else{
	echo json_encode($_FILES);
}


//print_r($_FILES);
 
 //{"is_valid": True, sample_id": 1, "sample_name": "yyy" "url": "xx.jpg", "name": "xx"}
 
?>