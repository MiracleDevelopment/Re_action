<?php
require("connector.php");
if($connection){
    $listUserInfo = [];
    $response =[];
    $switch = $_GET["date"];
    $time = date("Y-m-d");
    $Day = intval(date("d"));
    
    $sqlAllQuery = "SELECT firstname, lastname, email, item_name, count, date_sold, price, image_url FROM History_TB INNER JOIN Member_TB
    ON History_TB.m_id = Member_TB.member_id
    INNER JOIN Item_TB
    ON History_TB.i_id = Item_TB.item_id";
    
    $result = mysqli_query($connection,$sqlAllQuery);
    if(mysqli_num_rows($result)>0)
    {
        while($rows = mysqli_fetch_assoc($result))
        {
            $dateTime = $rows["date_sold"];

            $date1=date_create($dateTime);
            $date2=date_create(strval($time));
            $diff = intval(date_diff($date1,$date2)->format("%a"));

            if($switch=="day")
            {
                if($diff == 0){
                    $listUserInfo["firstname"] = $rows["firstname"];
                    $listUserInfo["lastname"]  = $rows["lastname"];
                    $listUserInfo["email"] =$rows["email"];
                    $listUserInfo["item_name"] =$rows["item_name"];
                    $listUserInfo["count"] = intval($rows["count"]);
                    $listUserInfo["price"] = intval($rows["count"]) * intval($rows["price"]);
                    $listUserInfo["date_sold"] =$rows["date_sold"];
                    $listUserInfo["real_price"] = intval($rows["price"]);
                    $listUserInfo["image_url"] =$rows["image_url"];
                    $response[] = $listUserInfo;
                }
            }
            else if($switch=="week")
            {
                if($diff <= 7){
                    $listUserInfo["firstname"] = $rows["firstname"];
                    $listUserInfo["lastname"]  = $rows["lastname"];
                    $listUserInfo["email"] =$rows["email"];
                    $listUserInfo["item_name"] =$rows["item_name"];
                    $listUserInfo["count"] = intval($rows["count"]);
                    $listUserInfo["price"] = intval($rows["count"]) * intval($rows["price"]);
                    $listUserInfo["image_url"] =$rows["image_url"];
                    $listUserInfo["real_price"] = intval($rows["price"]);
                    $listUserInfo["date_sold"] =$rows["date_sold"];
                    $response[] = $listUserInfo;
                }  
            }
            else if($switch=="month")
            {
                if($diff <= 30) {
                    $listUserInfo["firstname"] = $rows["firstname"];
                    $listUserInfo["lastname"]  = $rows["lastname"];
                    $listUserInfo["email"] =$rows["email"];
                    $listUserInfo["item_name"] =$rows["item_name"];
                    $listUserInfo["count"] = intval($rows["count"]);
                    $listUserInfo["price"] = intval($rows["count"]) * intval($rows["price"]);
                    $listUserInfo["real_price"] = intval($rows["price"]);
                    $listUserInfo["image_url"] =$rows["image_url"];
                    $listUserInfo["date_sold"] =$rows["date_sold"];
                    $response[] = $listUserInfo;
                } 
            }
            else
            {
                $listUserInfo["firstname"] = $rows["firstname"];
                $listUserInfo["lastname"]  = $rows["lastname"];
                $listUserInfo["email"] =$rows["email"];
                $listUserInfo["item_name"] =$rows["item_name"];
                $listUserInfo["count"] = intval($rows["count"]);
                $listUserInfo["price"] = intval($rows["count"]) * intval($rows["price"]);
                $listUserInfo["image_url"] =$rows["image_url"];
                $listUserInfo["real_price"] = intval($rows["price"]);
                $listUserInfo["date_sold"] =$rows["date_sold"];
                $response[] = $listUserInfo;
            }
            
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