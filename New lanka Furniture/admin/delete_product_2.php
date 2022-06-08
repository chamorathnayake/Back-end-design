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
    <title></title>

    <!-- linking Bootstrap libs css and js -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

  </head>
  <body>

    <?php include('nav_bar.inc.php') ?>
      
              <div class="row">

                <div class="col-lg-8 col-md-8">

                  <?php
                    $pid = $_REQUEST['pid'];
                    //build the sql command using the PID
                    $sql = "select * from tbl_product where pid=$pid";

                    //execute the sql command
                    $rs = $mysqli->query($sql);
                    /*echo "<pre>";
                    var_dump($rs);
                    die();
                    */

                    //find the number of records available in the $rs (resource)
                    //echo mysqli_num_rows($rs);
                    //die();



                    if(mysqli_num_rows($rs)>0){
                      //read a record in the $rs object
                      //$row = mysqli_fetch_array($rs);
                      $row = mysqli_fetch_assoc($rs);
                      //echo "<pre>";
                      //print_r($row);
                      //die();

                   ?>

                  <!--  html form for product to be added-->
                  <form class="form"
                    action="delete_product_3.php"
                    method="post"
                    onsubmit="return validate();"
                    >
                     <div class="form-group">
                       <h3 class="text-danger">Delete product Information</h3>
                     </div>
                      <input type="hidden" name="pid" value="<?php echo $row['pid'];?>">

                      <div class="form-group">
                        <label for="">Sub Category</label>
                        <input type="text"
                        name="sid"
                        id="sid"   class="form-control"
                        value="<?php echo $row['sid']; ?>">
                      </div>

                      <div class="form-group">
                          <label for="">Product Name</label>
                          <input type="text" name="product_name"
                          id="product_name"   class="form-control" value="<?php echo $row['product_name'];?>">
                        </div>

                        <div class="form-group">
                          <label for="">Product Code</label>
                          <input type="text" name="product_code"
                           id="product_code" class="form-control" value="<?php echo $row['product_code'];?>">
                        </div>

                        <div class="form-group">
                          <label for="">Product Size</label>
                          <input type="text" name="product_size"
                           class="form-control" value="<?php echo $row['product_size'];?>">
                        </div>

                        <div class="form-group">
                          <label for="">Product description</label>
                          <textarea name="product_description" class="form-control"
                           rows="4" cols="80"><?php echo $row['product_description'];?></textarea>
                        </div>

                        <div class="form-group">
                          <label for="">Product brand</label>
                          <input type="text" name="product_brand"
                           class="form-control" value="<?php echo $row['product_brand'];?>">
                        </div>

                        <div class="form-group col-4">
                          <label for="">Product Price</label>
                          <input type="number" name="product_price" min="0"
                           class="form-control" value="<?php echo $row['product_price'];?>">
                        </div>

                      <div class="form-group ">
                        <label for="">Picture</label>
                        <input type="file" name="picture"
                         class="form-control" value="">
                      </div>

                      <div class="form-group ">
                        <label for="">Picture</label>
                        <img src="../product/thumbs/<?php echo $row['picture'];?>"
                        class="col-lg-4 col-md-4" alt="">
                      </div>

                      <div class="form-group ">
                        <label for="">Exiting Picture</label>
                        <img src="../products/thumbs/<?php echo $row['picture'];?>" alt="">
                      </div>

                      <div class="form-group">

                        <input type="submit" name="submit"
                         class="btn btn-lg btn-danger" value="Confirm Delete">

                         <input type="reset" name="reset"
                          class="btn btn-lg btn-warning" value="Cancel">
                      </div>
                  </form>
                  <?php
                      }//end of ifpart
                      else{
                          ?>
                          <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">RECORD NOT FOUND</h4>
                            <p>Sorry No Records were found for the PID <?php echo $pid;?></p>
                            <hr>
                            <a href="delete_product_1.php" class="btn btn-danger btn-lg">Try Again</a>
                            <a href="cpanel.php" class="btn btn-info btn-lg">Back to CPanel</a>
                          </div>
                          <?php
                      }
                   ?>
                  <!--  end of form-->
                  <!-- validating the form with JS -->
                  <script type="text/javascript">
                    function validate(){
                      var flag = false;
                      if(document.getElementById("title").value==""){
                        alert('Please fill title field');
                      }//other validations you are welcome to do
                      //no validations no higher grades.! :(
                      //and hey pls add comments as well
                      else{
                        flag = true;
                      }
                      return flag;
                    }
                  </script>


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
