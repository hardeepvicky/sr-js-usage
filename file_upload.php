<?php
$filename = $_FILES['file']['name'];

$response = [
    "status" => 1,
    "data" => [
        "file" => $filename
    ]
];

echo json_encode($response); exit;
