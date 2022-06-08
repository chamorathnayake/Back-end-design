<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      *{
        font-family: sans-serif;
      }
    </style>
  </head>
  <body>
    <h1 style="color:blue;">Upload Test with PHP - step 2</h1>
    <hr>

    <?php
      //lets see whats in side the $_REQUEST array
      echo "<pre>";
      print_r($_REQUEST);

      print_r($_FILES);

      echo "<hr />";

      if($_FILES['picture']['error']==0){
        if($_FILES['picture']['type']=='image/jpeg'){
            //echo "JPG file uploaded as well";

            $filename    = $_FILES['picture']['tmp_name'];
            //$destination = "pics/large/".$_FILES['picture']['name'];

            $destination = rand().rand().rand().".jpg";

            $x = move_uploaded_file($filename,"pics/large/".$destination);

            if($x>0){
              echo "file uploaded successfully";
            }
            else{
              echo "upload failed ";
            }



        }
        else{
            echo "un supported file format";
        }
        //echo "upload was success";
      }
      else{
        //upload failed
        echo "uploading failed";
      }



     ?>


  </body>
</html>
