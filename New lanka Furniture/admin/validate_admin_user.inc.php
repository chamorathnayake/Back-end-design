<?php
  if($_SESSION['user_grp']!="admin"){
    header("location:invalid_login.php");
  }
 ?>
