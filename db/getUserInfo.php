<?php
session_start();
$result =[];
if(isset($_SESSION["firstname"])){
    $result["firstname"] = $_SESSION["firstname"];
    $result["lastname"] = $_SESSION["lastname"];
}
else
{
    $result["fistname"] = "null";
  
}
echo json_encode($result);
?>