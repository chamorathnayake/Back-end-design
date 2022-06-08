<?php
  // database connection code

  $server   = "localhost";
  $username = "root";
  $password = "";
  $db_name  = "db_new";

  $mysqli = new mysqli($server,$username,$password,$db_name);

  if($mysqli->connect_error){
    echo "<hr />";
    echo $mysqli->connect_error;
    die('Connection Failed');
  }
  // echo "success";

 ?>
