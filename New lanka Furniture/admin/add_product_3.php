<?php
  require("validate_user.inc.php");
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
</div>
            <!-- confirm message here -->

            <?php
              if($_REQUEST['status']=='pass'){
                              //close the closing brace after the success message div
             ?>

            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">STATUS : Success</h4>
              <p>New product record has been successfully added.</p>
              <hr>
              <a href="add_product_1.php" class="btn btn-success btn-lg">Add Another Record</a>
              <a href="cpanel.php" class="btn btn-info btn-lg">Back to CPanel</a>
            </div>
            <?php
                }//end of if part
                else{//check the closing brace at the end of error div
             ?>

            <div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">STATUS : Failed</h4>
              <p>Creating new product record failed</p>
              <hr>
              <a href="add_product_1.php" class="btn btn-danger btn-lg">Try Again</a>
              <a href="cpanel.php" class="btn btn-info btn-lg">Back to CPanel</a>
            </div>
            <?php
                }//end of else part here
             ?>

          </div><!--end of div col 8-->


      <?php
        include("footer.inc.php");
       ?>

       </div><!--end of row -->
    </div><!-- end of container-->


  </body>
</html>
