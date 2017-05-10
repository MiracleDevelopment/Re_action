<?php
require("connector.php");
session_start();

if($connection){
    $info =[];
    if(isset($_SESSION["member_id"])){
        $info["member_id"] = $_SESSION["member_id"];
        $info["item_id"] = $_SESSION["item_id"];
        $info["count"] = $_SESSION["count"];
        $info["date_sold"] = $_SESSION["date_sold"];
        
        $sqlquery = "SELECT * FROM Item_TB";
        $result = mysqli_query($connection,$sqlquery);
        if(mysqli_num_rows($result)>0){
            while($rows = mysqli_fetch_assoc($result)){
                $info["member_id"]=$rows["m_id"];
                $info["item"]=$rows["m_id"];
                $info["price"]=$rows["m_id"];
                $info["description"]=$rows["item_description"];
                $info["imageurl"] = $rows["image_url"];
            }
        }
    }
    else
    {
        $result["member_id"] = "null";
        
    }
    echo json_encode($info);
}
?>