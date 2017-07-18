<php>
   <head>
	   <script src="https://maps.googleapis.com/maps/api/js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" >
	    <link rel="stylesheet" href="style/well.css">
	    <link rel="stylesheet" href="style/style.css">
	    <link rel="stylesheet" href="style/add_to_card.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/card.css">
	    <link rel="stylesheet" href="style/jquery-ui.min.css">
	    <script src="js/well.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
	    <script src="js/jquery-ui.min.js"></script>
	    <script src="js/style.js"></script>
        <script src="js/kopa.js"></script>
	    
   </head>
   <body>
	  <div class="mother-class">
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
                      <a href="gallery.php" >Galeria</a>
                  </li>
                  <li>
                      <a href="fram_choose.php" class="active">Quadros</a>
                  </li>
                  <li>
                      <a href="picture.php">Temas</a>
                  </li>
                  <li>
                      <a href="photographer.php">Fotografos</a>
                  </li>
                  <li>
                      <a href="about.php">sobre</a>
                  </li>
                  <li>
                      <a href="login.php">Login</a>
                  </li>
                  <li class="icon">
                      <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
                  </li>
              </ul>
          </section>

      </section><!-- end header-->
		   <section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
				     <div id="tab">
						 <ul>
							 <li><a href="#car">Well1</a></li>
						     <li><a href="#book">Well2</a></li>
							 <li><a href="#pan">Well3</a></li>
							 <li><a href="#note">Well4</a></li>							 
							 <li><a href="#well">Well5</a></li>
						 </ul>
						 <div id="book">
						      <div class="col-sm-12" id="well_image1">
								   <div class="col-sm-4"></div>
								   <div class="col-sm-4" id="drag_img1">
									  <img src="images/1.jpg" >
								   </div>
								   <div class="col-sm-4"></div>
							   </div>
						 </div>
						 <div id="pan">
						     <div class="col-sm-12" id="well_image2">
								   <div class="col-sm-4"></div>
								   <div class="col-sm-4" id="drag_img2">
									  <img src="images/1.jpg" >
								   </div>
								   <div class="col-sm-4"></div>
							   </div>
						 </div>
						 <div id="note">
						    <div class="col-sm-12" id="well_image3">
								   <div class="col-sm-4"></div>
								   <div class="col-sm-4" id="drag_img3">
									  <img src="images/1.jpg" >
								   </div>
								   <div class="col-sm-4"></div>
							   </div>
						 </div>
						 <div id="car">
						   <div class="col-sm-12" id="well_image4">
							   <div class="col-sm-4"></div>
							   <div class="col-sm-4" id="drag_img4">
								  <img src="images/1.jpg" >
							   </div>
							   <div class="col-sm-4"></div>
						   </div>
						 </div>
						 <div id="well">
						   <div class="col-sm-12" id="well_image5">
							   <div class="col-sm-4"></div>
							   <div class="col-sm-4" id="drag_img5">
								  <img src="images/1.jpg" >
							   </div>
							   <div class="col-sm-4"></div>
						   </div>
						 </div>
				     </div>
					</div>
				   
				 </div>
			  </div> 
		   </section><!-------------------------section--------------->
		   
	   </div>
   </body>
</php>