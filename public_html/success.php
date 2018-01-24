<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css"/>
    </head>
    <body>
        <div class="container">
            <center>
            <h1 style="font-weight: bold">Your order is confirmed.</h1> 
            <h3>Thank you for shopping with us.</h3>
            <a href="products.php" class="text-primary">Click here</a> to purchase any other item.
            </center>
        </div>
            
        
    </body>
</html>
