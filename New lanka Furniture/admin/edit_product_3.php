<?php
  require("validate_user.inc.php");
  //connect to the database
  require("db_connection.php");

  require("code_bank.inc.php");
  //get the values from the html form and store
  //them in variables

  // echo "<pre>";
  // print_r($_REQUEST);
  // die();
  $s_id                  = addslashes($_REQUEST['sid']);
  $pid                   = addslashes($_REQUEST['pid']);
  $product_name          = addslashes($_REQUEST['product_name']);
  $product_code          = addslashes($_REQUEST['product_code']);
  $product_size          = addslashes($_REQUEST['product_size']);
  $product_description   = addslashes($_REQUEST['product_description']);
  $product_brand         = addslashes($_REQUEST['product_brand']);
  $product_price         = addslashes($_REQUEST['product_price']);
  $picture               = addslashes($_REQUEST['picture']);

  //build the sql command using the values
  $sql  = "update tbl_product set ";
  $sql .= "sid='$s_id',";
  $sql .= "product_name='$product_name',";
  $sql .= "product_code='$product_code',";
  $sql .= "product_size='$product_size',";
  $sql .= "product_description='$product_description',";
  $sql .= "product_brand='$product_brand',";
  $sql .= "product_price='$product_price' where pid=$pid";
  // $sql .= "picture='$picture' where pid=$pid";

  //execute the sql command
  $x = $mysqli->query($sql);

  if($x>0){

    //lets upload the picture now
    // if(($_FILES['picture']['error']==0) &&($_FILES['picture']['type']=='image/jpeg')){
    //
    //   $last_id     = $mysqli->insert_id;//mysqli_insert_id($mysqli);
    //   $filename    = $_FILES['picture']['tmp_name'];
    //   $destination = $last_id . "_" .rand().rand().rand().".jpg";
    //
    //   $y = move_uploaded_file($filename,"../product/large/".$destination);
    //   if($y>0){
    //     copy("../product/large/".$destination,"../product/thumbs/".$destination);
    //
    //     //lets resize the thumb image
    //     getimagesize("../product/thumbs/",$destination);
    //
    //     //everything went well so lets update the product table's
    //     //picture column with the $destinaton vars value
    //
    //     $sql2 = "update tbl_product set picture='$destination' where pid=$last_id";
    //     $mysqli->query($sql2);

    // if(($_FILES['picture']['error']==0) &&($_FILES['picture']['type']=='image/jpeg')){
    //
    //   $last_id     = $mysqli->insert_id;//mysqli_insert_id($mysqli);
    //   $filename    = $_FILES['picture']['tmp_name'];
    //   $destination = $last_id . "_" .rand().rand().rand().".jpg";
    //
    //   $y = move_uploaded_file($filename,"../product/large/".$destination);
    //   if($y>0){
    //     copy("../product/large/".$destination,"../product/thumbs/".$destination);
    //
    //     //lets resize the thumb image
    //     resizeThumbPicture("../product/thumbs/",$destination);
    //
    //     //everything went well so lets update the product table's
    //     //picture column with the $destinaton vars value
    //
    //     $sql2 = "update tbl_product set picture='$destination' where pid=$last_id";
    //     $mysqli->query($sql2);

    //   }
    //
    // }
    // else{
    //   //do nothing no need to add in the assignment
    // }
    //echo "update was successfull";
    // echo $sql;
    header("location:edit_product_4.php?status=pass");
  }
  else{
    //echo "not successfull";
    // echo $sql;
    header("location:edit_product_4.php?status=fail");
  }



 ?>
