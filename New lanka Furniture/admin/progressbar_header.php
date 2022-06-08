
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>bootstrap-progressbar</title>

    <script type='text/javascript' src="js/jquery.js"></script>


    <script type="text/javascript" src="js/bootstrap-progressbar.js"></script>

    <link rel="stylesheet" type="text/css" href="css/bootstrap-pro.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-progressbar.css">

 <style type="text/css">
        .progress .bar.six-sec-ease-in-out {
            -webkit-transition: width 6s ease-in-out;
            -moz-transition: width 6s ease-in-out;
            -ms-transition: width 6s ease-in-out;
            -o-transition: width 6s ease-in-out;
            transition: width 6s ease-in-out;
        }
        .progress.vertical .bar.six-sec-ease-in-out {
            -webkit-transition: height 6s ease-in-out;
            -moz-transition: height 6s ease-in-out;
            -ms-transition: height 6s ease-in-out;
            -o-transition: height 6s ease-in-out;
            transition: height 6s ease-in-out;
        }
        .progress.wide {
            width: 60px;
        }
        .vertical-progressbar-span {
            height: 100px;
        }

        body{

          background-attachment: fixed;
          /* background: url() */
          /* background-image:linear-gradient(180deg,lightblue,blue,white); */
          background-image:linear-gradient(360deg,black,black,grey);
          background-size: cover;
          font-family: sans-serif;
          color: white;



        }

    </style>

    <script>
        $(document).ready(function() {


                $('.progress .bar.text-filled-1').progressbar({
                    display_text: 1,
					         refresh_speed: 200,
                   transition_delay: 500,

            });

            });

    </script>
</head>

<?php require('db_connection.php'); ?>
