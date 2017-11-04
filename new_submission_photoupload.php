<?php 
header('Content-Type:text/html; charset=utf-8');
$arr=[
    "code" => 0,
    "data" => [
        "is_valid" => true,
        "photo_id" => rand(5,100),
        "url" => "images/1.jpg",
        "name" => "1.jpg",
    ]
];
echo json_encode($arr);
 ?>