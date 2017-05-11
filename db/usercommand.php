<?php
session_start();
$msg = "Hello,it,me";
$id = $_POST["id"];
$item = $_POST["item"];
$result = explode(",",$msg);
$number = count($result);
for($i = 0 ;$i<$number;$i++){
    print $result[$i];
}
?>