<?php
session_start();
if(isset($_SESSION["item"])){
    $msg = $_SESSION["item"];
}else{
    $msg="";
}

$id = $_POST["id"];

$result = explode(",",$msg);
$number = count($result);

for($i = 0 ;$i<$number;$i++){
    if($result[$i] == "") continue;
    $spliteText = explode("|",$result[$i]);
    
    if($spliteText[0]==$id){
            $result[$i] = "";
        break;
    }
}

$msg = implode(",", $result);
$msg = str_replace(",,",",", $msg);

$_SESSION["item"] = $msg;

echo $_SESSION["item"];

?>