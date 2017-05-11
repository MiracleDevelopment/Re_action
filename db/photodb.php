<?php
require("connector.php");
if($connection){
    $response=[];

    $namefood = $_POST["name"];
    $descriptionfood = $_POST["detail"];
    $pricefood=$_POST["price"];
    $type = $_POST["type"];
    $url = $_POST["imgurl"];

    $sqlquery = "INSERT INTO Item_TB(item_name,item_description,price,type,image_url)
    VALUES ('$namefood','$descriptionfood','$pricefood','$type','$url')";
    $result = mysqli_query($connection,$sqlquery);
    if($result){
        $response["status"] = "OK";
        $response["type"] = '$type';
    }else{
        $response["status"] = "not Ok";
        $response["type"] = '$type';
    }
    echo json_encode($response);
}

?>