<?php
    require 'common.php';
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $item_id=$_GET['id'];
        $user_id= $_SESSION['user_id'];
        $query=" insert into users_items(user_id, item_id, status)values('$user_id', '$item_id','Added to cart')";
        mysqli_query($con, $query)or die(mysqli_error($con));
        header('location:product.php');
    }
    ?>