<?php
require("connector.php");
if($connection){
    $listInfoFood = [];
    $response = [];
    $id = $_POST[""];
    $sqlquery = "SELECT * FROM Item_TB WHERE item_id= '$id'";
    $result = mysqli_query($connection,$sqlquery);
    if(mysqli_num_rows($result)>0){
        while($rows = mysqli_fetch_assoc($result)){
            $listInfoFood["id"] = $rows["item_id"];
            $listInfoFood["itemname"] = $rows["item_name"];
            $listInfoFood["urlphoto"] = $rows["image_url"];
            $listInfoFood["price"] = $rows["price"];
            $response[] = $listInfoFood;

        }
    }
    echo json_encode($response);
}


?>