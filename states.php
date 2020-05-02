<?php
$response = [
    "status" => 1,
    "msg" => ""
];


try
{
    if ( !isset($_GET['country_id']) )
    {
        throw new Exception("Country Id is not present iu GET");
    }

    if ($_GET['country_id'] == 1)
    {
       $response["data"]["list"] = [
           1 =>  "Punjab",
           2 =>  "Harayana",
           3 =>  "UP",
       ];
    }
    else if ($_GET['country_id'] == 2)
    {
        $response["data"]["list"] = [
           4 =>  "California",
           5 =>  "Alabama",
       ];
    }
}
catch(Exception $ex)
{
    $response['status'] = 0;
    $response['msg'] = $ex->getMessage();
}

echo json_encode($response); exit;
