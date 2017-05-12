<?php
require("connector.php");
session_start();
if($connection){
    $resultitem=[];
    $response=[];
    $id = $_POST["id"];
    $input_item = $_POST["item"];
    $items = explode(",",$input_item);
    $number = count($items);
    $sqlquery = "INSERT INTO History_TB (m_id, i_id,count,date_sold) VALUES ";

    for ($dolla = 0;$dolla<$number;$dolla++)
    {
        if($items[$dolla] == "" ) continue;

        $arr = explode("|",$items[$dolla]); 
        $index = $arr[0];
        $count = $arr[1];
        $time = date("Y-m-d");
        $sqlquery = $sqlquery . "($id, '$index','$count','$time')";

        if($dolla != $number - 1)
        {
            $sqlquery = $sqlquery . ",";
        }
        
    }

    $result = mysqli_query($connection,$sqlquery);
    if($result){
        $resultitem["status"] = "TRUE";
        unset($_SESSION["item"]);
        $response[]=$resultitem;
    }else
    {
        $resultitem["status"] = "FALSE";
        $resultitem["data"] = $result;
        $resultitem["query"] = $sqlquery;

        $response[]=$resultitem;
    }
    echo json_encode($response);
}
?>