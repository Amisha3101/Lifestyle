<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
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
        ?>
        
        
        
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1 style="font-weight: bold">Change Password</h1>
                    <form method="POST" action="settings_script.php">
                <div class="form-group">
                    <input class="form-control" type="text" name="opwd" placeholder="Old Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="npwd" placeholder="New Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="rnpwd" placeholder="Re-type New Password">
                </div>
                <button class="btn btn-primary">Change</button>
            </form>
                </div>
            </div>
        </div>
        
        
        
        
        
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
</html>
