<?php
require("connector.php");

if($connection){
    $response=[];

    $namefood = $_POST["name"];
    $descriptionfood = $_POST["detail"];
    $pricefood=$_POST["price"];
    $type = $_POST["type"];
    $url = $_FILES['imgurl']['tmp_name'];

    $file_name = $_FILES['imgurl']['name'];
    $path = "image/".$file_name;

	move_uploaded_file($url,"../image/".$file_name);

    $sqlquery = "INSERT INTO Item_TB(item_name,item_description,price,type,image_url)
    VALUES ('$namefood','$descriptionfood','$pricefood','$type','$path')";
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