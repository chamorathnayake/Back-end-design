<?php
   //start the session service this should be done
   //at the beginning of the code
  session_start();
  //connect to db server
  require("db_connection.php");

  // echo "<pre>";
  // print_r($_REQUEST);

  $user_id      = $_REQUEST['user_id'];
  $access_code  = $_REQUEST['access_code'];

  //build a sql command
  $sql = "select * from tbl_logs where user_id='$user_id'";

  //execute the sql and see whether any username
  //matches
  $rs = $mysqli->query($sql);

  if(mysqli_num_rows($rs)>0){
    //username found
    //echo "user name ok";
    //lets make sure that the user entered correct
    //password as well
    $row = mysqli_fetch_assoc($rs);

    //if($access_code==$row['access_code']){
    if(crypt($access_code,$row['access_code'])==$row['access_code']){
      //echo "password is matching";
      //let's redirect the user to CPanel page

      //store the valid user info in the $_SESSION array
      $_SESSION['user_id']     = $user_id;
      $_SESSION['access_code'] = $user_id;
      $_SESSION['user_grp']    = $row['user_grp'];
      // header("location:cpanel.php");
      header('location:progressbar.php');

    }
    else{
      //echo "password is wrong";
      //let's redirect the user invalid_login.php
      header("location:invalid_login.php");
    }
  }
  else{
    //invalid username
    //echo "no such username";
    //let's redirect the user invalid_login.php
    header("location:invalid_login.php");
  }

 ?>
