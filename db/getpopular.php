<?php
require("connector.php");
if($connection){
    $listInfoFood = [];
    $response = [];
    $sqlquery = "SELECT * FROM Popular_TB";
    $result = mysqli_query($connection,$sqlquery);

    if(mysqli_num_rows($result)>0){
        while($rows = mysqli_fetch_assoc($result)){
            $listInfoFood["id"] = $rows["id"];
            $listInfoFood["imageurl"] = $rows["imageurl"];
            $response[] = $listInfoFood;
        }
    }
    echo json_encode($response);
}


?>