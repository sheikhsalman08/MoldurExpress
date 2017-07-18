<!DOCTYPE php>
<?php 
  
  require('functions.php');
  if(isset($_SESSION['user_id'])){
      Header('Location:index.php');
  }
?>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to Moldur Express</title>
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Hege Refsnes">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/mediaqueries.css">
        <link rel="stylesheet" href="style/animate.css">
        <link rel="stylesheet" href="styles/font-awesome.min.css">
        <link rel="stylesheet" href="styles/slick.css">
        <link rel="stylesheet" href="style/owl.carousel.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="js/style.js"></script>
        <script src="js/main.js"></script>
        <script src="js/kopa.js"></script>
        <script src="js/wow.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style/normalize.css">
        <link rel="stylesheet" href="style/login.css">
        <style>
         a , p , h1, h2, h3, h4, h5, h6 {
            color:white;
          }
        </style>
    </head>

    <body>
      <section id="main_log" class="fixed-menu">
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
                              <h6 id="shopping-text">add to card</h6>
                          </div>
                          <!----col-sm-4-------->
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
                                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1"/>
                                          <span class="item-name">Sony DSC-RX100M III</span>
                                          <span class="item-price">$849.99</span>
                                          <span class="item-quantity">Quantity: 01</span>
                                      </li>

                                      <li class="clearfix">
                                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item2.jpg" alt="item1"/>
                                          <span class="item-name">KS Automatic Mechanic...</span>
                                          <span class="item-price">$1,249.99</span>
                                          <span class="item-quantity">Quantity: 01</span>
                                      </li>

                                      <li class="clearfix">
                                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item3.jpg" alt="item1"/>
                                          <span class="item-name">Kindle, 6" Glare-Free To...</span>
                                          <span class="item-price">$129.99</span>
                                          <span class="item-quantity">Quantity: 01</span>
                                      </li>
                                  </ul>

                                  <a href="add_to_card.php" class="button">Checkout</a>
                              </div>
                              <!--end shopping-cart -->
                          </div>
                          <!---------------end container ------------------>

                      </div>
                  </div>
              </div>
          </div>

          <section>
              <ul class="topnav" id="myTopnav">
                  <li>
                      <a  href="index.php" id="home">Home</a>
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
                      <a href="photographer.php" >Fotografos</a>
                  </li>
                  <li>
                      <a href="about.php">sobre</a>
                  </li>
                  <li>
                      <a href="login.php" class="active">Login</a>
                  </li>
                  <li class="icon">
                      <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
                  </li>
              </ul>
          </section>

      </section><!-- end header-->
        <section>
            <div class="form">
                <ul class="tab-group">
                    <li class="tab active">
                        <a href="#login">Log In</a>
                    </li>
                    <li class="tab">
                        <a href="#signup">Sign Up</a>
                    </li>
                </ul>

                <div class="tab-content">
				<?php 
					if(isset($_POST['log_in_submit'])){
					  if($moldura->email_existance('users','user_email',$_POST['log_in_email'])){
						  if(($moldura->finding_email_pass('users','user_pass','user_email',$_POST['log_in_email'])) == $_POST['log_in_pass']){
							  $_SESSION['user_id'] = $moldura->getting_data_by_another_field('users','user_id','user_email',$_POST['log_in_email']);
							  $user_name = $moldura->getting_data_by_another_field('users','user_first_name','user_id',$_SESSION['user_id']);
							  echo "<h1> Welcome ".$user_name."</h1>";
							  
						  }else{
							echo "<p>pass word didn't matches</p>";
						  }   //if/else for password matches
					  }else{
						echo "<p>E-mail doesn't exist</p>";
					  }   //if/else email exist
					}   //isset log-in submit
				 ?>
                    <div id="login">
                        <h1>Welcome Back!</h1>

                    <form action="" method="POST">
                            <div class="field-wrap">
                                <input type="email" name="log_in_email" required autocomplete="off" placeholder="Email Address"/>
                            </div>
                            <div class="field-wrap">
                                <input type="password" name="log_in_pass" required autocomplete="off" placeholder="Password"/>
                            </div>
                            <p class="forgot">
                                <a href="#">Forgot Password then make a comment at the bottom</a>
                            </p>
                            <button type="submit" name="log_in_submit" class="button button-block"/>Log In</button>

                    </form>

                </div>



      <?php  if (isset($_POST['sign_up_submit'])){
            if ( isset($_POST['sign_up_first_name']) && isset($_POST['sign_up_last_name']) && isset($_POST['sign_up_email']) && isset($_POST['sign_up_pass']) ){
                if (empty($moldura->email_existance('users','user_email',$_POST['sign_up_email'] ))){
                        echo "<h3 style='color:white'>Congrats New Email</h3>";
                        $moldura->insert_into_table('
                            INSERT INTO users(user_first_name,user_last_name,user_email,user_pass) VALUES("'.$_POST["sign_up_first_name"].'","'.$_POST["sign_up_last_name"].'","'.$_POST["sign_up_email"].'","'.$_POST["sign_up_pass"].'")
                          ');
                }else{
                  $sign_up_error_message = "This e-mail is already existance";
                  echo "<h3 style='color:white'>Emal is already used</h3>";
                }   //if/else for email existance checking
            }else{
              // $sign_up_error_message = "Fill up all the Fields";
              echo "<h3 style='color:white'>fill up all the form</h3>";
            }   //if/else of isset fields
        }else{}   //if submit sign up
      ?>
                <div id="signup">
                    <h1>Sign Up for Free</h1>
                    
                    <form action="" method="POST">

                        <div class="top-row">
                            <div class="field-wrap">
                                <label>
                                    First Name<span class="req">*</span>
                                </label>
                                <input type="text" name="sign_up_first_name" required autocomplete="off"/>
                            </div>
                            <div class="field-wrap">
                                <label>
                                    Last Name<span class="req">*</span>
                                </label>
                                <input type="text" name="sign_up_last_name" required autocomplete="off"/>
                            </div>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Email Address<span class="req">*</span>
                            </label>
                            <input type="email" name="sign_up_email" required autocomplete="off"/>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Set A Password<span class="req">*</span>
                            </label>
                            <input type="password" name="sign_up_pass" required autocomplete="off"/>
                        </div>

                        <button type="submit" name="sign_up_submit" class="button button-block"/>Get Started</button>
                </form>

            </div>    <!-- end of sign up -->

        </div>
        <!-- tab-content -->
    </section>

</div>
<!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>

</body>
</php>
