<?php
    include_once 'dbConnect.php';
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $sid = $_GET['id'];
        echo '<script type="text/javascript">window.alert("'.$mid.'");</script>';
        $conn = dbConnect($servername,$username,$password,$dbname);
        $res = deleteSeries($conn,$sid);
        if($res != -1)
        {
            header("Location: ../viewmovies.php");
            exit;
        }
            
        

    }
    
?>