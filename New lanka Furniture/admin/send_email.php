<?php

    if(isset($_REQUEST['submit'])){
      //sending mail can be done here

      $name = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $message = $_REQUEST['message'];

      $x = mail("nuzrath.idm@gmail.com","HND4143 Email Test",$message);
      if($x>0){
        $status = "pass";
      }
      else{
        $status = "fail";
      }
    }
    else{
      //sending mail cannot happen
    }


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
          <div class="col-lg-12 col-md-12"
           style="height:300px;background-image:url(images/banner.jpg);">
            <h1 class="text-light text-center">Welcome to Kadella</h1>
          </div>
        </div><!-- end of row -->


        <div class="row">
          <div class="col-lg-4 offset-lg-4" style="margin-top:40px;">

            <?php
              if(isset($_REQUEST['submit'])){
                echo "Status : " . $status;
              }
             ?>

            <h3>SEND YOUR COMMENTS</h3>
            <form class="form"
              action="send_email.php" method="post">
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Message</label>
                <textarea name="message"  class="form-control" rows="8" cols="80"></textarea>
              </div>
              <div class="form-group">
                <label for=""></label>
                <input type="submit" class="btn btn-success btn-lg" name="submit" value="Ok">
                <input type="reset" class="btn btn-danger btn-lg" name="" value="Cancel">
              </div>
            </form>
          </div>
        </div><!-- end of row-->


      <?php
        include("footer.inc.php");
       ?>


    </div><!-- end of container-->


  </body>
</html>
