<?php
require 'common.php';
if(isset($_SESSION['email'])){
    header('location:product.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up | Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php require 'header.php';?>

        <div class="container" id="content">
            <div class="row" style="padding-top: 10%">
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Sign Up</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="signup_script.php" method="POST">
                                <div class="form-group">
                                    <input type="text" placeholder="Name" name="name" required="true" class="form-control input-lg">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="E-mail" required="true" class="form-control input-lg">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" required="true" class="form-control input-lg">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="contact" placeholder="Contact" required="true" class="form-control input-lg">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="city" placeholder="City" required="true" class="input-lg form-control">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="address" placeholder="Address" required="true" class="input-lg form-control">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!--end of panel body-->
                    </div>
                </div>
                <!--end of coloumn-->
            </div>
            <!--end of row-->
        </div>
        
        <?php
        include 'footer.php';
        ?>
    </body>
</html>