<?php
  require("validate_user.inc.php");
  //if the user is not an admin send him to invalid login page.
  require("validate_admin_user.inc.php");
  //connect to database
  require("db_connection.php");

  require("code_bank.inc.php");


  $pid = $_REQUEST['pid'];

  //lets make a copy of the record to the tbl_product_backup table
  //before permanently deleting
  $sql_backup = "insert into tbl_product_backup select * from tbl_product where pid=$pid";
  $q = $mysqli->query($sql_backup);

  // $existing_picture_name = getPictureName($pid);
  // echo $existing_picture_name;
  // die();
  $sql ="delete from tbl_product where pid=$pid";

  $x = $mysqli->query($sql);

  if($x>0){
    //lets delete the file from the server HDD permanently
    // if($existing_picture_name!="default.jpg"){
    //   //dont try this at home ! be aware
    //   unlink("../product/large/$existing_picture_name");
    //   unlink("../product/thumbs/$existing_picture_name");
    // }

    header("location:delete_product_4.php?status=pass");
  }
  else{
    header("location:delete_product_4.php?status=fail");
  }
 ?>
