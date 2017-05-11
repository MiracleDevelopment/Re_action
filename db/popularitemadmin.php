<?php
require("connector.php");
if($connection){
    $info=[];
    $type=[];
    $type = $_POST["type"];
    $url = $_FILES['imagesurl']['tmp_name'];
    
    $file_name = $_FILES['imageurl']['name'];
    $path = "image/".$file_name;
    if(move_uploaded_file($url,"../image/".$file_name))
    {
        chmod("../image/".$file_name, 0777);
    }
    
    $query = "INSERT INTO Popular_TB(id_type,i_id) VALUES ('$type','$path')";
    $result = mysqli_query($connection,$query);
    if($result){
        $type["type"] = "OK";
        $info[] = $type;
    }else{
        $type["type"] = $path;
        $info[]= $type;
    }
    echo json_encode($type);
}else{
    $type["status"]  ="true";
    $info[] = $type;
    echo json_encode($info);
}


?>