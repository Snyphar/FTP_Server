<?php
    
    
    include_once 'dbConnect.php';

    $success = 0;
    $error = "";
    $seid = -1;
    $sid = -1;
    

    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $seid = $_GET['id'];
        $sid = $_GET['sid'];
        


    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $sid = (int)$_POST['seid'];
        $file = $_POST['seriesFileName'];
        

        $conn = dbConnect($servername,$username,$password,$dbname);
        
            $res = editEpisodes($conn,$seid,$file);
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