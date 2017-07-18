<?php
  require('functions.php');
?>
<!DOCTYPE php>
<php lang="en" class="no-js">
    <head>
        <title>Welcome to Moldur Express</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSynGTe5RpwVIy0z0d3kb_M3_U-Q-jC74"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/mediaqueries.css">
        <link rel="stylesheet" href="style/animate.css">
        <link rel="stylesheet" href="styles/font-awesome.min.css">
        <link rel="stylesheet" href="style/reset.css">
        <link rel="stylesheet" href="style/add_to_card.css">
        <link rel="stylesheet" href="style/card.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
        <script type="text/javascript" src="js/modernizr.custom.26633.js"></script>
        <script src="js/style.js"></script>
        <script src="js/kopa.js"></script>
        <script src="js/wow.min.js"></script>
    </head>
    <body>
        <section id="main_log" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-sm-7">
                            <img src="images/amazon-logo.png" id="logo" class="wow bounceInDown">
                        </div>
                        <div class="col-sm-1">
                              <i class="fa fa-phone" aria-hidden="true" id="phone-number">(11)2365-6937</i>
                              <br>
                              <i class="fa fa-phone" aria-hidden="true" id="phone-number1">
                                  (11)2365-6937</i>
                              <br>
                              <i class="fa fa-whatsapp" aria-hidden="true" id="phone-number1">
                                  (11)2365-6937</i>
                        </div>
                        <div class="shopping-cart-wrapper col-sm-4">
                            <div class="col-sm-12" id="boss">
                                <img src="images/shopping_cart.png" id="shopping">
                                <h6 id="shopping-text">Cart</h6>
                                    </br>
                               <?php if(isset($_SESSION['user_id'])) :?>

                                    <h5>Ave<i><b> <?php echo user_name; ?></h5>
                                    <a href="log_out.php">Log Out</a>
                                <?php else: ?>

                                    <a href="login.php">Log in / Register</a>

                                <?php endif; ?>
                            </div>
                            <!----col-sm-4-------->
                            <style>
         .potrait-frame-cart{
           height:100px;
           width:97px;
           position: absolute;
           z-index: 10;
         }
         .potraitImg-cart {
      object-fit: cover;
      height: 100px;
      width: 95px;
     }
        </style>
                            <div class="container">
                                <div class="shopping-cart">
                                    <div class="shopping-cart-header">
                                        <i class="fa fa-shopping-cart cart-icon"></i>
                                        <span class="badge">3</span>
                                        <div class="shopping-cart-total">
                                            <span class="lighter-text">Total:</span>
                                            <span class="main-color-text">$2,229.97</span>
                                        </div>
                                    </div>
                                    <!--end shopping-cart-header -->

                                    <ul class="shopping-cart-items">
                                        <li class="clearfix">
                                            <img src="img/frames/1.png" class="potrait-frame-cart" alt="" />
            <img src="img/1.jpg" class="potraitImg-cart noborder main-img" alt=""/>
                                            <span class="item-name">Sony DSC-RX100M III</span>
                                            <span class="item-price">$849.99</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                        </li>

                                        <li class="clearfix">
                                            <img src="img/frames/1.png" class="potrait-frame-cart" alt="" />
            <img src="img/1.jpg" class="potraitImg-cart noborder main-img" alt=""/>
                                            <span class="item-name">KS Automatic Mechanic...</span>
                                            <span class="item-price">$1,249.99</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                        </li>

                                        <li class="clearfix">
                                           <img src="img/frames/1.png" class="potrait-frame-cart" alt="" />
            <img src="img/1.jpg" class="potraitImg-cart noborder main-img" alt=""/>
                                            <span class="item-name">Kindle, 6" Glare-Free To...</span>
                                            <span class="item-price">$129.99</span>
                                            <span class="item-quantity">Quantity: 01</span>
                                        </li>
                                    </ul>

                                    <a href="cart.php" class="button">Checkout</a>
                                </div>
                                <!--end shopping-cart -->
                            </div>
                            <!---------------end container ------------------>

                        </div>
                    </div>
                </div>
            </div>

            <section class="fixed-menu">
                <ul class="topnav" id="myTopnav">
                    <li>
                        <a href="index.php" id="home">Home</a>
                    </li>
                    <li>
                        <a href="gallery.php">Galeria</a>
                    </li>
                    <li>
                        <a href="fram_choose.php">Quadros</a>
                    </li>
                    <li>
                        <a href="picture.php">Temas</a>
                    </li>
                    <li>
                        <a href="photographer.php" class="active">Fotografos</a>
                    </li>
                    <li>
                        <a href="about.php">sobre</a>
                    </li>
                    <li>
                        <?php if(isset($_SESSION['user_id'])) :?>
                            <a href="cart.php">Cart</a>
                        <?php else: ?>
                            <a href="login.php">Login</a>
                        <?php endif; ?>
                    </li>
                    <li class="icon">
                        <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
                    </li>
                </ul>
            </section>

        </section>
        <!-- end header-->
        <section>
            <div class="w3-content" style="position:relative">

                <img class="mySlides" src="images/psd/boxing.JPG">
                <img class="mySlides" src="images/psd/boxing_taring.JPG">
                <img class="mySlides" src="images/psd/lemon.JPG">
                <img class="mySlides" src="images/music.JPG">

                <a class="w3-btn-floating" style="position:absolute;top:45%;left:10%" id="slide-previous">
                    <i class="fa fa-chevron-circle-left fa-3x" aria-hidden="true"></i>
                </a>
                <a class="w3-btn-floating" style="position:absolute;top:45%;right:10%;height:45px" id="slide-next">
                    <i class="fa fa-chevron-circle-right fa-3x" aria-hidden="true"></i>
                </a>

            </div>
        </section>
        <!----------------section--------------------------->
        <section>
          <div class="container-fluid">
              <div class="row">
                  <div id="photo-gallery" class=>
                      <div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/1.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/2.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/3.jpg"  class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/4.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/5.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/6.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/7.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/8.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/9.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/10.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/11.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/12.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/13.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/14.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/15.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/16.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/17.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/18.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/19.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/20.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/21.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/22.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/23.jpg" class=/>
                          </div>
                          <div class="item col-sm-1 col-xs-6">
                              <img src="images/medium/24.jpg" class=/>
                          </div>
                      </div>
                  </div>
              </div>
        </section>

            <section>
              <div id="contact-map" style="height:300px;"></div>
            </section>
            <section id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                          <h4>Address</h4>
                          <p class="address">
                            120932 Amigo Street, Las Santos, Rio De Jenerio, Brazil
                          </p>
                          <p>
                            2016 Your Company, All Rghts Reserved
                          </p>
                        </div>
                        <div class="col-sm-6">
                          <h4>Contact Us</h4>
                          <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Name</label>
                              <input type="name" class="form-control" id="exampleInputPassword1" placeholder="name">
                            </div>
							 <div class="form-group">
                              <label for="exampleInputcomment">Comment</label>
                              <input type="comment" class="form-control" id="exampleInputcomment" placeholder="comment">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                          </form>
                        </div>
                    </div>
                </div>
            </section>
            <!------------------footer------------->

        </div>
        <script src="js/main.js"></script>

    </body>
</php>
