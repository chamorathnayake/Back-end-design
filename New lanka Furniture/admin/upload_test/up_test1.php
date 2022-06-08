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
    <h1>Upload Test with PHP - step 1</h1>
    <hr>
    <form class=""
     action="up_test2.php" method="post"
     enctype="multipart/form-data"
     >
     <label for="">Title</label>
     <input type="text" name="title" value="">
     <br>
     <br>
     <label for="">Picture</label>
     <input type="file" name="picture"
      accept="image/jpeg" value="">

     <br />
     <br />

     <input type="submit" name="" value="Upload Now">

    </form>
  </body>
</html>
