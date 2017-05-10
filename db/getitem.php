<?php
require("connector.php");
if($connection){
    $info=[];
    $response=[];
    $type = $_POST["type"];
    
    $sqlquery = "SELECT * FROM Item_TB WHERE type = '$type'";
    $result = mysqli_query($connection,$sqlquery);
    if(mysqli_num_rows($result)>0){
        while($rows = mysqli_fetch_assoc($result)){
            $info["id"] = $rows["item_id"];
            $info["name"] = $rows["item_name"];
            $info["description"] = $rows["item_description"];
            $info["price"] = $rows["price"];
            $info["type"] = $rows["type"];
            $info["imageurl"] = $rows["image_url"];
            $response[] = $info;
        }
    }
    echo json_encode($response);
}


?>
