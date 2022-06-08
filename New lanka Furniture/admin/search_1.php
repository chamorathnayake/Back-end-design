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

    <link rel="stylesheet" href="css/bootstrap.css">

    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

  </head>
  <body>
    <div class="container">
    <?php include('nav_bar.inc.php') ?>
    
                  <div class="row">

                    <div class="col-lg-8 col-md-8">

                      <!-- confirm message here -->

                      <form class="form"
                        action="search_2.php" method="post">
                        <div class="form-group col-8 float-left">
                          <label for="">Search By</label>
                          <select class="form-control" name="searchBy" id="searchBy">
                            <option value="product_name">Product Name</option>
                            <option value="product_code">Product Code</option>
                            <option value="product_size">Product Size</option>
                            <option value="product_description">Product description</option>
                            <option value="product_brand">Product brand</option>
                            <option value="product_price">Product Price</option>
                            <option value="pid">Product ID</option>
                            <option value="all">All</option>
                          </select>

                        </div><!-- end of form group-->

                        <div class="form-group col-8 float-left input-group">
                          <label for="">Keywords</label>
                          <input type="text" id="keywords"
                                name="keywords"
                                class="form-control"
                                value="" required="required" />

                          <span class="form-group input-group-btn">
                            <button class="btn btn-success" type="submit" value="SEARCH" name="button">GO!</button>
                          </span>
                        </div><!-- end of form group-->

                        <!-- <div class="form-group col-4 float-right">
                          <label for="">&nbsp;</label>
                          <input type="submit" class="form-control btn btn-success"
                          name="" value="SEARCH">
                        </div> -->
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
        </div>

  </body>
</html>

<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<script src="assets/js/custom.js"></script>
