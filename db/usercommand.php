<?php
require("connector");
if($connection){
    $history=[];

    $member_id = $_POST[""];
    $item_id = $_POST[""];
    $count = $_POST[""];
    $date_sold = $_POST[""];
    
    $sqlquery = "INSERT INTO History(m_id,i_id,count,date_sold) VALUES('$member_id','$item_id','$count','$date_sold')";
    $result = mysqli_query($connection,$sqlquery);
    if($result){
        echo "Sucessfully";
    }else{
        echo "not Sucessfully";
    }
    
}
?>