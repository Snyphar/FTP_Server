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
    include_once './imdb.class.php';
    include_once 'dbConnect.php';
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['imdbLink'])) {
        // collect value of input field
        $imdbLink = $_GET['imdbLink'];
        if (empty($imdbLink)) {
          echo "Link is empty";
        } 
        else {
          
          $oIMDB = new IMDB($imdbLink);
            if ($oIMDB->isReady) {
                $cast = $oIMDB->getCast(5, false);
                $rating = $oIMDB->getRating();
                $title = $oIMDB->getTitle();
                $url = $oIMDB->getUrl();
                $poster = $oIMDB->getPoster('big', true);
                $plot = $oIMDB->getPlot();
                $genre = $oIMDB->getGenre();
            } else {
                echo '<p>Movie not found!</p>';
            }
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $rating = $_POST['movRating'];
        $title = $_POST['movTitle'];
        $IMDburl = $_POST['movIMDb'];
        $poster = $_POST['movPosterIMDb'];
        $plot = $_POST['movPlot'];
        $genre = $_POST['movGenre'];
        $cast = $_POST['movCast'];
        $file = $_POST['movFileName'];
        $catagories = $_POST['movCatagories'];


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
        $res = insertSeries($conn,$rating,$title,$IMDburl,$poster,$plot,$genre,$cast,$file,$catagories);
        if($res)
        {
            $success = 1;
            $error = "";
            $rating = "";
            $title = "";
            $url = "";
            $poster = "";
            $plot = "";
            $genre = "";
            $cast = ""; 
            $file = "";
        }
        else{
            $sucess = -1; 
        }
        dbClose($conn);
       
    }
?>