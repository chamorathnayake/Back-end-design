<?php
  require('db_connection.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login : New Lankafurniture.com</title>

    <!-- linking Bootstrap libs css and js -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <style media="screen">
      body{


        background-image:url(images/s1.jpg);
        background-attachment: fixed;
        background-position: center;
        font-family: sans-serif;
        color: white;



      }
      .container .row{
        /* visibility: hidden; */
        /* background: none; */

      }
      /* .form{
        /* visibility: hidden; */
        /* background-image:linear-gradient(0deg,black,black,black); */
      }
      .text-login{
        /* visibility: hidden; */

        font-size: 40px;
        border-bottom: 6px solid;
        font-family: sans-serif;
        color: black;
      }

    </style>

  </head>
  <body>

    <div class="container" >


        <div class="row">

          <div class="col-lg-4 col-md-4 offset-lg-4 offset-md-4" style="margin-top:10%;">

            <form class="form bg-light" style="padding:30px;border-radius:15px;" action="login_2.php"  method="post">
              <h4 class="text-center"><h1 class="text-login" style="padding-bottom:5px;">Login</h1><br /></h4>
              <h5 class="text-danger">ACCESS DENIED</h5>
              <div class="form-group">
                <!-- <label for="">Username</label> -->
                <input type="text" placeholder="Username" name="user_id" id="user_id"
                class="form-control" value="" autofocus>
              </div><!-- end of form group-->

              <div class="form-group">
                <!-- <label for="">Password</label> -->
                <input type="password" placeholder="Password" name="access_code" id="access_code"
                class="form-control" value="">
              </div><!-- end of form group-->

              <div class="form-group">

                <input type="submit" class="btn btn-blockbtn btn-block btn-large btn-dark" name="submit" value="Login">
                <input type="reset" class="btn btn-danger btn-large btn-block" name="reset" value="Cancel">
              </div><!-- end of form group-->
            </form><!-- end of form-->


          </div>

        </div><!-- end of row -->








    </div><!-- end of container-->


  </body>
</html>
