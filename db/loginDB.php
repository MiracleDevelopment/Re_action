<?php
require("connector.php");
session_start();
if($connection)
{
    $response=[];
    $userInfo=[];
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $stateLogin  = "SELECT * From Member_TB  WHERE (username='$email' OR email='$email') AND password='$password'";
    $result = mysqli_query($connection,$stateLogin);
    if(mysqli_num_rows($result) > 0)
    {
        while($rows = mysqli_fetch_assoc($result))
        {
            $userInfo["email"] = $rows["email"];
            $userInfo["id"] = $rows["member_id"];
            $userInfo["username"] = $rows["username"];
            $userInfo["status"] = true;
            $response[] = $userInfo;

            $_SESSION["member_id"] = $rows["member_id"];
            $_SESSION["firstname"] = $rows["firstname"];
            $_SESSION["lastname"] = $rows["lastname"];
            $_SESSION["username"] = $rows["username"];
            $_SESSION["email"] = $rows["email"];
            $_SESSION["phone"] = $rows["phone"];
            $_SESSION["address"] = $rows["address"];
        }
    }
    else
    {
        $userInfo["status"] = false;
        $response[] = $userInfo;
    }
    echo json_encode($response);
    mysqli_close($connection);
}



?>