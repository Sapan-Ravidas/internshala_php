<?php
require 'common.php';

$email= $_POST['email'];
$email= mysqli_real_escape_string($con, $email);
$password= $_POST['password'];
$password= mysqli_real_escape_string($con, $password);
$password= MD5($password);

$query="select id, email from users where email='$email' and password='$password'";
$result=mysqli_query($con, $query)or die(mysqli_error($con));

$num= mysqli_num_rows($result);

if($num==0){
    $error= "<span class='red'>Incorrect e-mail or password</span>";
    header('location:login.php?error='.$error);
}
else{
    $row=mysqli_fetch_array($result);
    $_SESSION['email']=$row['email'];
    $_SESSION['user_id']= $row['id'];
    header('location:product.php');
}


