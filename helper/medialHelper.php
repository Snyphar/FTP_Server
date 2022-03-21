<?php
    $vid = -1;
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['video'])) {
        // collect value of input field
        $vid = $_GET['video'];
        if (empty($imdbLink)) {
          echo "Link is empty";
        } 
        
    }
    else
?>