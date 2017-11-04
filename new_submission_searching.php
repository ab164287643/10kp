<?php 
header('Content-Type:text/html; charset=utf-8');
$arr=[
    "code" => 0,
    "data" => [
        "suggestions" => [
            [
                "id" => 1,
                "value" => "Afghanistan",
            ],
            [
                "id" => 2,
                "value" => "Afghanistan",
            ],
            [
                "id" => 3,
                "value" => "clade1",
            ],
            [
                "id" => 4,
                "value" => "value2",
            ],
            [
                "id" => 5,
                "value" => "value3",
            ],
            [
                "id" => 6,
                "value" => "value4",
            ],
            [
                "id" => 7,
                "value" => "value5",
            ]
        ]
    ]
];

echo json_encode($arr)
 ?>