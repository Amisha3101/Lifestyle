<?php
require 'includes/common.php';
$email=$_POST['email'];
$email_pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$";
if (!preg_match($email_pattern, $email)) {
    echo 'Incorrect Email';
}
$pwd=$_POST['pwd'];
if (strlen($pwd)<6) {
    echo 'Password should have atleast 6 characters';
}
$email= mysqli_real_escape_string($con,$email);
$pwd= mysqli_real_escape_string($con,$pwd);
$name=$_POST['name'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['addr'];

$select_q="select id from users where email='$email'";
$sel_qres= mysqli_query($con, $select_q);
if(mysqli_num_rows($sel_qres)>0)
{
    echo 'Email id already exists';
}
 else 
     {
      $insert_query="INSERT INTO `users`(`name`, `email`, `password`, `contact`, `city`, `address`) 
                      VALUES('$name','$email','$pwd','$contact','$city','$address')";
      $insert_qresult= mysqli_query($con, $insert_query);
      $_SESSION['email']=$email;
      $_SESSION['id']= mysqli_insert_id($con);
     }
     
     if (isset($_SESSION['email'])) 
         {
          header('location: products.php');
          }

?>

