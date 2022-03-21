<?php
  include 'db/dbHandle.php';

  function insertNewGenre($conn,$genre)
  {
      $genreArr = explode("/",str_replace(' ', '', $genre));
      print_r($genreArr);
      echo str_replace(' ', '', $genre);

  }
  $conn = dbConnect($servername,$username,$password,$dbname);
  $genre = "action / adventure / fantasy / sci-fi / war";
  insertNewGenre($conn,$genre);


?>








