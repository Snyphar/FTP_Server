<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ftp";

function dbConnect($servername,$username,$password,$dbname)
{
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        $error = "Database Copnnection Failed!";

    }
    return $conn;
}

function dbClose($conn)
{
    $conn->close();
    $error  ="DB Closed";
}

function sanitise($str)
{
    $str = str_replace('"',' ', $str);
    return $str;

}
function insertMovie($conn,$rating,$title,$IMDburl,$poster,$plot,$genre,$cast,$file,$catagory)
{
    $sql = 'INSERT INTO videos(filepath) VALUES ("'.$file.'")';
    $vid = -1;
    $error = $sql;
    $plot = sanitise($plot);
    $genre = strtolower($genre);
    if ($conn->query($sql) === TRUE) {
        $vid = $conn->insert_id;
        $error = "VID: ".$vid;
        $sql = 'INSERT INTO movies(title, rating, vid, cast, plot, poster, genre, catagory) 
            VALUES ("'.$title.'","'.$rating.'",'.$vid.',"'.$cast.'","'.$plot.'","'.$poster.'","'.$genre.'","'.$catagory.'")';
            
        if ($conn->query($sql) === TRUE) {
            $id = $conn->insert_id;
            return $id; 
        } else {
            return -1;
            $error =  "Error: " . $sql . "<br>" . $conn->error;
        }
      } else {
        return FALSE;
        $error =  "Error: " . $sql . "<br>" . $conn->error;
      }
    
    


}
function editMovie($conn,$mid,$rating,$title,$poster,$plot,$genre,$cast,$file,$catagory,$vid)
{
    $sql = 'SELECT * FROM `videos` WHERE vid = '.$vid;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if($row["filepath"] === $file)
        {

        }
        else{
            $sql = 'UPDATE `videos` SET `filepath`= "'.$file.'" WHERE vid = '.$vid;
            $result = $conn->query($sql);
        }
        $plot = sanitise($plot);
        $genre = strtolower($genre);
        $sql = 'UPDATE `movies` SET `title`="'.$title.'",`rating`= "'.$rating.'",`vid`= '.$vid.' ,`cast`= "'.$cast.'",
        `plot`= "'.$plot.'",`poster`= "'.$poster.'",`genre`= "'.$genre.'",`catagory`= "'.$catagory.'" WHERE mid = '.$mid;
        echo $sql;
        
        if ($conn->query($sql) === TRUE) {
            
            return 1; 
        } else {
            return -1;
            
        }


    }
    else{
        return -1;
    }
    
      
    
    


}
function deleteMovies($conn,$mid)
{
    $sql = 'DELETE FROM `movies` WHERE mid = '.$mid;
    if ($conn->query($sql) === TRUE) {
        return 1;
    }
    else
    {
        return -1;
    }

}
function deleteEpisodes($conn,$seid)
{
    $sql = 'DELETE FROM `series_season_episode` WHERE seid = '.$seid;
    if ($conn->query($sql) === TRUE) {
        return 1;
    }
    else
    {
        return -1;
    }

}
function editEpisodes($conn,$seid,$file)
{
    $sql = 'INSERT INTO videos(filepath) VALUES ("'.$file.'")';
    $vid = -1;
    
    if ($conn->query($sql) === TRUE) {
        $vid = $conn->insert_id;
        $sql = 'UPDATE `series_season_episode` SET `vid`='.$vid.' WHERE seid = '.$seid;
        $result = $conn->query($sql);
        if($result)
        {
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
}
function insertSeries($conn,$rating,$title,$IMDburl,$poster,$plot,$genre,$cast,$file,$catagories)
{
    $sql = 'INSERT INTO videos(filepath) VALUES ("'.$file.'")';
    $vid = -1;
    $error = $sql;
    $plot = sanitise($plot);
    $genre = strtolower($genre);
    if ($conn->query($sql) === TRUE) {
        $vid = $conn->insert_id;
        $error = "VID: ".$vid;
        $sql = 'INSERT INTO series(title, rating, cast, plot, poster, genre, catagory) 
            VALUES ("'.$title.'","'.$rating.'","'.$cast.'","'.$plot.'","'.$poster.'","'.$genre.'","'.$catagories.'")';
            
        if ($conn->query($sql) === TRUE) {
            return TRUE; 
        } else {
            return FALSE;
            $error =  "Error: " . $sql . "<br>" . $conn->error;
        }
      } else {
        return FALSE;
        $error =  "Error: " . $sql . "<br>" . $conn->error;
      }
    
    


}
function checkDuplicateEpisodes($conn,$season,$episode,$series)
{
    $sql = 'SELECT * FROM series_season_episode WHERE sid ='.$series.' AND season = '.$season.' AND episode = '.$episode;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return TRUE;
    }
    return FALSE;

}
function insertEpisode($conn,$series,$season,$episode,$file)
{
    
    $sql = 'SELECT * FROM series_season WHERE sid ='.$series.' AND season = '.$season;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
    }
    else{
        $sql = 'INSERT INTO series_season(sid, season) VALUES ('.$series.','.$season.')';
        if ($conn->query($sql) === TRUE) {  
        } 
        else {
            return FALSE;
            $error =  "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    $sql = 'INSERT INTO videos(filepath) VALUES ("'.$file.'")';
    $vid = -1;
    $error = $sql;
    if ($conn->query($sql) === TRUE) {
        $vid = $conn->insert_id;
        $error = "VID: ".$vid;
        $sql = 'INSERT INTO `series_season_episode`(`sid`, `season`, `episode`, `vid`)
                 VALUES ('.$series.','.$season.','.$episode.','.$vid.')';
        echo $sql;
        if ($conn->query($sql) === TRUE) {
            return TRUE; 
        } else {
            return FALSE;
            $error =  "Error: " . $sql . "<br>" . $conn->error;
        }
      } else {
        return FALSE;
        $error =  "Error: " . $sql . "<br>" . $conn->error;
      }
    



}
function getSeries($conn)
{
    $sql = 'SELECT * FROM  series';
    $result = $conn->query($sql);
    return $result;
}
function getCatagories($conn)
{
    $sql = 'SELECT * FROM  catagories';
    $result = $conn->query($sql);
    return $result;
}
function getSoftwareCatagories($conn)
{
    $sql = 'SELECT * FROM  software_catagory';
    $result = $conn->query($sql);
    return $result;
}
function getMovies($conn)
{
    $sql = 'SELECT * FROM  movies';
    $result = $conn->query($sql);
    return $result;
}
function getMoviesInfo($conn,$mid)
{
    $sql = 'SELECT * FROM  movies WHERE mid = '.$mid;
    $result = $conn->query($sql);
    return $result;
}
function getSeriesInfo($conn,$sid)
{
    $sql = 'SELECT * FROM  series WHERE sid = '.$sid;
    $result = $conn->query($sql);
    return $result;

}
function getSeason($conn,$sid)
{
    $sql = 'SELECT * FROM  series_season WHERE sid = '.$sid;
    $result = $conn->query($sql);
    return $result;
}
function getEpisodes($conn,$sid,$season)
{
    $sql = 'SELECT * FROM  series_season_episode WHERE sid = '.(int)$sid.' AND season = '.(int)$season;
    $result = $conn->query($sql);
    return $result;

}
function insertSeason($conn,$sid,$season)
{
    $sid =(int)$sid;
    $season=(int)$season;
    
    $sql = 'INSERT INTO `series_season`(`sid`, `season`) VALUES ('.$sid.','.$season.')';
    if ($conn->query($sql) === TRUE) {  
    } 
    else {
        return FALSE;
        $error =  "Error: " . $sql . "<br>" . $conn->error;
    }
}
function getVideoLink($conn,$vid)
{
    $sql = 'SELECT * FROM  videos WHERE vid = '.$vid;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["filepath"];
    }
    
}
function insertNewGenre($conn,$genre)
  {
      $genreArr = explode("/",str_replace(' ', '', $genre));
      print_r($genreArr);
      for($i = 0 ; $i < count($genreArr) ; $i++)
      {
        $sql = 'SELECT * FROM  genre WHERE genre LIKE "%'.$genreArr[$i].'%"';
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $gnum = (int)$row["gnum"] + 1;
            $sql = 'UPDATE genre SET gnum = '.$gnum.' WHERE gid = '.$row["gid"];
            //echo "<script>console.log('Console: " . $sql . "' );</script>";
            $result = $conn->query($sql);

            
        }
        else{
            $sql = 'INSERT INTO genre(genre, gnum) VALUES ("'.strtolower($genreArr[$i]).'",1)';
            $result = $conn->query($sql);
        }

      }

  }

function insertSoftware($conn,$title,$poster,$description,$file,$catagories)
{
    
    $sql = 'INSERT INTO software(title, description, filepath, poster, catagory) 
        VALUES ("'.$title.'","'.$description.'","'.$file.'","'.$poster.'","'.$catagories.'")';
    echo $sql;
        
    if ($conn->query($sql) === TRUE) {
        $id = $conn->insert_id;
        return $id; 
    } else {
        return -1;
        $error =  "Error: " . $sql . "<br>" . $conn->error;
    }
      
    
}
function getSoftware($conn)
{
    $sql = 'SELECT * FROM  software';
    $result = $conn->query($sql);
    return $result;
}
?>