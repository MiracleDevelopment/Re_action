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
    
    $sql = "INSERT INTO Member_TB(firstname,lastname,username,password,address,email) VALUES('$firstname','$lastname'
    ,'$account','$password','$numberhome ' '$road ' '$tom ' '$area ' '$telephone ' '$location ' '$code','$email')";
    //$sql = "INSERT INTO Member_TB(firstname,lastname,username,password,address,email) VALUES 
     //('$firstname','$lastname','$account','$password','$numberhome','$email')";
    //$sql = "INSERT INTO Member_TB(firstname,lastname,username,password,address,email) VALUES('$firstname','$lastname'
    //,'$account','$password','$numberhome +$road+$tombol+$area+$telephone+$location+$code','$email')";
    $result = mysqli_query($connection,$sql);
    if($result){
        $info["status"] = "ok";
        $response[] = $info;
        echo "Sucessfully";
    }
    echo json_encode($response);
    
}else{
    echo "not connection";
}
?>