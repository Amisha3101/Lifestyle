<?php


function check_if_added_to_cart($item_id)
{
    
    require 'includes/common.php';
    
   $usr_id=$_SESSION['user_id'];
   $status= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$usr_id' and
status='Added to cart'";
   $status_result= mysqli_query($con, $status);
   if (mysqli_num_rows($status_result)>=1) 
       {
       return 1;
   }
 else 
     {
       return 0; 
   }


}
?>

