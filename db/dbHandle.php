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
function getGenre($conn)
{
    $sql = 'SELECT * FROM  genre';
    $result = $conn->query($sql);
    return $result;
}
function getGenreMoviesItem($conn,$genre,$catagory)
{
    if($catagory === "all")
    {
        $sql = 'SELECT * FROM  movies WHERE genre LIKE "%'.$genre.'%"  ORDER BY mid DESC';
        $result = $conn->query($sql);
        return $result;
    }
    else
    {
        $sql = 'SELECT * FROM  movies WHERE genre LIKE "%'.$genre.'%" AND catagory LIKE "%'.$catagory.'%" ORDER BY mid DESC';
        $result = $conn->query($sql);
        return $result;
    }
    
}
function getGenreSeriesItem($conn,$genre,$catagory)
{
    if($catagory === "all")
    {
        $sql = 'SELECT * FROM  series WHERE genre LIKE "%'.$genre.'%" ORDER BY sid DESC';
        $result = $conn->query($sql);
        return $result;
    }
    else
    {
        $sql = 'SELECT * FROM  series WHERE genre LIKE "%'.$genre.'%" AND catagory LIKE "%'.$catagory.'%" ORDER BY sid DESC';
        $result = $conn->query($sql);
        return $result;
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
function getVideoInfo($conn,$vid)
{
    $sql = 'SELECT * FROM  movies WHERE vid = '.$vid;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row;
}
function getSeriesInfo($conn,$sid)
{
    $sql = 'SELECT * FROM  series WHERE sid = '.$sid;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row;
}
function getSeriesVideo($conn,$sid)
{

    $sql = 'SELECT * FROM  series_season WHERE sid = '.$sid.' ORDER BY season';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $sql = 'SELECT * from series_season_episode WHERE ssid = '.$row["ssid"].' ORDER BY season , episode';
        echo $sql;
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            $vid = $row["vid"];

            return getVideoLink($conn,$vid);
    }
    }
    $sql = 'SELECT * from series_season_episode WHERE sid = '.$sid.' ORDER BY season , episode';
    echo $sql;
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        $vid = $row["vid"];

        return getVideoLink($conn,$vid);
    }
    return -1;
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
function addViews($conn,$vid)
{
    $sql = 'SELECT * FROM  views WHERE vid = '.$vid;
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $vnum = (int)$row["views_num"] + 1;
            $sql = 'UPDATE views SET views_num = '.$vnum.' WHERE id = '.$row["id"];
            //echo "<script>console.log('Console: " . $sql . "' );</script>";
            $result = $conn->query($sql);

            
        }
        else{
            $sql = 'INSERT INTO views(vid, views_num) VALUES ('.$vid.',1)';
            $result = $conn->query($sql);
        }

}
function getSoftware($conn)
{
    $sql = 'SELECT * FROM  software';
    $result = $conn->query($sql);
    return $result;
}
function getSoftwareFilepath($conn,$stid)
{
    $sql = 'SELECT `filepath` FROM `software` WHERE stid = '.$stid;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["filepath"];

    }
    
}
?>