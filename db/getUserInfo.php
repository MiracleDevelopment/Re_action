<?php
session_start();
$result =[];
if(isset($_SESSION["userLogin"])){
    $result["username"] = $_SESSION["username"];
}

?>