<?php
  require("validate_user.inc.php");
  //if the user is not an admin send him to invalid login page.
  require("validate_admin_user.inc.php");

  require('db_connection.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>

    <!-- linking Bootstrap libs css and js -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </head>
  <body>
    <div class="container">
        <?php include('nav_bar.inc.php') ?>
    </div>
              <div class="row">

                <div class="col-lg-8 col-md-8">

                  <!-- confirm message here -->
                  <h1>Delete product </h1>
                  <form class="form"
                    action="delete_product_2.php" method="post">
                    <div class="form-group col-8 float-left">
                      <label for="">Enter PID</label>
                      <input type="text" id="pid" name="pid" class="form-control"
                            value="" required="required">

                    </div><!-- end of form group-->
                    <div class="form-group col-4 float-right">
                      <label for="">&nbsp;</label>
                      <input type="submit" class="form-control btn btn-success"
                      name="" value="SEARCH">
                    </div>
                  </form>

                </div><!--end of div col 8-->

              </div><!--end of row -->
              <!-- row -->
            </div>

        </div>
        <?php
          include("footer.inc.php");
         ?>
    </div>
  </body>
</html>


<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<script src="assets/js/custom.js"></script>
