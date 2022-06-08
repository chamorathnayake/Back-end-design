<?php
  require("validate_user.inc.php");
  //db connection
  require("db_connection.php");

  require("code_bank.inc.php");

   // echo "<pre>";
   // print_r($_REQUEST);
   // die();
  //storing values from form fields in variable

  $s_id                  = addslashes($_REQUEST['sid']);
  $product_name          = addslashes($_REQUEST['product_name']);
  $product_code          = addslashes($_REQUEST['product_code']);
  $product_size          = addslashes($_REQUEST['product_size']);
  $product_description   = addslashes($_REQUEST['product_description']);
  $product_brand         = addslashes($_REQUEST['product_brand']);
  $product_price         = addslashes($_REQUEST['product_price']);


  // $subcategory     = addslashes($_REQUEST['subcategoryy']);
  // $sql  = "insert into tbl_subcategory (sub_category) values='$subcategory' where pid=$last_id";

  //build a SQL dynamically command to insert thse data to db table

  $sql  = "insert into tbl_product (sid,product_name,product_code,product_size,product_description,product_brand,product_price) values(";
  $sql .= "'$s_id',";
  $sql .= "'$product_name',";
  $sql .= "'$product_code',";
  $sql .= "'$product_size',";
  $sql .= "'$product_description',";
  $sql .= "'$product_brand',";
  $sql .= " $product_price)";



  // echo $sql;
  //always display it and check

  //execute the SQL command
  $x = $mysqli->query($sql);

  //echo $sql;
  //die(); //display the sql with value for confirmation
  //checking whether execution of the SQL command was
  //successfull
  if($x>0){
    // echo "Record succesfully added";

    //lets upload the picture now
    if(($_FILES['picture']['error']==0) &&($_FILES['picture']['type']=='image/jpeg')){

      $last_id     = $mysqli->insert_id;//mysqli_insert_id($mysqli);
      $filename    = $_FILES['picture']['tmp_name'];
      $destination = $last_id . "_" .rand().rand().rand().".jpg";

      $y = move_uploaded_file($filename,"../product/large/".$destination);
      if($y>0){
        copy("../product/large/".$destination,"../product/thumbs/".$destination);

        //lets resize the thumb image
        resizeThumbPicture("../product/thumbs/",$destination);

        //everything went well so lets update the product table's
        //picture column with the $destinaton vars value

        $sql2 = "update tbl_product set picture='$destination' where pid=$last_id";
        $mysqli->query($sql2);

      }

    }
    else{
      //do nothing no need to add in the assignment
    }

    // echo $sql;
    header("location:add_product_3.php?status=pass");
  }
  else{
    // echo "sorry adding record failed";
    // echo $sql; //for debug purpose
    //die("adding failed");
    header("location:add_product_3.php?status=failed");
  }





 ?>
