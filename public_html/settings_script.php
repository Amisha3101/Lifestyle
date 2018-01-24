<?php

require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$op=$_POST['opwd'];
$np=$_POST['npwd'];
$rnp=$_POST['rnpwd'];
if(strlen($np)!= strlen($rnp))
{
    echo 'New passwords should be same';
}
$old="select password from users where password='$op'";
$old_result= mysqli_query($con, $old);
if(mysqli_num_rows($old_result)==0)
{
    header('location:settings.php');
    echo 'Old Password entered wrong';
}
 else 
     {
    $update="update users set password='$np' where password='$op'";
    $update_result= mysqli_query($con, $update);
}
?>
