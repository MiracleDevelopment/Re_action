<?php
require("connector.php");
if($connection){
    $listUserInfo = [];
    $reponse =[];
    $sqlAllQuery = "SELECT * From History";
    $result = mysqli_query($connection,$sqlAllQuery);
    if(mysqli_num_rows($result)>0){
        while($rows = mysqli_fetch_assoc($result)){
            $user=$rows["m_id"];
            $itemId = $rows["i_id"];
            $listUserInfo["memberId"] = $rows["m_id"];
            $listUserInfo["itemId"]  = $rows["i_id"];
            $listUserInfo["count"] =$rows["count"];
            
           
        }
        
        $sqlquery = "SELECT fistname,lastname,email FROM Member_TB WHERE member_id = '$user'";
        $resultinner = mysqli_query($connection,$sqlquery);
        if(mysqli_num_rows($resultinner)>0){
            while($rowsinner = mysqli_fetch_assoc($resultinner)){
                $listUserInfo["firstname"] = $rows["firstname"];
                $listUserInfo["lastname"] = $rows["lastname"];
                $listUserInfo["email"] = $rows["email"];
            }
        }
        

        $sqlqueryThird = "SELECT price,item_name FROM Item_TB WHERE item_name = '$itemId'";
        $conn = mysqli_query($connection,$sqlqueryThird);
        if(mysqli_num_rows($connection,$sqlqueryThird)){
            while($row = mysqli_fetch_assoc($conn)){
                    $listUserInfo["price"] = $rows["price"];
                    $listUserInfo["name"]= $rows["item_name"];
            }
        }
        $response[] = $listUserInfo;
    }
    echo json_encode($reponse);
}



?>