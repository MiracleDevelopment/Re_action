<?php
require("connector");
session_start();
if($connection){
    $member_id = $_POST[""];
    $item_id = $_POST[""];
    $count = $_POST[""];
    $date_sold = $_POST[""];
    
    $_SESSION["member_id"] = $member_id;
    $_SESSION["item_id"] = $item_id;
    $_SESSION["count"] = $count;
    $_SESSION["date_sold"] = $date_sold;
    
}
?>