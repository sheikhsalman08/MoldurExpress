<?php
  require('functions.php');
?>
<!DOCTYPE html>

<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>Welcome to Moldur Express</title>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSynGTe5RpwVIy0z0d3kb_M3_U-Q-jC74"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="style/fram_choose.css">
        <link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="style/mediaqueries.css">
        <link rel="stylesheet" href="style/animate.css">
		<link rel="stylesheet" href="styles/font-awesome.min.css">
		<link rel="stylesheet" href="styles/slick.css">
		<link rel="stylesheet" href="style/owl.carousel.css">
	   <link rel="stylesheet" href="style/reset.css">
	   <link rel="stylesheet" href="style/add_to_card.css">
	   <link rel="stylesheet" href="style/card.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<script src="js/style.js"></script>
		<script src="js/main.js"></script>
		<script src="js/kopa.js"></script>
		<script src="js/wow.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/add_to_card.css" />
</head>
<body>
    		     <section id="main_log">
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
								<div class="col-sm-4" id="boss">
									<img src="images/shopping_cart.png" id="shopping">
										<h6 id="shopping-text">Cart</h6>
                                    </br>
                                <?php if(isset($_SESSION['user_id'])) :?>

                                    <h5>Ave<i><b> <?php echo user_name; ?></h5>
                                    <a href="log_out.php">Log Out</a>
                                <?php else: ?>

                                    <a href="login.php">Log in / Register</a>
                                <?php endif; ?>
								</div><!----col-sm-4-------->
									<div class="container">
  <div class="shopping-cart">
    <div class="shopping-cart-header">
      <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
      <div class="shopping-cart-total">
        <span class="lighter-text">Total:</span>
        <span class="main-color-text">$2,229.97</span>
      </div>
    </div> <!--end shopping-cart-header -->

    <ul class="shopping-cart-items">
      <li class="clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
        <span class="item-name">Sony DSC-RX100M III</span>
        <span class="item-price">$849.99</span>
        <span class="item-quantity">Quantity: 01</span>
      </li>

      <li class="clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item2.jpg" alt="item1" />
        <span class="item-name">KS Automatic Mechanic...</span>
        <span class="item-price">$1,249.99</span>
        <span class="item-quantity">Quantity: 01</span>
      </li>

      <li class="clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item3.jpg" alt="item1" />
        <span class="item-name">Kindle, 6" Glare-Free To...</span>
        <span class="item-price">$129.99</span>
        <span class="item-quantity">Quantity: 01</span>
      </li>
    </ul>

    <a href="add_to_card.php" class="button">Checkout</a>
  </div> <!--end shopping-cart -->
</div> <!---------------end container ------------------>		  
							</div>
						</div>
			        </div>
			  </section><!----------section-------->
			  <section class="fixed-menu">
			    <ul class="topnav" id="myTopnav">
				  <li><a class="active" href="index.php" id="home">Home</a></li>
				  <li><a href="gallery.php">Galeria</a></li>
				  <li><a href="fram_choose.php">Quadros</a></li>
				  <li><a href="picture.php">Temas</a></li>
				  <li><a href="photographer.php">Fotografos</a></li>
				  <li><a href="about.php">sobre</a></li>
					<?php if(isset($_SESSION['user_id'])) :?>
                            <a href="cart.php">Cart</a>
                        <?php else: ?>
                            <a href="login.php">Login</a>
                        <?php endif; ?>
				  <li class="icon">
					<a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
				  </li>
				</ul>
			 </section><!-----------------------section------------------>
			 <section>

<div id="wrap">
	<div id="accordian">
		<!-- <div class="step" id="step1">
			<div class="number">
				<span>1</span>
			</div>
			<div class="title">
				<h1>Email Address</h1>
			</div>
		</div>
		<div class="content" id="email">
			<form class="go-right">
				<div>
        <input type="email" name="email" value="" id="email-address" placeholder="Email Address" data-trigger="change" data-validation-minlength="1" data-type="email" data-required="true" data-error-message="Enter a valid email address."/><label for="email">Email Address</label>
        </div>
				<button class="login">Login</button>
			</form>
			<a class="continue" href="#">Singup</a>
		</div>
		<div class="step" id="step2">
			<div class="number">
				<span>2</span>
			</div>
			<div class="title">
				<h1>Billing Information</h1>
			</div>
		</div> -->
		<div class="content" id="address">
			<form class="go-right" method="post">
				<div>
				<input type="name" name="first_name" value="" id="first_name" placeholder="John" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your First Name"/>
				<label for="first_name">First Name</label>
        		</div></br>

				<div>
				<input type="name" name="last_name" value="" id="last_name" placeholder="Smith" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Last Name"/>
				<label for="last_name">Last Name</label>
				</div></br>
				<div>
				<input type="phone" name="telephone" value="" id="telephone" placeholder="(555)-867-5309" data-trigger="change" data-validation-minlength="1" data-type="number" data-required="true" data-error-message="Enter Your Telephone Number"/>
				<label for="telephone">Telephone</label>
				</div></br>

				<div>
				<input type="text" name="company" value="" id="company" placeholder="Company" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="false"/>
				<label for="Company">Company</label>
				</div></br>

				<div>
				<input type="text" name="address" value="" id="address" placeholder="123 Main Street" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing Address"/>
				<label for="Address">Address</label>
				</div></br>

				<div>
				<input type="text" name="city" value="" id="city" placeholder="Everytown" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing City"/>
				<label for="city">City</label>
				</div></br>

				<div>
				<!-- <input type="text" name="zip" value="" id="zip" placeholder="12345" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing Zip Code"/> -->
					<select class="selectpicker" data-live-search="true" id="option" placeholder="Select Zip Code">
						<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
						<option data-tokens="mustard">Burger, Shake and a Smile</option>
						<option data-tokens="frosting">Sugar, Spice and all things nice</option>
					</select>


				<label for="zip">Zip Code</label>
				</div></br>

				<div>
				<input type="checkbox"/>
				<label class="same" for="same_as_shipping">Same As Shipping Address</label><span></span>
				</div>
			</form>
			
		</div>


		
		<section id="totall-line">
		   <div class="container">
				<div class="row">
		           <div class="col-sm-12">
					   <div class="totals">
						   <img src="images/line.png" id="balck-line">
						   <?php
						   		$subtotal = 0;
						   		$query = $moldura->show_sorted_value_of_user('carts','cart_user_id',$_SESSION['user_id'],'cart_id','DESC');

						   		while($fetches = mysqli_fetch_assoc($query)){
						   			$subtotal =   $subtotal + $fetches['cart_price'];
						   		}
						    ?>
					<span class="subtitle">Subtotal <span id="sub_price"><?php echo $subtotal; ?></span></span>
					<!-- <span class="subtitle">Tax <span id="sub_tax">$2.00</span></span>
					<span class="subtitle">Shipping <span id="sub_ship">$4.00</span></span> -->
					<span class="subtitle">Extra <span id="sub_ship">$0.00</span></span>
				</div>
				<div class="final">
					<span class="title">Total <span id="calculated_total"><?php echo $subtotal; ?></span></span>
				</div>
					   
				   </div>
			   </div>
			</div>
		</section><!-----------------------section---------------->
		<section id="totall-line">
		   <div class="container">
				<div class="row">
		           <div class="col-sm-12">
					   <div  id="reviewed">
							<div id="complete">
								<a class="big_button" id="complete" href="final.html">Complete Order</a>
							</div>
						</div>
			       </div>
			   </div>
			</div>
		</section><!-----------------------section---------------->
				
				


</div>
			
<style>
	#option{
	height: 54px;
	width: 389px;

	}

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
	.product_details {
	margin-top: 41px;
	font-size: 20px;
	font-weight: 600;
	color: #9E9E9E;
	}
	#pro-padding{
	margin-bottom:20px;
	}
	#totall-line{
	line: red;
	width:100%;
	}
	#balck-line{
	height:13px;
	width:100%;
	}

</style>	

 <script src="js/hover.js"></script>
</body>
</php>
