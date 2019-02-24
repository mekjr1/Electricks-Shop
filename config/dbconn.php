<?php
$dbconn = mysqli_connect("den1.mysql1.gear.host","electricksdb","Fv9up6?lf~nN","electricksdb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  date_default_timezone_set("Asia/Manila"); 
?>
