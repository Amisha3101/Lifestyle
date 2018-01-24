<?php
require 'includes/common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
  $add="INSERT INTO users_items(user_id, item_id, status) 
    VALUES('$user_id', '$item_id', 'Added to cart')";
  $add_result= mysqli_query($con, $add);
  header('location:products.php');

?>

