<?php
require("connection");
if($connection){
    $photoInfo=[];
    $response=[];
    
    $id = $_POST[""];
    $namefood = $_POST[""];
    $descriptionfodd = $_POST[""];
    $pricefood=$_POST[""];
    $url = $_POSt[""];

    $sqlquery = "INSERT INTO Item_TB(item_id,item_name,item_description,price,image_url)
    VALUES ('$id','$namefood','$descriptionfodd','$pricefood','$url')";
    $result = mysqli_query($connection,$sqlquery);
    if($result){
        echo"Sucessfully";
    }else{
        echo "not Sucessfully";
    }
}



?>