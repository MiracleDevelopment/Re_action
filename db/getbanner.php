<?php
require("connector.php");
if($connection){
    $info =[];
    $response=[];
    $query  = "SELECT * FROM Banner_TB";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0){
        while($rows = mysqli_fetch_assoc($result)){
            $info["id"] = $rows["b_id"];
            $info["imageurl"] = $rows["b_imageurl"];
            $response[]=$info;
        }
    }
    echo json_encode($response);
}

?>