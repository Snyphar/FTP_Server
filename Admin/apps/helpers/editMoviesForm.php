<?php
    
    $success = 0;
    $error = "";
    $rating = "";
    $title = "";
    $url = "";
    $poster = "";
    $plot = "";
    $genre = "";
    $cast = ""; 
    $file = "";
    $catagory = "";
    $target_dir = "posters/";
    $target_file = "";
    $uploadOk = 1;
    $imageFileType = "";
    $mid = -1;
    $vid = -1;
    include_once './imdb.class.php';
    include_once 'dbConnect.php';
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        // collect value of input field
        $mid = $_GET['id'];
        $conn = dbConnect($servername,$username,$password,$dbname);
        $res = getMoviesInfo($conn,$mid);
        if ($res->num_rows > 0) {
            // output data of each row
            $row = $res->fetch_assoc();

            $file = getVideoLink($conn,$row["vid"]);
            $cast = $row["cast"];
            $rating = $row["rating"];
            $title = $row["title"];
            $poster = $row["poster"];
            $plot = $row["plot"];
            $genre = $row["genre"];
            $catagories = $row["catagory"];
            $vid = $row["vid"];
            
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $rating = $_POST['movRating'];
        $title = $_POST['movTitle'];
        
        $poster = $_POST['movPosterIMDb'];
        $plot = $_POST['movPlot'];
        $genre = $_POST['movGenre'];
        $cast = $_POST['movCast'];
        $file = $_POST['movFileName'];
        $catagory = $_POST['movCatagories'];
        $vid = (int)$_POST['vid'];
        $mid = (int)$_POST['mid'];
        if(file_exists($_FILES['movPoster']['tmp_name']) && is_uploaded_file($_FILES['movPoster']['tmp_name'])) 
        {
            $target_file = $target_dir . basename($_FILES["movPoster"]["name"]);
            $poster = $target_file;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["movPoster"]["tmp_name"]);
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
            if ($_FILES["movPoster"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["movPoster"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["movPoster"]["name"])). " has been uploaded.";
                } else {
                echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        
        $conn = dbConnect($servername,$username,$password,$dbname);
        $res = editMovie($conn,$mid,$rating,$title,$poster,$plot,$genre,$cast,$file,$catagory,$vid);
        if($res != -1)
        {
           header('Location: viewmovies.php');
           exit; 
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