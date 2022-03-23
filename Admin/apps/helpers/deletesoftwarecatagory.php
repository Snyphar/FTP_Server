<?php
    include_once 'dbConnect.php';
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $conn = dbConnect($servername,$username,$password,$dbname);
        $res = deleteSoftwareCatagory($conn,$id);
        if($res != -1)
        {
            echo "Catagory Deleted!";
        }
        else
        {
            echo "Catagory Not deleted";
        }

            
        

    }
    
?>