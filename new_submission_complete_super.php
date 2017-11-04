<?php 
header('Content-Type:text/html; charset=utf-8');

$id=$_GET["id"];
$level=$_GET["level"];
$arr=[
    "code" => 1,
    "data" => [
        "subdata" => [
            "id" => $id,
            "value" => "somespecie",
            "level" => $level,
        ],
        "superdata" => [
            [
                "id" => 1,
                "value" => "somesgenus".$id,
                "level" => "genus",
            ],
            [
                "id" => 2,
                "value" => "somefamily".$id,
                "level" => "family",
            ],
            [
                "id" => 3,
                "value" => "someclade".$id,
                "level" => "clade",
            ],
        ],
    ],
];

echo json_encode($arr);
 ?>