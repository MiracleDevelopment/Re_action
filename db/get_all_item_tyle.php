<?php
require("connector.php");
if($connection){
    $response=[];
    $type = $_POST["type"];
    
    $sqlquery = "SELECT * FROM Item_TB WHERE type = '$type'";
    $result = mysqli_query($connection,$sqlquery);
    if(mysqli_num_rows($result)>0){
        while($rows = mysqli_fetch_assoc($result)){
            $response["id"] = $rows["item_id"];
            $response["name"] = $rows["item_name"];
            $response["description"] = $rows["item_description"];
            $response["price"] = $rows["price"];
            $response["type"] = $rows["type"];
            $response["imageurl"] = $rows["image_url"];
        }
    }
    echo json_encode($response);
}


?>