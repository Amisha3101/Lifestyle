<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css"/>
        
    </head>
    <body>
        
        
        <?php
        
        include 'includes/header.php';
        ?>
        
        
        
            <div id="banner-image">
                <div class="container">
                    <div id="banner_content">
                        <h1>We sell lifestyle</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </div>
            </div>
        
        
        
        <div class="container">
            
            <div class="items">
                <a href="products.php" >
                  <img src="img/camera.jpg" alt="" class="thumbnail">
                  <div class="caption">
                      <h2>Cameras</h2>
                      <p>Choose among the best available in the world.</p>
                  </div>
                </a>
            </div>
            <div class="items">
                <a href="products.php"> 
                    <img src="img/watch.jpg" alt="" class="thumbnail"/>
                    <div class="caption">
                        <h2>Watches</h2>
                        <p>Original watches from the best brands.</p>
                    </div>
                </a>
            </div>
            
            <div class="items">
                <a href="products.php">
                  <img src="img/shirt.jpg" alt=""  class="thumbnail">
                  <div class="caption">
                      <h2>Shirts</h2>
                      <p>Our exquisite collection of shirts.</p>
                  </div>
                </a>
            </div>
        </div>
        
        
        <?php
        include 'includes/footer.php';
        ?>
        
        
        
    </body>
</html>
