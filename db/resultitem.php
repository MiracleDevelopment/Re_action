<?php
require("connector.php");
if($connection){
    $resultitem=[];
    $response=[];
    $id = "1";//$_POST[""];//1
    $input_item = "3|2,4|2";//$_POST[""]; //3|2,4|2,
    $items = explode(",",$input_item);
    $number = count($items);
    $sqlquery = "INSERT INTO History_TB (m_id, i_id,count,date_sold) VALUES ";

    for ($dolla = 0;$dolla<$number;$dolla++){
        if($items[$dolla] == "" ) continue;

        $arr = explode("|",$items[$dolla]); 
        $index = $arr[0];
        $count = $arr[1];
        $time = date("Y-m-d");
        $sqlquery = $sqlquery . "('$id', '$index','$count','$time')";

        if($dolla !=$number - 1)
        {
            $sqlquery = $sqlquery . ",";
        }
        
    }

    echo $sqlquery;
    /*$result = mysqli_query($connection,$sqlquery);
    if($result){
        $resultitem["status"] = "TRUE";
        $response[]=$resultitem;
    }
    echo json_encode($response);*/
}
?>