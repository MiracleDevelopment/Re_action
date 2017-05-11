<?php
session_start();

require("connector.php");
if($connection) 
{
    if(isset($_SESSION["item"]))
    {
        $msg = $_SESSION["item"];
    }
    else
    {
        $msg="";
    }

    $sqlquery = "SELECT * FROM Item_TB";
    $result = mysqli_query($connection,$sqlquery);
    $array = explode(",", $msg);
    $count = count($array);
    $totalCount = 0;
    $price = 0;

    if(mysqli_num_rows($result)>0)
    {
        while($rows = mysqli_fetch_assoc($result))
        {
            for($i = 0; $i < $count; $i++)
            {
                if($array[$i] == "") continue;
                $spliteText = explode("|",$array[$i]);
                if(strval($rows["item_id"]) == strval($spliteText[0]))
                {
                    $totalCount += intval($spliteText[1]);
                    $price += intval($rows["price"]) * intval($spliteText[1]);
                }

            }
        }
    }
    $response["price"] = $price;
    $response["count"] = $totalCount;
    echo json_encode($response);
}


?>