<?php
    
    
    include_once 'dbConnect.php';

    $success = 0;
    $error = "";
    $ssid = -1;
    $sid = -1;
    $season = -1;

    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $ssid = $_GET['ssid'];

        $conn = dbConnect($servername,$username,$password,$dbname);
        $seasonInfo  = getSeasonInfo($conn,$ssid);
        $sid = $seasonInfo["sid"];
        $season = $seasonInfo["season"];
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $sid = (int)$_POST['sid'];
        $season = $_POST['season'];
        $ssid = (int)$_POST['ssid'];
        

        $conn = dbConnect($servername,$username,$password,$dbname);
        
            $res = editSeason($conn,$ssid,$season);
            if($res)
            {
                $success = 1;
            }
            else{
                $success = -1; 
            }
        
        
        dbClose($conn);
        
        


        
        
        


        
    }


    
?>