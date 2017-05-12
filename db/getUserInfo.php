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
}
else
{
    $result["firstname"] = "null";
  
}
echo json_encode($result);
?>