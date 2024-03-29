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
function checkDuplicateEpisodes($conn,$season,$episode,$ssid)
{
    $sql = 'SELECT * FROM series_season_episode WHERE ssid ='.$ssid.' AND season = '.$season.' AND episode = '.$episode;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return TRUE;
    }
    return FALSE;

}
function insertEpisode($conn,$ssid,$season,$episode,$file)
{
    
    $sql = 'SELECT * FROM series_season WHERE ssid ='.$ssid.' AND season = '.$season;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
    }
    
    $sql = 'INSERT INTO videos(filepath) VALUES ("'.$file.'")';
    $vid = -1;
    $error = $sql;
    if ($conn->query($sql) === TRUE) {
        $vid = $conn->insert_id;
        $error = "VID: ".$vid;
        $sql = 'INSERT INTO `series_season_episode`(`ssid`, `season`, `episode`, `vid`)
                 VALUES ('.$ssid.','.$season.','.$episode.','.$vid.')';
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
    $sql = 'SELECT * FROM  media_catagory';
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
function getEpisodes($conn,$ssid,$season)
{
    $sql = 'SELECT * FROM  series_season_episode WHERE ssid = '.(int)$ssid.' AND season = '.(int)$season;
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

function insertSoftware($conn,$title,$poster,$description,$file,$catagories,$size)
{
    
    $sql = 'INSERT INTO software(title, description, filepath, poster, catagory, size) 
        VALUES ("'.$title.'","'.$description.'","'.$file.'","'.$poster.'","'.$catagories.'","'.$size.'")';
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
function deleteSoftware($conn,$stid)
{
    $sql = 'DELETE FROM `software` WHERE stid = '.$stid;
    if ($conn->query($sql) === TRUE) {
        return 1;
    }
    else
    {
        return -1;
    }
}
function getSoftwareInfo($conn,$stid)
{
    $sql = 'SELECT * FROM  software WHERE stid = '.$stid;
    $result = $conn->query($sql);
    return $result;
}

function editSoftware($conn,$stid,$title,$poster,$description,$file,$catagories)
{
    $sql = 'UPDATE `software` SET `title`="'.$title.'",`description`="'.$description.'",
            `filepath`="'.$file.'",`poster`="'.$poster.'",`catagory`="'.$catagories.'" WHERE stid = '.$stid;
        echo $sql;
        
    if ($conn->query($sql) === TRUE) {
        
        return 1; 
    } else {
        return -1;
        
    }
}
function getSeasonInfo($conn,$ssid)
{
    $sql = 'SELECT * FROM series_season WHERE ssid = '.$ssid;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    }
    
}
function editSeason($conn,$ssid,$season)
{
    $sql = 'UPDATE `series_season` SET `season`= '.$season.' WHERE ssid = '.$ssid;
    if ($conn->query($sql) === TRUE) {
        $sql = 'UPDATE `series_season_episode` SET `season`= '.$season.' WHERE ssid = '.$ssid;
        if ($conn->query($sql) === TRUE) {
            return 1;
        
        } else {
            return -1;
            
        }
        
    } else {
        return -1;
        
    }
    $sql = 'UPDATE `series_season_episode` SET `season`='.$season.' WHERE ssid = '.$ssid;
    if ($conn->query($sql) === TRUE) {
        
        
    } else {
        return -1;
        
    }

}
function deleteSeries($conn,$sid)
{
    $sql = 'DELETE FROM `series` WHERE sid = '.$sid;
    if ($conn->query($sql) === TRUE) {
        $sql = 'DELETE FROM `series_season` WHERE sid = '.$sid;
        $conn->query($sql);
        $sql = 'DELETE FROM `series_season_episode` WHERE sid = '.$sid;
        $conn->query($sql);

    }
    else
    {
        return -1;
    }

}
function deleteSeason($conn,$ssid)
{
    $sql = 'DELETE FROM `series_season` WHERE ssid = '.$ssid;
    if ($conn->query($sql) === TRUE) {
        $sql = 'DELETE FROM `series_season_episode` WHERE ssid = '.$ssid;
        $conn->query($sql);
        return 1;
    }
    else
    {
        return -1;
    }

    
}
function countMovies($conn)
{
    $sql = 'SELECT * FROM movies';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $count = mysqli_num_rows($result);
        return $count;

    }
    else
    {
        return -1;
    }
}
function countSeries($conn)
{
    $sql = 'SELECT * FROM series';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $count = mysqli_num_rows($result);
        return $count;

    }
    else
    {
        return -1;
    }
}
function countSoftware($conn)
{
    $sql = 'SELECT * FROM software';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $count = mysqli_num_rows($result);
        return $count;

    }
    else
    {
        return -1;
    }
}
function countViews($conn)
{
    $sql = 'SELECT SUM(views_num) as sum FROM views';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        return $row["sum"];

    }
    else
    {
        return -1;
    }
}
function countMediaCatagory($conn)
{
    $sql = 'SELECT * FROM media_catagory';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $count = mysqli_num_rows($result);
        return $count;

    }
    else
    {
        return -1;
    }
}
function countSoftwareCatagory($conn)
{
    $sql = 'SELECT * FROM software_catagory';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $count = mysqli_num_rows($result);
        return $count;

    }
    else
    {
        return -1;
    }
}
function countGenre($conn)
{
    $sql = 'SELECT * FROM genre';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $count = mysqli_num_rows($result);
        return $count;

    }
    else
    {
        return -1;
    }
}
function countvideos($conn)
{
    $sql = 'SELECT * FROM videos';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $count = mysqli_num_rows($result);
        return $count;

    }
    else
    {
        return -1;
    }
}
function getMoviesCatagory($conn)
{
    $sql = 'SELECT * FROM media_catagory';
    $result = $conn->query($sql);
    return $result;
}
function deleteMediaCatagory($conn,$cid)
{
    $sql = 'DELETE FROM media_catagory WHERE cid = '.$cid;
    if ($conn->query($sql) === TRUE) {
        return TRUE;
    }
    return FALSE;
}
function insertMediaCatagory($conn,$catagory)
{
    $sql = 'INSERT INTO media_catagory (`catagories`) VALUES ("'.$catagory.'")';
    echo $sql;
    if ($conn->query($sql) === TRUE) { 
        return TRUE; 
    } 
    else {
        return FALSE;
        
    }
}
function getSoftwareCatagory($conn)
{
    $sql = 'SELECT * FROM software_catagory';
    $result = $conn->query($sql);
    return $result;
}
function deleteSoftwareCatagory($conn,$id)
{
    $sql = 'DELETE FROM software_catagory WHERE id = '.$id;
    if ($conn->query($sql) === TRUE) {
        return TRUE;
    }
    return FALSE;
}
function insertSoftwareCatagory($conn,$catagory)
{
    $sql = 'INSERT INTO software_catagory (`catagory`) VALUES ("'.$catagory.'")';
    
    if ($conn->query($sql) === TRUE) { 
        return TRUE; 
    } 
    else {
        return FALSE;
        
    }
}
function getMoviesCatagoryById($conn,$cid)
{
    $sql = 'SELECT * FROM `media_catagory` WHERE cid = '.$cid;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        return $row["catagories"];

    }
    
}
function getSoftwareCatagoryById($conn,$id)
{
    $sql = 'SELECT * FROM `software_catagory` WHERE id = '.$id;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        return $row["catagory"];

    }
}
function editMediaCatagory($conn,$cid,$catagory)
{
    $sql = 'UPDATE `media_catagory` SET `catagories` = "'.$catagory.'" WHERE cid = '.$cid;
    $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        return TRUE;
    }
    return FALSE;

}
function editSoftwareCatagory($conn,$id,$catagory)
{
    $sql = 'UPDATE `software_catagory` SET `catagory` = "'.$catagory.'" WHERE id = '.$id;
    $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        return TRUE;
    }
    return FALSE;
}
?>