<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/cart.png" />
        <title>GentsCoders Store</title>
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
                       <p>Flat 40% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="NewBala.php">
                                <img src="img/NewBal/Logo.png" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">New Balance</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="Nikes.php">
                               <img src="img/Nike/Logo.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Nike</p>
                                    <p>Original watches from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="Rebooks.php">
                                <img src="img/Rebook/Logo.jpg" alt="Camera">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Rebook</p>
                                   <p>Our exquisite collection of shirts.</p>
                               </div>
                           </center>
                       </div>
                   </div>

                    <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="Adidas.php">
                               <img src="img/Adidas/Logo.png" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Adidas</p>
                                   <p>Our exquisite collection of shirts.</p>
                               </div>
                           </center>
                       </div>
                   </div>


                    <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="Gucc.php">
                               <img src="img/Gucci/Logo.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Gucci</p>
                                   <p>Our exquisite collection of shirts.</p>
                               </div>
                           </center>
                       </div>
                   </div>


                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="G-Star.php">
                               <img src="img/Raw/Logo.png" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Raw</p>
                                   <p>Our exquisite collection of shirts.</p>
                               </div>
                           </center>
                       </div>
                   </div>

               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="http://localhost/test1/index.php">Gents Coders</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by Gents Coders</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>