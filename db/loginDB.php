<?php
require("connector.php");
session_start();
if($connection)
{
    $response=[];
    $userInfo=[];
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $stateLogin  = "SELECT member_id,email,firstname,lastname,password From Member_TB  WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection,$stateLogin);
    if(mysqli_num_rows($result) > 0)
    {
        while($rows = mysqli_fetch_assoc($result))
        {
            $emailLogin = $rows["email"];
            
            $userInfo["email"] = $rows["email"];
            $userInfo["id"] = $rows["member_id"];
            $userInfo["username"] = $rows["username"];
            $userInfo["status"] = true;
            $response[] = $userInfo;

            $_SESSION["firstname"] = $rows["firstname"];
            $_SESSION["lastname"] = $rows["lastname"];
            $_SESSION["username"] = $rows["username"];
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