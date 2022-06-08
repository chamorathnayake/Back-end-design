<?php
  // require("validate_user.inc.php");
  // require('db_connection.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CPanel</title>

    <!-- linking Bootstrap libs css and js -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </head>
  <style media="screen">
body {
     background-image: url(images/a6.jpg);
     background-attachment: fixed;
     background-position: center;
}

</style>
  <body>

    <div class="container">
<?php include('nav_bar.inc.php') ?>
      <div class="row">
        <h2>New lankafurniture<span style="text-transform:capitalize;">
          <?php
            // $arr =  explode("@",$_SESSION['user_id']);
            // echo $arr[0];
           ?>
         </span>
        </h2>

      </div><!-- end of row-->

      <div class="row">
        <div class="col-lg-4 col-md-4">
          <h2>Add Property</h2>
          <p>Use this option to register new real estate properties in your database.</p>
          <a href="add_property_1.php" class="btn btn-block btn-success">ADD PROPERTY</a>
        </div><!-- end of col4 div-->


        <div class="col-lg-4 col-md-4">
          <h2>Edit Property</h2>
          <p>Use this option to update your real estate properties in your database.</p>
          <a href="edit_property_1.php" class="btn btn-block btn-primary">EDIT PROPERTY</a>
        </div><!-- end of col4 div-->


        <?php
          //lets hide the search facility for staff
          // if($_SESSION['user_grp']=="admin"){

         ?>
         <br>
        <div class="col-lg-4 col-md-4">
          <h2>Delete Property</h2>
          <p>Use this option to Delete your real estate properties in your database.</p>
          <a href="delete_property_1.php" class="btn btn-block btn-danger">DELETE PROPERTY</a>
        </div><!-- end of col4 div-->

      </div><!-- end of row-->

      <div class="row">
        <div class="col-lg-4 col-md-4">
          <h2>Search</h2>
          <p>Use this option to Search your real estate properties in your database.</p>
          <a href="search_1.php" class="btn btn-block btn-danger">SEARCH</a>
        </div><!-- end of div4-->

        <div class="col-lg-4 col-md-4">
          <h2>Logout</h2>
          <p>Once you have finished working, please safely logout. use this option</p>
          <a href="logout.php" class="btn btn-block btn-dark">LOG OUT</a>
        </div><!-- end of div4-->
      </div><!-- end of row-->



      <div class="row">
        <?php
          // echo "<pre>";
          // print_r($_SESSION);
         ?>
      </div>



      <?php
        include("footer.inc.php");
       ?>


    </div><!-- end of container-->


  </body>
</html>
