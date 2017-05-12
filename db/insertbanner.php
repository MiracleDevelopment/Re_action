<?php
require("connector.php");
if($connection){
    $info=[];
    $success = true;
    $success2 = true;
    $success3 = true;
    if(isset($_FILES["img"]))
    {
        $img = $_FILES["img"]['name'];
        $url = $_FILES['img']['tmp_name'];
        $path = "image/".$img;

        move_uploaded_file($url,"../image/".$img);

        $sql = "UPDATE Banner_TB SET b_imageurl = '$path' WHERE b_id = 1";
        $result = mysqli_query($connection,$sql);
        if(!$result)
        {
            $success = false;
        }
    }
    if(isset($_FILES["img2"]))
    {
        $img2 = $_FILES["img2"]['name'];
        $url2 = $_FILES['img2']['tmp_name'];
        $path2 = "image/".$img2;

        move_uploaded_file($url2,"../image/".$img2);

        $sql = "UPDATE Banner_TB SET b_imageurl = '$path2' WHERE b_id = 2";
        $result = mysqli_query($connection,$sql);
        if(!$result)
        {
            $success2 = false;
        }
    }
    if(isset($_FILES["img3"]))
    {
        $img3 = $_FILES["img3"]['name'];
        $url3 = $_FILES['img3']['tmp_name'];
        $path3 = "image/".$img3;

        move_uploaded_file($url3,"../image/".$img3);

        $sql = "UPDATE Banner_TB SET b_imageurl = '$path3' WHERE b_id = 3";
        $result = mysqli_query($connection,$sql);
        if(!$result)
        {
            $success3 = false;
        }
    }
    
    
    
   $info["status"] = $success && $success2 && $success3;
    
   echo json_encode($info);
}
?>