<?php
    
    
    include_once 'dbConnect.php';

    $success = 0;
    $error = "";
    $season = -1;
    $ssid = -1;
    $sid = -1;
    $seid = -1;

    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $ssid = $_GET['ssid'];
        $sid = $_GET['sid'];
        $conn = dbConnect($servername,$username,$password,$dbname);
        $seasonInfo = getSeasonInfo($conn,$ssid);
        $season = $seasonInfo["season"];


    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $season = (int)$_POST['seriesSeason'];
        $ssid = (int)$_POST['ssid'];
        $episode = (int)$_POST['seriesEpisode'];
        $sid = (int)$_POST['seriesId'];
        $file = $_POST['seriesFileName'];
        

        $conn = dbConnect($servername,$username,$password,$dbname);
        $duplicate = checkDuplicateEpisodes($conn,$season,$episode,$ssid);
        if($duplicate)
        {
            $success = -2;
        }
        else{
            $res = insertEpisode($conn,$ssid,$season,$episode,$file);
            if($res)
            {
                $success = 1;
            }
            else{
                $success = -1; 
            }
        }
        
        dbClose($conn);
        
        


        
        
        


        
    }


    
?>