<?php
require 'includes/common.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
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
            <div class="panel-primary">
    <div class="panel-heading">
        <h2 style="font-weight: bold">Login</h2>
    </div>
    <div class="panel-body">
        <p class="text-warning">Login to make a purchase</p>
        <form method="POST" action="login_submit.php">
            <div class="form-group">
                <label for="email">Email:</label>
            <input class="form-control" type="text" name="email" >
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input class="form-control" type="text" name="pwd" >
            </div>
            <button class="btn btn-primary">Login</button>
            </br>
            <?php 
                    $msg=$_GET['error'];
                    echo "$msg";
            ?>
        </form>
    </div>
    <div class="panel-footer">
        <p>Don't have an account? Register</p>
    </div>
</div>
</div>
                </div>
                
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
</html>
