<?php
    include_once 'dbConnect.php';
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $seid = $_GET['id'];
        
        $conn = dbConnect($servername,$username,$password,$dbname);
        $res = deleteEpisodes($conn,$seid);
        if($res != -1)
        {
            echo "Episode Deleted!";
        }
        else
        {
            echo "Episode Not deleted";
        }

            
        

    }
    
?>