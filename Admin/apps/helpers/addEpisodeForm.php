<?php
    
    
    include_once 'dbConnect.php';

    $success = 0;
    $error = "";
    $season = -1;
    $sid = -1;
    $seid = -1;

    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $season = $_GET['season'];
        $sid = $_GET['sid'];

    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $season = (int)$_POST['seriesSeason'];
        $episode = (int)$_POST['seriesEpisode'];
        $sid = (int)$_POST['seriesId'];
        $file = $_POST['seriesFileName'];
        

        $conn = dbConnect($servername,$username,$password,$dbname);
        $duplicate = checkDuplicateEpisodes($conn,$season,$episode,$sid);
        if($duplicate)
        {
            $success = -2;
        }
        else{
            $res = insertEpisode($conn,$sid,$season,$episode,$file);
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