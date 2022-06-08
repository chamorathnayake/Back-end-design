<?php
  require("validate_user.inc.php");
  require('db_connection.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <!-- linking Bootstrap libs css and js -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>


  </head>
  <body>
  

                  <!-- confirm message here -->

                  <form class="form"
                    action="edit_product_2.php" method="post">
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
            <?php
              include("footer.inc.php");
             ?>
        </div>

    </div>

  </body>
</html>
