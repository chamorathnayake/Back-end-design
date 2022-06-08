<?php
  require("validate_user.inc.php");
  //if the user is not an admin send him to invalid login page.
  require("validate_admin_user.inc.php");
  require('db_connection.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <!-- linking Bootstrap libs css and js -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>


  </head>
  <body>

    <div class="container">
        <?php include('nav_bar.inc.php') ?>

        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1 class="text-dark text-center">WELCOME TO NEW LANKA FURNITURES</h1>

            <div class="col-lg-12 col-md-12">




            <!-- confirm message here -->

            <?php
              if($_REQUEST['status']=='pass'){
                              //close the closing brace after the success message div
             ?>

            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">STATUS : Success</h4>
              <p>Product Record Successfully Deleted</p>
              <hr>
              <a href="delete_product_1.php" class="btn btn-success btn-lg">Delete Another Record</a>
              <a href="cpanel.php" class="btn btn-info btn-lg">Back to CPanel</a>
            </div>
            <?php
                }//end of if part
                else{//check the closing brace at the end of error div
             ?>

            <div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">STATUS : Failed</h4>
              <p>Deleting Product Record Failed</p>
              <hr>
              <a href="delete_product_1.php" class="btn btn-danger btn-lg">Try Again</a>
              <a href="cpanel.php" class="btn btn-info btn-lg">Back to CPanel</a>
            </div>
            <?php
                }//end of else part here
             ?>

          </div><!--end of div col 8-->

        </div><!--end of row -->


      <?php
        include("footer.inc.php");
       ?>


    </div><!-- end of container-->


  </body>
</html>
