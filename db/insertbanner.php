<?php
require("connector.php");
if($connection){
    $num=[];
    $response=[];
    $info=[];
    $img = $_FILES["img"]['name'];
    $img2 = $_FILES["img2"]['name'];
    $img3= $_FILES["img3"]['name'];
    
    $url = $_FILES['img']['tmp_name'];
    $url2 = $_FILES['img2']['tmp_name'];
    $url3 = $_FILES['img3s']['tmp_name'];
    
    $path = "image/".$img;
    $path2 = "image/".$img2;
    $path3 = "image/".$img3;

    
    if(move_uploaded_file($url,"../image/".$img))
    {
        chmod("../image/".$img, 0777);
        $num["img"]=$path;
    }
    
    if(move_uploaded_file($url2,"../image/".$img2))
    {
        chmod("../image/".$img2, 0777);
        $num["img2"]=$path2;
    }
    
    if(move_uploaded_file($url3,"../image/".$img3))
    {
        chmod("../image/".$img3, 0777);
        $num["img2"]=$path3;
    }
    $result = count($num);
    for($i = 1;$i<=$result;$i++){
        if($i==1){
            $name = $path;
        }else if ($i==2){
            $name = $path2;
        }else if ($i==3){
            $name = $path3;
        }
        $sql = "UPDATE banner_tb SET b_imageurl = '$name' WHERE b_id = $i";
        $result = mysqli_query($connection,$sql);
        if($result){
            $info["status"]  = $name;
            $response[] = $info;
        }else{
            $info["status"] = "not ok";
            $response[] = $info;
        }
        echo json_encode($response);
    }
    
    
}
?>