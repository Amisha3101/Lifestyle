<?php
require 'includes/common.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css"/>
    </head>
    <body>
        
        
         <?php
         include 'includes/header.php';
         include 'includes/check-if-added.php';
         ?>
        
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. 
                    No need to hunt around, we have all in one place.</p>
            </div>
        
        
        
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img/c3.jpeg" alt="Canon">
                <div class="caption">
                    <h4 style="font-weight: bold">Canon EOS</h4>
                    <p>Price: Rs. 36000.00</p>
                    
                    
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p>
                    <?php
                    } else {
       //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                    ?>
                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>    
                    
                    
                    
                </div>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img/c1.jpeg" alt="Sony">
                <div class="caption">
                    <h4 style="font-weight: bold">Nikon DSLR</h4>
                    <p>Price: Rs. 40000</p>
                    
                        <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p>
                    <?php
                    } else {
       //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                    ?>
                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?> 
                    
                </div>
                
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img/c2.jpeg" alt="Sony">
                 <div class="caption">
                     <h4 style="font-weight: bold">Sony DSLR</h4>
                     <p>Price: Rs. 45000.00</p>
                     
                     <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p>
                    <?php
                    } else {
       //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                    ?>
                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?> 
                     
                     
                </div>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img/c4.jpeg" alt="Olympus">
                <div class="caption">
                     <h4 style="font-weight: bold">Olympus DSLR</h4>
                     <p>Price: Rs. 50000.00</p>
                     
                     <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p>
                    <?php
                    } else {
       //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                    ?>
                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?> 
                     
                </div>
            </div>
        </div>
            
            <div class="row text-center">
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img/w1.jpeg" alt="Titan">
                <div class="caption">
                    <h4 style="font-weight: bold">Titan Model #301</h4>
                    <p>Price: Rs. 13000.00</p>
                    
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p>
                    <?php
                    } else {
       //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                    ?>
                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?> 
                    
                </div>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img/w2.jpeg" alt="Titan">
                <div class="caption">
                    <h4 style="font-weight: bold">Titan Model #201</h4>
                    <p>Price: Rs. 3000</p>
                    
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p>
                    <?php
                    } else {
       //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                    ?>
                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?> 
                    
                </div>
                
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img/w3.jpeg" alt="HMT">
                 <div class="caption">
                     <h4 style="font-weight: bold">HMT Milan</h4>
                     <p>Price: Rs. 8000.00</p>
                     
                     <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p>
                    <?php
                    } else {
       //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                    ?>
                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?> 
                     
                </div>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img/w4.jpeg" alt="Faber">
                <div class="caption">
                    <h4 style="font-weight: bold">Faber Luba #111</h4>
                     <p>Price: Rs. 18000.00</p>
                     
                     <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p>
                    <?php
                    } else {
       //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                    ?>
                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?> 
                     
                </div>
            </div>
        </div>
            
            
            
            <div class="row text-center">
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img/s1.jpeg" alt="H&W">
                <div class="caption">
                    <h4 style="font-weight: bold">H&W</h4>
                    <p>Price: Rs. 800.00</p>
                    
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p>
                    <?php
                    } else {
       //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                    ?>
                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?> 
                    
                </div>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img/s2.jpeg" alt="Luis">
                <div class="caption">
                    <h4 style="font-weight: bold">Luis Phil</h4>
                    <p>Price: Rs. 1000</p>
                    
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p>
                    <?php
                    } else {
       //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                    ?>
                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?> 
                    
                </div>
                
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img/s3.jpeg" alt="John Zok">
                 <div class="caption">
                     <h4 style="font-weight: bold">John Zok</h4>
                     <p>Price: Rs. 1500.00</p>
                     
                     <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p>
                    <?php
                    } else {
       //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                    ?>
                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?> 
                     
                </div>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img/s4.jpeg" alt="Jhal">
                <div class="caption">
                    <h4 style="font-weight: bold">Jhalsani</h4>
                     <p>Price: Rs. 1300.00</p>
                     
                     <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p>
                    <?php
                    } else {
       //We have created a function to check whether this particular product is added to cart or not.
                    if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                    ?>
                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?> 
                     
                     
                </div>
            </div>
        </div>
            
            
            <?php
        include 'includes/footer.php';
        ?>
        
            
        </div>
        
        
    </body>
</html>
