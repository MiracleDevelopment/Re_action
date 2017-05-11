<?php 
    require("connector.php");
    if($connection){
        $info=[];
        $type=[];
        $num = $_POST["num"];
        $path = $_POST["poppular"];
        $query = "INSERT INTO Popular_TB(id_type,i_id) VALUES ('$num','$path')";
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