<?php 
require 'common.php';
if(!isset($_SESSION['email'])){
    header('location.php');
}

$old_password=$_POST['old_password'];
$old_password= mysqli_real_escape_string($con, $old_password);
$old_password= MD5($old_password);

$new_password= $_POST['password'];
$new_password= mysqli_real_escape_string($con, $new_password);
$new_password= md5($new_password);

$re_password= $_POST['re_password'];
$re_password= mysqli_real_escape_string($con, $re_password);
$re_password= md5($re_password);

$query="select email, password from users where email='".$_SESSION['email']."'";
$result= mysqli_query($con, $query)or die(mysqli_error($con));
$row= mysqli_fetch_array($result);
$org_password= $result['password'];

if($new_password!=$re_password){
    header('location: setting.php?error= Passwords not matched');
}
else{
    if($old_password==$org_password){
        $query="update users set password='$new_password' where email='".$_SESSION['email']."'";
        mysqli_query($con, $query) or die(mysqli_error($con));
        header('location:setting.php?error=Password Updated');
    }
    else{
        header('loaction:setting.php?error=Wrong Old Password');
    }
}
?>