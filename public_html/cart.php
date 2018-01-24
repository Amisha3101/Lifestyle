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
        
        
        
        
        
        
        <div class="container" style="margin-top: 100px;">
            <?php
        include 'includes/header.php';
        ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
            
            <table class="table table-bordered table-responsive" style="margin-top: 100px;">
                <?php
                $sum=0;
                $user_id=$_SESSION['user_id'];
$query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON "
  . "users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                
                <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["Price"];
                    $id .= $row["id"] . ", ";
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . 
                    "</td><td>Rs " . $row["Price"] . "</td>"
   . "<td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                    }
                    $id = rtrim($id, ", ");
                    echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td>"
 . "<td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                  ?>
                            </tbody>
                            <?php
                            } else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                
        </table>
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
        
        
    </body>
</html>
