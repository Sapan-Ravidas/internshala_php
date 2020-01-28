<?php
require 'common.php';
if(isset($_SESSION['email'])){
    header('location: product.php');
}?>
<!DOCTYPE html>
<html lang="en">
    <header>
        <title>Login | Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </header>

    <body>
        <?php
        require 'header.php';
        ?>

        <div id="content">
            <div class="container">
                <div class="row" style="padding-top: 10%">
                    <div class="col-md-4">
                        <!--start of panel-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>Login</h3>
                            </div>
                            <div class="panel-body">
                                    <p class="text-warning"><em>Login to make purchase.</em></p>
                                    <br>
                                    <form role="form" action="login_script.php" method="POST">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email" name="email" class="form-control input-lg" required="true">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" placeholder="Password" name="password" class="form-control input-lg" required="true">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button><br><br>
                                        </div>
                                        <?php
                                        echo $_GET['error'];
                                        ?>
                                        <br>
                                    </form>
                            </div>
                            <!--end of panel body-->
                            <div class="panel-footer">
                                <p class="text-warning"><em>Don't have an account?<a href="signup.php">Sign Up</a></em></p>
                            </div>
                        </div>
                    </div>

                    <!--end of login coloumn-->
                    <div class="col-lg-offset-2 col-lg-6">
                        <img class="img-responsive img-rounded" src="img/001.jpg">
                    </div>
                </div>
                <!--end of row class-->
            </div>
        </div>
    </body>
    <?php
    include 'footer.php';
    ?>
</html>