<?php
  require("validate_user.inc.php");
  require('db_connection.php');


   if(! count($_REQUEST)>0){
     $offset="0";
    }
    else{
     if ($_REQUEST["offset"]=="" ){
       $offset="0";
     }
     else
       $offset = $_REQUEST["offset"];
    }

   $display_length = 3;

   function show_pages($offset, $display_length)
   {
       global $mysqli;
       global $_REQUEST;

          //run a query to see how many records there are total.
         $rs            = '';
         $total_records = 0;
         $pages         = 0;
         $base_offset   = 0;

         $searchBy = $_REQUEST['searchBy'];
         $keywords = $_REQUEST['keywords'];

         //***
         $sql = "select count(*) from tbl_product where ";

         switch($searchBy){
           case 'product_name':
             $sql .= " product_name='$keywords' or product_name like '%$keywords%'";
           break;

           case 'product_code':
             $sql .= " product_code='$keywords' or product_code like '%$keywords%'";
           break;

           case 'product_size':
             $sql .= " product_size='$keywords' or product_size like '%$keywords%'";
           break;

           case 'product_description':
             $sql .= " product_description='$keywords' or product_description like '%$keywords%'";
           break;

           case 'product_brand':
             $sql .= " product_brand='$keywords' or product_brand like '%$keywords%'";
           break;

           case 'product_price':
             $sql .= " product_price<=$keywords";
           break;

           case 'pid':
             $sql .= " pid=$keywords";
           break;

           case 'all':
             $sql = "select count(*) from tbl_product";
           break;
         }
         //***


         //$sql = "select count(*) from vehicle ";

         $rs  = $mysqli->query($sql);

         if (mysqli_num_rows($rs))
         {
           $row = mysqli_fetch_array($rs);

           $total_records = $row[0];

            //calc the number of links to show
            //(ceil rounds up to next int)
           $pages = ceil($total_records/$display_length);


       if($pages>10){
         //print the next previous + and last and
       }else{

       }


           for ($x = 1 ; $x <= $pages; $x++){

             //don't show current page as link
             if ($base_offset == $offset){

               echo "<span class='btn btn-default'>$x</span>  ";
             }else{

               echo "<span class='btn'><a href=\"".$_SERVER['PHP_SELF']."?offset=$base_offset&searchBy=$searchBy&keywords=$keywords\" target='_parent' class='btn btn-primary'>$x</a></span>  ";
         //echo "<span class='page '><a href=\"".$_SERVER['PHP_SELF']."?offset=$base_offset\" target='_parent' class='btn btn-info'>$x</a></span>  ";


             }//end if
             $base_offset += $display_length;
           }//next end of for loop


         }else{

            echo "No other images found";

         }
   }//end of function code
   //pagination function ends   here


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>

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
                        action="search_2.php?offset=0" method="post">
                        <div class="form-group col-8 float-left">
                          <label for="">Search By</label>
                          <select class="form-control" name="searchBy" id="searchBy">
                            <option value="product_name"         <?php echo ($_REQUEST['searchBy']=='product_name')?'selected':''; ?>>Product Name</option>
                            <option value="product_code"         <?php echo ($_REQUEST['searchBy']=='product_code')?'selected':''; ?>>Product Code</option>
                            <option value="product_size"         <?php echo ($_REQUEST['searchBy']=='product_size')?'selected':''; ?>>Product Size</option>
                            <option value="product_description"  <?php echo ($_REQUEST['searchBy']=='product_description')?'selected':''; ?>>Product description</option>
                            <option value="product_brand"        <?php echo ($_REQUEST['searchBy']=='product_brand')?'selected':''; ?>>Product brand</option>
                            <option value="product_price"        <?php echo ($_REQUEST['searchBy']=='product_price')?'selected':''; ?>>Product Price</option>
                            <option value="pid"                  <?php echo ($_REQUEST['searchBy']=='pid')?'selected':''; ?>>Product ID</option>
                            <option value="all"                  <?php echo ($_REQUEST['searchBy']=='all')?'selected':''; ?>>All</option>
                          </select>

                        </div><!-- end of form group-->

                        <div class="form-group col-8 float-left input-group">
                          <label for="">Keywords</label>
                          <input type="text" id="keywords"
                                name="keywords"
                                class="form-control"
                                value="<?php echo $_REQUEST['keywords']; ?>" required="required">

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
                      <hr />

                    </div><!--end of div col 8-->

                  </div><!--end of row -->

                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <?php
                        $searchBy = $_REQUEST['searchBy'];
                        $keywords = $_REQUEST['keywords'];

                        // echo $searchBy ;
                        // echo "<br />";
                        // echo $keywords;

                        $sql = "";

                        switch($searchBy){
                          case 'product_name':
                            $sql = "select * from tbl_product where product_name='$keywords' or product_name like '%$keywords%' limit $offset,$display_length ";
                          break;

                          case 'product_code':
                            $sql = "select * from tbl_product where product_code='$keywords' or product_code like '%$keywords%' limit $offset,$display_length ";
                          break;

                          case 'product_size':
                            $sql = "select * from tbl_product where product_size='$keywords' or product_size like '%$keywords%' limit $offset,$display_length ";
                          break;

                          case 'product_description':
                            $sql = "select * from tbl_product where product_description='$keywords' or product_description like '%$keywords%' limit $offset,$display_length ";
                          break;

                          case 'product_brand':
                            $sql = "select * from tbl_product where product_brand='$keywords' or product_brand like '%$keywords%' limit $offset,$display_length ";
                          break;

                          case 'product_price':
                            $sql = "select * from tbl_product where product_price<=$keywords limit $offset,$display_length ";
                          break;

                          case 'pid':
                            $sql = "select * from tbl_product where pid=$keywords limit $offset,$display_length ";
                          break;

                          case 'all':
                            $sql = "select * from tbl_product  limit $offset,$display_length ";
                          break;
                        }

                        //echo $sql;

                        $rs = $mysqli->query($sql);

                        if(mysqli_num_rows($rs)>0){
                          ?>

                          <div class="">
                              <?php
                                //paging function called here
                                show_pages($offset,$display_length);
                               ?>
                          </div>

                          <table class="table table-bordered text-center ">
                            <tr class="">
                              <th>PID</th>
                              <th>Product Name</th>
                              <th>Product Code</th>
                              <th>Product Size</th>
                              <th>Product Description</th>
                              <th>Product Brand</th>
                              <th>Product Price</th>
                              <th>Picture</th>
                              <th>Actions</th>
                            </tr>
                            <?php
                              //there may be more than 1 record so lets use a loop
                              while($row=mysqli_fetch_assoc($rs)){
                                ?>
                                <tr>
                                  <td><?php echo $row['pid'];?></td>
                                  <td><?php echo $row['product_name'];?></td>
                                  <td><?php echo $row['product_code'];?></td>
                                  <td><?php echo $row['product_size'];?></td>
                                  <td><?php echo $row['product_description'];?></td>
                                  <td><?php echo $row['product_brand'];?></td>
                                  <td><?php echo $row['product_price'];?></td>
                                  <td><img src="../product/thumbs/<?php echo $row['picture'];?>" class="col-lg-8 col-md-8" alt=""></td>
                                  <td>
                                    <a href="edit_product_2.php?pid=<?php echo $row['pid'];?>" class="btn btn-info btn-sm">EDIT</a>
                                    <?php
                                      if($_SESSION['user_grp']=='admin'){
                                    ?>
                                        <a href="delete_product_2.php?pid=<?php echo $row['pid'];?>" class="btn btn-danger btn-sm">DELETE</a>
                                    <?php
                                      }
                                     ?>
                                  </td>
                                </tr>
                                <?php
                              }

                             ?>
                          </table>
                          <?php
                        }
                        else{
                          ?>
                          <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">RECORD NOT FOUND</h4>
                            <p>Sorry No Records were found </p>
                            <hr>
                            <a href="cpanel.php" class="btn btn-info btn-lg">Back to CPanel</a>
                          </div>
                          <?php
                        }

                       ?>
                    </div>
                  </div>
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
