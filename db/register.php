<?php
require("connector.php");
if($connection){
    $response=[];
    $info = [];
    $firstname=$_POST["firstname"];
    $lastname= $_POST["lastname"];
    $email = $_POST["email"];
    $account = $_POST["username"];
    $password = $_POST["password"];
    $telephone = $_POST["telephone"];
    $numberhome = $_POST["number-home"];
    $road = $_POST["road"];
    $tombol  = $_POST["tb"];
    $area = $_POST["area"];
    $location = $_POST["location"];
    $code = $_POST["code"];

    $sql = "SELECT * FROM Member_TB WHERE email='$email'";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0)
    {
        echo "email";
    }
    else
    {
         $sql = "SELECT * FROM Member_TB WHERE username='$account'";
        $result = mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>0)
        {
            echo "username";
        }
        else
        {
            $sql = "INSERT INTO Member_TB(firstname,lastname,username,password,address,email, phone) VALUES('$firstname','$lastname'
            ,'$account','$password','$numberhome ' '$road ' '$tom ' '$area ' '$telephone ' '$location ' '$code','$email','$numberhome')";

            $result = mysqli_query($connection,$sql);
            if($result){
                echo "OK";
            }
        }
    }  
}
else
{
    echo "not connection";
}
?>