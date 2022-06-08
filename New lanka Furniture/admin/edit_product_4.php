<?php
  require("validate_user.inc.php");
  require('db_connection.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>

    <!-- linking Bootstrap libs css and js -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <!-- linking Bootstrap libs css and js -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>


  </head>
  <body>
    <div id="wrapper">
      <div class="container">
          <?php include('nav_bar.inc.php') ?>

                    <?php
                      // $arr =  explode("@",$_SESSION['user_id']);
                      // echo $arr[0];
                     ?>
                   </span>
                </a>

        <div id="page-wrapper" >
            <div id="page-inner"> -->
              <!-- row
              <div class="row">
                <!-- <div class="col-lg-4 col-md-4">
                  <img src="images/side_bar.png" style="width:100%;" alt="">
                </div><!-- end of div col 4 -->

                <div class="col-lg-8 col-md-8">

                  <!-- confirm message here -->

                  <?php
                    if($_REQUEST['status']=='pass'){
                                    //close the closing brace after the success message div
                   ?>

                  <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">STATUS : Success</h4>
                    <p>Changes to the product record has
                      been successfully saved.</p>
                    <hr>
                    <a href="edit_product_1.php" class="btn btn-success btn-lg">Add Another Record</a>
                    <a href="cpanel.php" class="btn btn-info btn-lg">Back to CPanel</a>
                  </div>
                  <?php
                      }//end of if part
                      else{//check the closing brace at the end of error div
                   ?>

                  <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">STATUS : Failed</h4>
                    <p>Updating product record failed</p>
                    <hr>
                    <a href="edit_product_1.php" class="btn btn-danger btn-lg">Try Again</a>
                    <a href="cpanel.php" class="btn btn-info btn-lg">Back to CPanel</a>
                  </div>
                  <?php
                      }//end of else part here
                   ?>

                </div><!--end of div col 8-->

              </div><!--end of row -->
              <!-- row -->
            </div>

        </div>
        <?php
          include("footer.inc.php");
         ?>
    </div>
      </div>
  </body>
</html>
