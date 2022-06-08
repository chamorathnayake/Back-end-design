<?php
     require('db_connection.php');

     $sql  = "insert into tbl_subcategory (sub_category,mid) values('".$_POST["sub_category"]."','".$_POST["mid"]."')";
     if (mysqli_query($mysqli,$sql))
     {
          echo 'Data Inserted';
     }


 ?>
