 <?php
  require('functions.php');
?>
<!DOCTYPE php>
<!-- By Designscrazed.com , just a structure for easy usage. -->

<php lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>Welcome to Moldur Express</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="style/mediaqueries.css">
        <link rel="stylesheet" href="style/animate.css">
		<link rel="stylesheet" href="styles/font-awesome.min.css">
		<link rel="stylesheet" href="styles/slick.css">
		<link rel="stylesheet" href="style/owl.carousel.css">
	   <link rel="stylesheet" href="style/reset.css">
	   <link rel="stylesheet" href="style/add_to_card.css">
	   <link rel="stylesheet" href="style/card.css">
	   <link rel="stylesheet" href="style/fram_choose.css">
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
			  </section>
			  <section class="fixed-menu">
			    <ul class="topnav" id="myTopnav">
				  <li><a class="active" href="index.php" id="home">Home</a></li>
				  <li><a href="gallery.php">Galeria</a></li>
				  <li><a href="fram_choose.php">Quadros</a></li>
				  <li><a href="picture.php">Temas</a></li>
				  <li><a href="photographer.php">Fotografos</a></li>
				  <li><a href="about.php">sobre</a></li>
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
			 <section>
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
<div id="wrap">
	<div id="accordian">
		
 		<div class="step" id="step5">
			<div class="number">
				<span>1</span>
			</div>
			<div class="title">
				<h1>Finalize Order</h1>
			</div>
		</div>
		<section>
		    <div class="container">
				<div class="row">	

				   <?php 
				   		$subtotal = 0;
                        $query = $moldura->show_sorted_value_of_user('carts','cart_user_id',$_SESSION['user_id'],'cart_id','DESC');
                                        while($fetches = mysqli_fetch_assoc($query) ) :
                                        ?>
						<?php if($fetches['cart_type'] == 2 ) : ?>
							<div class="col-sm-12" id="pro-padding">
								<div class="col-sm-3">
									<?php
                                               $single_frame_img =  $moldura->getting_data_by_another_field('single_frames','single_frame_img','single_frame_id',$fetches['cart_single_frame_id']);     
                                    ?>
												<img src="data:image;base64,<?php echo $single_frame_img; ?>" class="potrait-frame-cart" alt="" />
												<img src="data:image;base64,<?php echo $fetches['cart_image']; ?>" class="potraitImg-cart noborder main-img" alt=""/>
								</div>
								<div class="col-sm-7">
									<div class="product_details">
										<div class="product_details">
											<div class="col-sm-4" style="text-align:center;">
												<span ><?php echo $fetches['cart_name']; ?></span>
											</div>
											
											<div class="col-sm-4" style="text-align:center;">
												<span ><?php echo $fetches['cart_price']; ?></span>
											</div>
											<div class="col-sm-4" style="text-align:center;">
												<span><i class="fa fa-times" aria-hidden="true"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php elseif($fetches['cart_type'] == 1) : ?>
							<div class="col-sm-12" id="pro-padding">
								<div class="col-sm-3">
									<?php
                                               $single_frame_img =  $moldura->getting_data_by_another_field('single_frames','single_frame_img','single_frame_id',$fetches['cart_single_frame_id']);     
                                    ?>
												<img src="data:image;base64,<?php echo $fetches['cart_image']; ?>" class="potrait-frame-cart" alt="" />
								</div>
								<div class="col-sm-7">
									<div class="product_details">
										<div class="product_details">
											<div class="col-sm-4" style="text-align:center;">
												<span ><?php echo $fetches['cart_name']; ?></span>
											</div>
											
											<div class="col-sm-4" style="text-align:center;">
												<span ><?php echo $fetches['cart_price']; ?></span>
											</div>
											<div class="col-sm-4" style="text-align:center;">
												<span><i class="fa fa-times" aria-hidden="true"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>  
							<?php $subtotal = $subtotal + $fetches['cart_price']; ?>  
						<?php endwhile; ?>                         

				</div>		<!-- end of row ---------->
		    </div>
		</section>
		<section id="totall-line">
		   <div class="container">
				<div class="row">
		           <div class="col-sm-12">
					   <div class="totals">
						   <img src="images/line.png" id="balck-line">
					<span class="subtitle">Subtotal <span id="sub_price"><?php echo $subtotal; ?></span></span>
<!-- 					<span class="subtitle">Tax <span id="sub_tax">$2.00</span></span>
					<span class="subtitle">Shipping <span id="sub_ship">$4.00</span></span> -->
					<span class="subtitle">Extra <span id="sub_ship">$0</span></span>
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
				<a class="big_button" id="complete" href="add_to_card.php">Complete Order</a>
				</div>
</div>
			       </div>
			   </div>
			</div>
		</section><!-----------------------section---------------->
			

 <script src="js/hover.js"></script>

</body>
</php>
