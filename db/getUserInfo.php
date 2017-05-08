<?php
session_start();
$result =[];
if(isset($_SESSION["username"])){
    $result["username"] = $_SESSION["username"];
}
else
{
    $result["username"] = "null";
}
echo json_encode($result);
?>