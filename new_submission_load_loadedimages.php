<?php  
header('Content-Type:text/html; charset=utf-8');
$arr=[
    "code" => 1,
    "data" => [
        [
            "photo_id" => 1,
            "url" => "images/1.jpg",
            "name" => "1.jpg",
            "size" => 200
        ],
        [
            "photo_id" => 2,
            "url" => "images/2.jpg",
            "name" => "2.jpg",
            "size" => 200
        ],
    ]
];
echo json_encode($arr);
?>