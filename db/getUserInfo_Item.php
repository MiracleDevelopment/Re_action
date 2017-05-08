<?php 
    require("connector.php");
    if($connection){
        $commandInfo = [];
        $response = [];
        $firstname = $_POST[""];
        $lastname = $_POST[""];
        $sqlquery = "SELECT i_id,m_id,count FROM History_TB WHERE firstname = '$firstname' AND lastname = '$lastname'";
        $result = mysqli_query($connection,$sqlquery);
        if(mysqli_num_rows($result)>0){
            while($rows= mysqli_fetch_assoc($result)){
                    $commandInfo["itemId"] = $rows["i_id"];
                    $commandInfo["memberId"] = $rows["m_id"];
                    $commandInfo["count"] = $rows["count"];
                    $response[] = $commandInfo; 
            }
        }
        echo json_encode($response);
    }


?>