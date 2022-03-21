<?php
    include_once 'dbConnect.php';

    $success = 0;
    $error = "";
    
    $title = "";
    $url = "";
    $poster = "";
    $description = ""; 
    $file = "";
    $catagory = "";
    $target_dir = "posters/";
    $target_file = "";
    $uploadOk = 1;
    $imageFileType = "";
    $stid = -1;

    

    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        // collect value of input field
        $stid = $_GET['id'];
        $conn = dbConnect($servername,$username,$password,$dbname);
        $res = getSoftwareInfo($conn,$stid);
        if ($res->num_rows > 0) {
            // output data of each row
            $row = $res->fetch_assoc();

            $file = $row["filepath"];
            $title = $row["title"];
            $poster = $row["poster"];
            $description = $row["description"];
            $catagories = $row["catagory"];
            
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['softTitle'];
        $description = $_POST['softDescription'];
        $file = $_POST['softFileName'];
        $catagories = $_POST['softCatagories'];
        $stid = $_POST['softID'];
        $poster = $_POST['softPosterPrev'];
        if(file_exists($_FILES['softPoster']['tmp_name']) && is_uploaded_file($_FILES['softPoster']['tmp_name'])) 
        {
            $target_file = $target_dir . basename($_FILES["softPoster"]["name"]);
            $poster = $target_file;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["softPoster"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            
            // Check file size
            if ($_FILES["softPoster"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["softPoster"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["softPoster"]["name"])). " has been uploaded.";
                } else {
                echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        
        $conn = dbConnect($servername,$username,$password,$dbname);
        $res = editSoftware($conn,$stid,$title,$poster,$description,$file,$catagories);
        
        if($res !== -1)
        {
            $success = 1;
            $error = "";
            $title = "";
            $url = "";
            $poster = "";
            
            $description = ""; 
            $file = "";
        }
        else{
            $sucess = -1; 
        }
        dbClose($conn);
        
        


        
        
        


        
    }
    function selectCatagory($catagory,$select)
    {
        if(!empty($catagory) && $catagory == $select)
        {
            
            return "selected";

        }
        else
        {
            return "not selected";
        }
    }

?>