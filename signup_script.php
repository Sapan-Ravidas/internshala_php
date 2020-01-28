<?php
require 'common.php';
 $name= $_POST['name'];
 $name=mysqli_real_escape_string($con, $name);

 $email= $_POST['email'];
 $email=mysqli_real_escape_string($con, $email);

 $password= $_POST['password'];
 $password=mysqli_real_escape_string($con, $password);
 $password=MD5($password);

$contact= $_POST['contact'];
$contact=mysqli_real_escape_string($con, $contact);

$city= $_POST['city'];
$city=mysqli_real_escape_string($con, $city);

$address= $_POST['address'];
$address=mysqli_real_escape_string($con, $address);

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[6789][0-9]{9}$/";

$query="select * from users where email='$email'";
$result= mysqli_query($con, $query)or die(mysqli_error($con));
$num= mysqli_num_rows($result);

if($num!=0){
    $m="<span class='red'>E-mail already exist</span>";
    header('location: signup.php?m1='.$m);
}
else if(!preg_match($regex_email, $email)){
    $m="<span class='red'>Not a valid E-mail. Enter correct email</span>";
    header('loaction: signup.php?m1='.$m);
}
else if(!preg_match($regex_num, $contact)){
    $m="<span class='red'>Not a valid phone number. Enter correct contact number</span>";
    header('loaction: signup.php?m2='.$m);
}
else{
    $query="insert into users (name, email, password, contact, city, address)values('$name','$email', '$password', '$contact', '$city', '$address')";
    mysqli_query($con, $query)or die(mysqli_error($con));
    $user_id=mysqli_insert_id($con);
    $_SESSION['email']= $email;
    $_SESSION['user_id']=$user_id;
    header('loaction:product.php');
}

?>




