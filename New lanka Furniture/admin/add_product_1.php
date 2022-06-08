
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
                <div class="row">

                 <div class="col-lg-8 col-md-8">
                   <!--  html form for product to be added-->
                    <form class="form"
                      action="add_product_2.php"
                      method="post"
                      onsubmit="return validate();"
                      enctype="multipart/form-data"
                      >
                       <div class="form-group">
                         <h3>Add New product</h3>
                       </div>

                       <div class="form-group">

                         <?php
                              include('db_connection.php');
                              //$query = $mysqli->query("SELECT * FROM tbl_maincategory WHERE status=1 ORDER BY main_category ASC");
                              $query = $mysqli->query("SELECT * FROM tbl_maincategory ORDER BY main_category ASC");
                              $rowCount = $query->num_rows;
                         ?>
                         <label for="">Maincategory</label>
                         <select class="form-control " name="maincategory_nm" id="maincategory_id" >
                           <option value="">Select Maincategory</option>
                           <?php
                              if($rowCount > 0){
                                  while($row = $query->fetch_assoc()){
                                    $m_id = $row['mid'];
                                    $m_name = $row['main_category'];
                                    echo '<option value="'.$m_id.'">'.$m_name.'</option>';
                                    // echo '<option value="'.$row['mid'].'">'.$row['main_category'].'</option>';
                                  }
                              }else {
                                echo '<option value="">Category not available</option>';
                              }
                            ?>
                         </select>
                         <br />
                         <div class="form-group">
                           <label for="">Subcategory</label>
                           <select class="form-control" name="sid" id="subcategory_id">
                             <option value="" id="">Select Maincategory first</option>
                           </select>
                         </div>
                       </div><!-- end of form group-->

                        <div class="form-group">
                          <label for="">Product Name</label>
                          <input type="text" name="product_name"
                          id="product_name"   class="form-control" value="">
                        </div>

                        <div class="form-group">
                          <label for="">Product Code</label>
                          <input type="text" name="product_code"
                           id="product_code" class="form-control" value="">
                        </div>

                        <div class="form-group">
                          <label for="">Product description</label>
                          <textarea name="product_description" class="form-control"
                           rows="4" cols="80"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="">Product brand</label>
                          <input type="text" name="product_brand"
                           class="form-control" value="">
                        </div>

                        <div class="form-group col-4">
                          <label for="">Product Price</label>
                          <input type="number" name="product_price" min="0"
                           id="product_price"class="form-control" value="">
                        </div>

                        <div class="form-group ">
                          <label for="">Picture</label>
                          <input type="file" name="picture"
                           id="picture"class="form-control"

                           accept="image/jpeg"
                           >
                        </div>

                        <div class="form-group">

                          <input type="submit" name="submit"
                           class="btn btn-lg btn-success" value="Add Now">

                           <input type="reset" name="reset"
                            class="btn btn-lg btn-warning" value="Cancel">
                        </div>
                    </form>
                    <!--  end of form-->
                 </div><!--end of div col 8-->

                </div><!--end of row -->

            </div>

        </div>
        <?php
          include("footer.inc.php");
         ?>
             <!-- /. PAGE INNER  -->
      </div>
    </div>

</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    // $('#maincategory').on('change',function(){.
    $('#maincategory_id').on('change',function(){
      var maincategoryID = $(this).val();
      if(maincategoryID) {
          $.ajax({
              type:'POST',
              url:'ajaxData.php',
              data:'mid='+maincategoryID,
              success:function(html){
                $('#subcategory_id').html(html);
              }
          });
      }else {
        $('#subcategory_id').html('<option value="">Select Maincategory first</option>');
      }
    });
  });
</script>

<script type="text/javascript">
  function validate(){
    var flag = false;
    if(document.getElementById("maincategory_id").value==""){
      alert('Please Select Maincategory field');
    }
    else if(document.getElementById("subcategory_id").value==""){
      alert('Please Select Subcategory field');
    }
    else if(document.getElementById("product_name").value==""){
      alert('Please fill Product Name field');
    }
    else if(document.getElementById("product_code").value==""){
      alert('Please fill Product Code field');
    }
    else if(document.getElementById("product_price").value==""){
      alert('Please fill Product Price field');
    }
    else if(document.getElementById("picture").value==""){
      alert('Please choose Product Picture field');
    }

    //other validations you are welcome to do
    //no validations no higher grades.! :(
    //and hey pls add comments as well
    else{
      flag = true;
    }
    return flag;
    }
</script>


<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->

<!-- script -->
