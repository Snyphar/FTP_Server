<?php
    include_once 'dbConnect.php';
    $success = 0;
    $catagory = "";
    $cid = -1;
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addCatagory']))
    {
        $catagory = $_POST['addCatagory'];
        $conn = dbConnect($servername,$username,$password,$dbname);

        $result = insertMediaCatagory($conn,$catagory);
        if($result === TRUE)
        {
            $sucess = 1;
        }
        else{
            $success = -1;
        }




    }
    else if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editCatagory']) && isset($_POST['cid']))
    {
        $catagory = $_POST['editCatagory'];
        $cid = $_POST['cid'];
        $conn = dbConnect($servername,$username,$password,$dbname);

        $result = editMediaCatagory($conn,$cid,$catagory);
        if($result === TRUE)
        {
            $success = 1;
        }
        else{
            $success = -1;
        }




    }
    else if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']))
    {
        $cid = $_GET['id'];
        $conn = dbConnect($servername,$username,$password,$dbname);

        $catagory = getMoviesCatagoryById($conn,$cid);

    }
?>