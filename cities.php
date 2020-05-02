<?php
$response = [
    "status" => 1,
    "msg" => "",
    "data" => [
        "list" => []
    ]
];


try
{
    if ( !isset($_GET['state_id']) )
    {
        throw new Exception("State Id is not present iu GET");
    }

    if ($_GET['state_id'] == 1)
    {
       $response["data"]["list"] = [
           1 =>  "Ludhiana",
           2 =>  "Jalandhar",
       ];
    }
}
catch(Exception $ex)
{
    $response['status'] = 0;
    $response['msg'] = $ex->getMessage();
}

echo json_encode($response); exit;
