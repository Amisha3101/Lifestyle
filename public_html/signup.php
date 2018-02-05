<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        
        <div class="container">
            <div class="row row_style">
                
        <div class="col-xs-4 col-xs-offset-4">
          <h1 class="text-uppercase" style="font-weight: bold">Sign Up</h1>
          <form method="POST" action="signup_script.php">
             <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email"
                       required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pwd" placeholder="Password"
                       required="true" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="contact" placeholder="Contact">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="city" placeholder="City">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="addr" placeholder="Address">
            </div>
            <button class="btn btn-primary">Submit</button>
            
        </form>
                    </div>
                </div>
        </div>
        
        <div class="container" style="margin-top: 155px;">
            
        </div>
        <?php
        include 'includes/footer.php';
        
        ?>
        
        
        
        
        
    </body>
</html>
