<?php 
require 'common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cart | Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php require 'header.php'; ?>
        
        <div class="container">
            <div class="decor_bg row">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <?php
                        $sum=0;
                        $user_id= $_SESSION['user_id'];
                        $query= "select items.price as Price, item.id, item.name as Name from users_items join items on users_items.item_id= items.id where users_items.user_id='$user_id' and status='Added to cart'";
                        $result= mysqli_query($con, $query)or die(mysqli_error($con));
                        if(mysqli_num_rows($result)>=1){
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while($row=mysqli_fetch_array($result)){
                                    $sum+= $row['price'];
                                    $id.=$row['id'].", ";
                                    echo "<tr></td>". "#".$row['id']. "</td><td>". $row['Name']. "</td><td>Rs. ". $row['price']. "</td><td><a href='cart_remove.php?id={$row['id']}' class='remove-item-link'>Remove</a></td></tr>";
                                }
                                $id= rtrim($id,", ");
                                echo "<tr><td></td><td>Total</td><Rs. ".$sum. "</td><td><a href='success.php>items.id=".$id."'class='btn btn-primary btn-block'>Confirm</a></td></tr>";
                                ?>
                            </tbody>
                        <?php
                        }else{
                            echo "Add item to the cart first!";
                        }?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include 'footer.php';
    ?>
    </body>
    
</html>