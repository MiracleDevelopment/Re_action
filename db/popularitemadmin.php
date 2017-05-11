<?php 
    require("connector.php");
    if($connection){
        $num = $_POST["num"];
        $path = $_POST["poppular"];
        $query = "INSERT INTO Popular_TB(id_type,i_id) VALUES('$num','$path')";
        $result = mysqli_query($connection,$query);
        if($result){
            echo "Successfully";
        }else{
            echo "Denied";
        }

    }


?>