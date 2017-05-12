<?php
require("connector.php");
if($connection){
    $listUserInfo = [];
    $response =[];
    
    $sqlAllQuery = "SELECT firstname, lastname, email, item_name, count, date_sold, price FROM History_TB INNER JOIN Member_TB
    ON History_TB.m_id = Member_TB.member_id
    INNER JOIN Item_TB
    ON History_TB.i_id = Item_TB.item_id";
    
    $result = mysqli_query($connection,$sqlAllQuery);
    if(mysqli_num_rows($result)>0){
        while($rows = mysqli_fetch_assoc($result)){
            $listUserInfo["firstname"] = $rows["firstname"];
            $listUserInfo["lastname"]  = $rows["lastname"];
            $listUserInfo["email"] =$rows["email"];
            $listUserInfo["item_name"] =$rows["item_name"];
            $listUserInfo["count"] = intval($rows["count"]);
            $listUserInfo["price"] = intval($rows["count"]) * intval($rows["price"]);
            $listUserInfo["date_sold"] =$rows["date_sold"];
            $response[] = $listUserInfo;
        }
    }else{
        $listUserInfo["status"] = "false";
        $response[] = $listUserInfo;
    }
    echo json_encode($response);
    
}else{
    $listUserInfo["status"] = "false";
    $response[] = $listUserInfo;
    echo json_encode($response);
}



?>