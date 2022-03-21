<?php
    
    
    include_once 'dbConnect.php';

    $seriesID = -1;
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['sid'])) {
        $seriesID = $_GET['sid'];
    
        
    }


    
?>