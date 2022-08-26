<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Projectworlds Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell .</h1>
                       <p>Flat 40% OFF on all premium quality.</p>
                       <!-- <a href="products.php" class="btn btn-danger">Shop Now</a> -->
                   </div>
                   </center>
               </div>
           </div>
        <div class="contanier">
            <img src="img/pexels-alex-leonardo-10170363.jpg" alt="iphone images" width="300px" height="300px">
            <img src="img/pexels-jess-bailey-designs-788946.jpg" alt="macbookpro" width="300px" height="300px">
        </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="">Projectworlds</a> Store. All Rights Reserved.</p>
                   <p></p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>