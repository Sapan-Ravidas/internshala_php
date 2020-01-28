<?php
require 'common.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Products | Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
    <?php
    include 'header.php';
    include 'check_if_added.php';
    ?>
    
    <div class="container">
        <div class="jumbotron text-center container-fluid" style="padding-top: 8%">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
        <hr>

        <div class="row text-center" id="camera">
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/5.jpg" class="image-responsive" alt="">
                    <div class="caption">
                        <h3>Canon EOS</h3>
                        <p>Rs. 36000.00</p>
                        <?php
                        if(isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-block btn-primary" role="button">Buy Now</p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php   }
                        }
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/3.jpg" class="image-responsive" alt="">
                    <div class="caption">
                        <h3>Nikon DSLR</h3>
                        <p>Rs. 40000.00</p>
                        <?php
                        if(isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-block btn-primary" role="button">Buy Now</p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(2)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php   }
                        }
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/2.jpg" class="image-responsive" alt="">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Rs. 45000.00</p>
                        <?php
                        if(isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-block btn-primary" role="button">Buy Now</p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(3)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php   }
                        }
                        ?>

                    </div>
                </div>
            </div> 
            
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/4.jpg" class="image-responsive" alt="">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Rs. 50000.00</p>
                        <?php
                        if(isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-block btn-primary" role="button">Buy Now</p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(4)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php   }
                        }
                        ?>

                    </div>
                </div>
            </div>
            
        </div>
        <!--end of cameras row
        //start of watches row-->
        <div class="row text-center" id="watch">
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/18.jpg" class="image-responsive" alt="">
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>Rs. 13000.00</p>
                        <?php
                        if(isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-block btn-primary" role="button">Buy Now</p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(5)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php   }
                        }
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/19.jpg" class="image-responsive" alt="">
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Rs. 3000.00</p>
                        <?php
                        if(isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-block btn-primary" role="button">Buy Now</p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(6)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php   }
                        }
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/20.jpg" class="image-responsive" alt="">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Rs. 8000.00</p>
                        <?php
                        if(isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-block btn-primary" role="button">Buy Now</p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(7)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php   }
                        }
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/21.jpg" class="image-responsive" alt="">
                    <div class="caption">
                        <h3>Faber Luba #111</h3>
                        <p>Rs. 18000.00</p>
                        <?php
                        if(isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-block btn-primary" role="button">Buy Now</p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(8)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php   }
                        }
                        ?>

                    </div>
                </div>
            </div>       
        </div> 
        <!--end of watches row
        
        //start of shirt row-->
        <div class="row text-center" id="shirt">
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/13.jpg" class="image-responsive" alt="">
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Rs. 800.00</p>
                        <?php
                        if(isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-block btn-primary" role="button">Buy Now</p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(9)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php   }
                        }
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/23.jpg" class="image-responsive" alt="">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Rs. 1000.00</p>
                        <?php
                        if(isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-block btn-primary" role="button">Buy Now</p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(10)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php   }
                        }
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/24.jpg" class="image-responsive" alt="">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Rs. 1500.00</p>
                        <?php
                        if(isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-block btn-primary" role="button">Buy Now</p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(9)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php   }
                        }
                        ?>

                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/13.jpg" class="image-responsive" alt="">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Rs. 1300.00</p>
                        <?php
                        if(isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-block btn-primary" role="button">Buy Now</p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(12)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php   }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <?php
    include 'footer.php';
    ?>
</html>