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
        $response["item"] = [];
        while($rows = mysqli_fetch_assoc($result))
        {
            for($i = 0; $i < $count; $i++)
            {
                $info = [];
                if($array[$i] == "") continue;
                $spliteText = explode("|",$array[$i]);
                if(strval($rows["item_id"]) == strval($spliteText[0]))
                {
                    $totalCount += intval($spliteText[1]);
                    $price += intval($rows["price"]) * intval($spliteText[1]);
                    $info["id"] = $rows["item_id"];
                    $info["name"] = $rows["item_name"];
                    $info["image"] = $rows["image_url"];
                    $info["count"] = $spliteText[1];
                    $info["price"] = intval($rows["price"]) * intval($spliteText[1]);
                    $response["item"][] = $info;
                }

            }
        }
    }
    $response["price"] = $price;
    $response["count"] = $totalCount;
    echo json_encode($response);
}


?>