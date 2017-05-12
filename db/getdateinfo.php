<?php
require("connector.php");

if($connection){
    
    $info = [];
    $response=[];
    $switch = "month";//$_POST["date"];
    $time = date("Y-m-d");
    $Day = intval(date("d"));
    $sql = "SELECT * FROM History_TB";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0){
        
        while($rows=mysqli_fetch_assoc($result)){
            $dateTime = $rows["date_sold"];

            $date1=date_create($dateTime);
            $date2=date_create(strval($time));
            $diff = intval(date_diff($date1,$date2)->format("%a"));

            if($switch=="day")
            {
                if($diff == 0){
                    $info["m_id"] = $rows["m_id"];
                    $info["i_id"]  = $rows["i_id"];
                    $info["count"] =$rows["count"];
                    $info["date_sold"] =$rows["date_sold"];
                    $response[] = $info;
                }
            }
            else if($switch=="week")
            {
                if($diff <= 7){
                    $info["m_id"] = $rows["m_id"];
                    $info["i_id"]  = $rows["i_id"];
                    $info["count"] =$rows["count"];
                    $info["date_sold"] =$rows["date_sold"];
                    $response[] = $info;
                }  
            }
            else if($switch=="month")
            {
                if($diff <= 30) {
                    $info["m_id"] = $rows["m_id"];
                    $info["i_id"]  = $rows["i_id"];
                    $info["count"] =$rows["count"];
                    $info["date_sold"] =$rows["date_sold"];
                    $response[] = $info;
                } 
            }
            else
            {
                $info["m_id"] = $rows["m_id"];
                $info["i_id"]  = $rows["i_id"];
                $info["count"] =$rows["count"];
                $info["date_sold"] =$rows["date_sold"];
                $response[] = $info;
            }
        }
    }
    echo json_encode($response);
}


?>