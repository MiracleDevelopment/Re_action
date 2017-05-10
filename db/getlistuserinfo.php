<?php
require("connector.php");
if($connection){
    $listUserInfo = [];
    $listUserMember = [];
    $listUserItem = [];

    $reponse =[];
    $sqlAllQuery = "SELECT * FROM History_TB";
    $result = mysqli_query($connection,$sqlAllQuery);
    if(mysqli_num_rows($result)>0){
        while($rows = mysqli_fetch_assoc($result)){
            //  $user=$rows["m_id"];
            //  $itemId = $rows["i_id"];
            $listUserInfo["memberId"] = $rows["m_id"];
            $listUserInfo["itemId"]  = $rows["i_id"];
            $listUserInfo["count"] =$rows["count"];
            $response[0] = $listUserInfo;
        }
        
        $sqlquery = "SELECT fistname,lastname,email FROM Member_TB WHERE member_id = '$user'";
        $resultinner = mysqli_query($connection,$sqlquery);
        if(mysqli_num_rows($resultinner)>0){
            while($rowsinner = mysqli_fetch_assoc($resultinner)){
                $listUserMember["firstname"] = $rows["firstname"];
                $listUserMember["lastname"] = $rows["lastname"];
                $listUserMember["email"] = $rows["email"];
                $response[1] = $listUserMember;
            }
        }
        
        
        $sqlqueryThird = "SELECT price,item_name FROM Item_TB WHERE item_name = '$itemId'";
        $resultinnerconnection = mysqli_query($connection,$sqlqueryThird);
        if(mysqli_num_rows($connection,$sqlqueryThird)){
            while($row = mysqli_fetch_assoc($conn)){
                $listUserItem["price"] = $rows["price"];
                $listUserItem["name"]= $rows["item_name"];
                $response[2] = $listUserItem;
            }
        }
        
    }
    echo json_encode($reponse);
    
}



?>