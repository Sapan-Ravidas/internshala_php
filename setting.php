<?php
require 'common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Settings | Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3>Chaneg Password</h3>
                        </div>
                        <div class="panel-body">
                            <form action="setting_script.php" method="POST">
                                <div class="form-group">
                                    <input type="password" placeholder="Old Password" class="form-control input-lg" name="old_password" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="New Password" class="form-control input-lg" name="password" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Re-enter new password" class="form-control input-lg" name="re_password" required="true">
                                </div>  
                                <div class="form-group">
                                    <button type="submit" class="btn bnt-primary btn-block">Change Password</button>
                                </div>                              
                            </form>
                        </div>
                        <div class="panel-footer">
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>