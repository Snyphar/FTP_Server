<?php
    include_once 'dbConnect.php';
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $stid = $_GET['id'];
        echo '<script type="text/javascript">window.alert("'.$stid.'");</script>';
        $conn = dbConnect($servername,$username,$password,$dbname);
        $res = deleteSoftware($conn,$stid);
        if($res != -1)
        {
            header("Location: ../viewmovies.php");
            exit;
        }
            
        

    }
    
?>