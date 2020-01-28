<?php
include 'common.php';
if(!isset($_SESSION['email'])){
    header('index.php');
}
$user_id= $_SESSION['user_id'];
$item_id=$_Get['items.id'];

$query="update users_items set status='Confirmed' where user_id='$user_id' and item_id in('$item_id') and status='Added to cart'";
mysqli_query($con, $query)or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Success | Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>