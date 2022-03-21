<?php
    include 'db/dbHandle.php';
    include 'helper/fileDownloader.php';

    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        // collect value of input field
        $stid = $_GET['id'];
        if (empty($stid)) {
          echo "No Software Found!";
        }
        $conn = dbConnect($servername,$username,$password,$dbname);
        $url = getSoftwareFilepath($conn,$stid);
        fileDownload($url);


        
    }
    else{
      header("Location: index.php");
    }
?>