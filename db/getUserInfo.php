<?php
session_start();
$result =[];

if(isset($_SESSION["firstname"])){
    $result["firstname"] = $_SESSION["firstname"];
    $result["lastname"] = $_SESSION["lastname"];
    $result["email"] = $_SESSION["email"];
    $result["phone"] = $_SESSION["phone"];
    $result["address"] = $_SESSION["address"];
    $result["member_id"] = $_SESSION["member_id"];
    $result["username"] = $_SESSION["username"];
}
else
{
    $result["firstname"] = "null";
    $result["lastname"] = "null";
    $result["email"] = "null";
    $result["phone"] = "null";
    $result["address"] = "null";
    $result["member_id"] = "null";
    $result["username"] = "null";
  
}
echo json_encode($result);
?>