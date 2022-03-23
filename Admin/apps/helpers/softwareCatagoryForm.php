<?php
    include_once 'dbConnect.php';
    $success = 0;
    $catagory = "";
    $id = -1;
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addCatagory']))
    {
        $catagory = $_POST['addCatagory'];
        $conn = dbConnect($servername,$username,$password,$dbname);

        $result = insertSoftwareCatagory($conn,$catagory);
        if($result === TRUE)
        {
            $sucess = 1;
        }
        else{
            $success = -1;
        }




    }
    else if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editCatagory']) && isset($_POST['id']))
    {
        $catagory = $_POST['editCatagory'];
        $id = $_POST['id'];
        $conn = dbConnect($servername,$username,$password,$dbname);

        $result = editSoftwareCatagory($conn,$id,$catagory);
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
        $id = $_GET['id'];
        $conn = dbConnect($servername,$username,$password,$dbname);

        $catagory = getSoftwareCatagoryById($conn,$id);

    }
?>