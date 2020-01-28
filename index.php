<?php
require 'common.php';
if(isset($_SESSION['email'])){
    header('location:product.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome | Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div id="content">
            <div id="banner">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>We Sell Lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands.</p><br>
                            <a href="product.php" type="button" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>

            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-md-4">
                        <a href="product.php#camera">
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="cameras" class="image-responsive">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="product.php#watch">
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="watches" class="image-responsive">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="product.php#shirt">
                            <div class="thumbnail">
                                <img src="img/22.jpg" alt="shirts" class="image-responsive">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    <?php
        include 'footer.php';
    ?>
    </body>
</html>
