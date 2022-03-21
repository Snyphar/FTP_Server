<?php

include_once 'dbConnect.php';

$seriesID = -1;

if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['sid'])) {
    $seriesID = $_GET['sid'];
}
if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['addSeason']) && isset($_GET['sid'])) {
        // collect value of input field
        $season = $_GET['addSeason'];
        $seriesID = $_GET['sid'];

        $conn = dbConnect($servername,$username,$password,$dbname);
        insertSeason($conn,$seriesID,$season);
}

        
?>