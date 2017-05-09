<?php
require("connector.php");
if($connection){
    $response=[];
    $namefood = $_POST["name"];
    $descriptionfood = $_POST["detail"];
    $pricefood=$_POST["price"];
    $url = $_POST["imgurl"];

    $sqlquery = "INSERT INTO Item_TB(item_name,item_description,price,image_url)
    VALUES ('$namefood','$descriptionfood','$pricefood','$url')";
    $result = mysqli_query($connection,$sqlquery);
    if($result){
        $response["status"] = "OK";
    }else{
       $response["status"] = "not OK";
    }
    echo json_encode($response);
}

?>