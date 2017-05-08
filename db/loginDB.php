<?php
require("connector.php");
session_start();
if($connection){
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $stateLogin  = "SELECT email,password From Member_TB  WHERE email = '$email' AND '$password'";
    $result = mysqli_query($connection,$stateLogin);
    if(mysqli_num_rows($result) > 0)
    {
        while($rows = mysqli_fetch_assoc($result))
        {
            $emailLogin = $rows["email"];
            if($email==$emailLogin)
            {
               // echo $emailLogin;
                $response=[];
                $userInfo=[];

                $userInfo["userLogin"] = $rows["email"];
                $response[] = $userInfo;
                
                $_SESSION["username"] = $userInfo["userLogin"];
               
            }
            
        }
    }
    echo json_encode($response);
    mysqli_close($connection);
}



?>