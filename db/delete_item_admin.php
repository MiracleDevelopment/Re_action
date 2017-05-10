<?php
require("connector.php");
if($connection){
    $id = $_POST[""];
    $sqlquery = "SELECT item_id FROM Item_TB WHERE item_id = '$id'";
    $result = mysqli_query($connection,$sqlquery);
    if($result){
        echo "Delete Sucessfully";
    }else{
        echo "Denied";
    }
}



?>