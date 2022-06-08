<?php

    include("db_connection.php");

    if (isset($_POST["mid"]) && !empty($_POST["mid"])) {
    // if (isset($_POST["#maincategory"]) && !empty($_POST["#maincategory"])) {
      //$query =$mysqli->query("SELECT * FROM tbl_subcategory WHERE mid = ".$_POST['mid']."AND mid=1 ORDER BY sub_category ASC");
      //$query =$mysqli->query("SELECT * FROM tbl_subcategory WHERE mid = ".$_POST['#maincategory']." AND mid=2 ORDER BY sub_category ASC");
      $query = $mysqli->query("SELECT * FROM tbl_subcategory WHERE mid = '".$_POST["mid"]."' ORDER BY sub_category ASC");

      $rowCount = $query->num_rows;

      if ($rowCount > 0) {
        echo '<option value="">Select subcategory</option>';
        while ($row = $query->fetch_assoc()) {
          $s_id = $row['sid'];
          $s_name = $row['sub_category'];
          echo '<option name="subcategory" value="'.$s_id.'">'.$s_name.'</option>';
          // echo '<option name="subcategory" value="'.$row['sid'].'">'.$row['sub_category'].'</option>';
        }
      }else {
        echo '<option value="">Sub Category not available</option>';
      }
    }
 ?>
