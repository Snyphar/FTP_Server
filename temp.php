<?php
  //include 'db/dbHandle.php';
  include 'Admin/apps/helpers/dbConnect.php';

  
  $conn = dbConnect($servername,$username,$password,$dbname);
  echo countViews($conn);


?>








