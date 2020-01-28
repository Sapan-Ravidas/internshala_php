<?php
require 'common.php';
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $item_id=$_GET['id'];
    $user_id= $_GET['user_id'];

    $query="delete from users_items where item_id='$item_id', and user_id='$user_id'";
    $result=mysqli_query($con, $query) or die(mysqli_error($con));
    header('loaction: cart.php');
}
?>