<?php
  require('functions.php');
?>
<!DOCTYPE php>
<php lang="en">
    <head>

   <style>

     

  label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */
}
</style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Welcome to Moldur Express</title>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSynGTe5RpwVIy0z0d3kb_M3_U-Q-jC74"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/fram_choose.css">
        <link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick.css"/>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/mediaqueries.css">
        <link rel="stylesheet" href="style/animate.css">
        <link rel="stylesheet" href="style/owl.carousel.css">
        <link rel="stylesheet" href="style/reset.css">
        <link rel="stylesheet" href="style/add_to_card.css">
        <link rel="stylesheet" href="style/card.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="slick-1.6.0/slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="slick-1.6.0/slick/slick.css"/>
        <script src="slick-1.6.0/slick/slick.min.js"></script>
        <script src="js/style.js"></script>
        <script src="js/kopa.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>
        <!-- php5 shim and Respond.js for IE8 support of php5 elements and media queries -->
        <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
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

      </section><!-- end header-->
        <section class="choose-frame-widget margin-top-20">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="frame-box">
                <?php 
                if(isset($_GET['id_value'])){
                 $chosen_single_frame =  $moldura->getting_data_by_another_field('single_frames','single_frame_img','single_frame_id',$_GET['id_value']);
                 $chosen_single_frame = "data:image;base64,". $chosen_single_frame;
               }else{
                $chosen_single_frame = "images/frames/f2.png";
               }
                ?>
                <?php 
                  if(isset($_GET['image_value'])){
                    $chosen_image = $moldura->getting_data_by_another_field('images','image_img','image_id',$_GET['image_value']);
                    $chosen_image =  "data:image;base64,". $chosen_image;
                  }else{
                    $chosen_image = "images/6.png";
                  }
                ?>

                  <img src=<?php echo $chosen_single_frame; ?> class="potrait-frame" alt=""/>
                  <div class="image-box">
                    <img src=<?php echo $chosen_image; ?> class="potraitImg noborder main-img" alt=""/>
                  </div>
                </div>
                <div class="frame-box-landscape">

                  <img src=<?php echo $chosen_single_frame; ?> class="landscape-frame" alt="" />
                  <div class="image-box-landscape">
                    <img src=<?php echo $chosen_image; ?> class="landscapeImg noborder main-img" alt=""/>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 control-box">
                <div>

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="#changeImage" aria-controls="changeImage" role="tab" data-toggle="tab">Change Image</a></li>
                    <li role="presentation"><a href="#size" aria-controls="size" role="tab" data-toggle="tab">Size</a></li>
                    <li role="presentation" class="active"><a href="#frame" aria-controls="frame" role="tab" data-toggle="tab">Frame</a></li>
                    <li role="presentation"><a href="#margin" aria-controls="margin" role="tab" data-toggle="tab">Margin</a></li>
                    <li role="presentation"><a href="#protection" aria-controls="protection" role="tab" data-toggle="tab">Protection</a></li>
					         <li role="presentation"><a href="well_images.php" >Try in Well</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade " id="changeImage">
                      <!-- <form action="/" class="dropzone" id="imageDropzone"> -->

                      <!-- ------------------ 
                                form start  
                       -------------------- -->

                      

                       <?php 
                         if ( isset($_SESSION['user_id']) ){
                          $value_user_id = $_SESSION['user_id'];
                        }else{
                          $value_user_id = " ";
                        }

                      if ( isset($_POST['chose_single_frame']) && ($_POST['chose_single_frame'] != null)){
                          $value_single_frame_id =  $_POST['chose_single_frame'];
                          
                       }elseif ( !empty($_GET['id_value']) ) {
                          $value_single_frame_id = $_GET['id_value'];
                       }else{
                        $value_single_frame_id = 11;
                       }


                      $value_price = $moldura->getting_data_by_another_field('single_frames','single_frame_price','single_frame_id',$value_single_frame_id);

                      if (!empty($_FILES['customer_uploaded_image']['tmp_name']) ){
                      $value_image = $_FILES['customer_uploaded_image']['tmp_name'];
                      $value_image = file_get_contents($value_image);
                      $value_image = base64_encode($value_image);
                        }elseif( isset($_GET['image_value']) ){
                      $value_image =  $moldura->getting_data_by_another_field(
                              'images','image_img','image_id',$_GET['image_value']);
                        }else{
                      $value_image = null;
                        }

                      if(isset($_POST['frame_size'])){
                      $value_frame_size = $_POST['frame_size'];
                      }
                      

                      if(isset($_POST['border'])){
                        $value_frame_margin = $_POST['border'];
                      }else{
                        $value_frame_margin = " ";
                      }

                      if(isset($_POST['protection'])){
                        $value_frame_protection = $_POST['protection'];
                      }else{
                        $value_frame_protection = " ";
                      }

                      if(isset($_POST['view'])){
                        $value_frame_land_port = $_POST['view'];
                      }else{
                        $value_frame_land_port = " ";
                      }

                       if(isset($_POST['add_to_cart']) ){
                        $cart_name = $moldura->getting_data_by_another_field('single_frames','single_frame_tag_name','single_frame_id',$value_single_frame_id);

                          $moldura->insert_into_table('
                            INSERT INTO carts(cart_user_id,cart_single_frame_id,cart_price,cart_image,cart_size,cart_margin,cart_protection,cart_landscape_portrait,cart_type,cart_name,cart_full_frame_id) VALUES("'.$value_user_id .'","'.$value_single_frame_id .'","'.$value_price .'","'.$value_image.'","'.$value_frame_size .'","'.$value_frame_margin .'","'.$value_frame_protection .'","'.$value_frame_land_port .'",2,"'.$cart_name.'",0)
                            ');
                       }else{}


                       ?>

                      
                      <form method="POST" action="" enctype ="multipart/form-data" >
                        <input type="file" name="customer_uploaded_image" id="file" />
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="size">
                      
                      <input class="data-size" type="radio" name="frame_size" value="[10,15.1]"> 10x15.1 cm
                        <input class="data-size" type="radio" name="frame_size" value="[20,30.1]"> 20x30.1 cm
                        <input class="data-size" type="radio" name="frame_size" value="[30,45.2]"> 30x45.2 cm
                        <input class="data-size" type="radio" name="frame_size" value="[40,60.2]" checked> 40x60.2 cm
                        <input class="data-size" type="radio" name="frame_size" value="[50,75.3]"> 50x75.3 cm
                        <input class="data-size" type="radio" name="frame_size" value="[60,90.3]"> 60x90.3 cm
                        <input class="data-size" type="radio" name="frame_size" value="[80,120.4]"> 80x120.4 cm
                        <input class="data-size" type="radio" name="frame_size" value="[90,135.5]"> 90x135.5 cm
                        <input class="data-size" type="radio" name="frame_size" value="[105,15.1]"> 105x15.1 cm
                      <!-- </form> -->
                      <!-- <div id="slider-range-min"></div> -->
                      <!-- <div class="">
                        <input type="number" class="get-height" name="height" value="" placeholder="height">x
                        <input type="number" class="get-width" name="width" value="" placeholder="width"> cm
                      </div> -->
                    </div>
                    
                    <div role="tabpanel" class="tab-pane fade in active" id="frame">
                      <div class="frame-showcase">

                        <?php
                          $query = $moldura->show_sorted_row_values(
                              "single_frames","single_frame_id","DESC"
                            );
                          while($fetches = mysqli_fetch_assoc($query)) :
                         ?>

                          <label>                            
                             <div><img src="data:image;base64,<?php echo $fetches['single_frame_img']; ?>" name="test" class="frames" alt="" value="11" /></div>
                          </label>

                          <?php endwhile; ?>

                      </div>
                    </div>

                    <input type="hidden" name="chose_single_frame" id="chose_single_frame" value="">
                      
                    <div role="tabpanel" class="tab-pane fade" id="margin">
                    
                      <div>
                        <label class="btn btn-primary">
                        <input type="radio" class="btn btn-primary margin-btn" name="border" id="option1" autocomplete="off" data-size = "0" value="1" CHECKED/> Borderless
                        </label>
                        <label class="btn btn-primary">
                        <input type="radio" class="btn btn-primary margin-btn" name="border" id="option2" autocomplete="off" data-size = "3" value="2"/> 3cm
                        </label>
                        <label class="btn btn-primary">
                        <input type="radio" class="btn btn-primary margin-btn" data-size = "5" name="border" id="option3" autocomplete="off" value="3"/> 5cm
                        </label>
                      </div>
                    </div>


                    <div role="tabpanel" class="tab-pane fade" id="protection">
                      <label class="btn btn-primary">
                          <input type="radio" name="protection" value="1" class="btn btn-primary get-protection" data-value="glass-christal" CHECKED/>Glass Chrystal
                      </label>
                      <label class="btn btn-primary">
                          <input type="radio" name="protection" value="2" class="btn btn-primary get-protection" data-value="anti-reflactive" />Anti-reflactive glass
                      </label>
                      <label class="btn btn-primary">
                          <input type="radio" name="protection" value="3" class="btn btn-primary get-protection" data-value="uv"/>UV Acrylic front back
                      </label>
                    </div>
                  </div>

                </div>
<!-- Landscape or portrait -->
                <div class="row">
                    <div class=" btn-group col-sm-12 margin-top-20">
                         <label class="btn btn-primary">
                        <input id="landscape-view-btn" class="btn btn-danger" NAME="view" type="radio" value="2" />
                            Landscape
                         </label>                          
                         <label class="btn btn-primary">
                        <input id="portrait-view-btn" class="btn btn-danger" NAME="view" type="radio" value="1" CHECKED/>Portrait
                        </label>
                    </div>
                </div>
                <!-- End of landing or portrait -->
                <!-- prices/sizes/final_price -->
                <div class="row margin-top-20">
                  <div class="col-sm-6">
                    <h4>Printing Size: <span id="printing-size"></span></h4>
                  </div>
                  <div class="col-sm-6">
                    <h4>Final Size: <span id="final-size"></span></h4>
                  </div>
                  <div class="col-sm-12">
                    <h4>Final Price: <span id="final-price"></span> USD</h4>
                  </div>
                  <div class="col-sm-12 margin-top-20">
                    
                    <input type="submit" name="add_to_cart"  class="btn btn-success" value="Add to cart"/>
                    
                  </div>
                </div>
              </div>
            </div>
            </form>

            

            <!----------------------
            end of form
            -------------------------->
        </section>
        <section class="margin-top-20">
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



        </body>
    </php>
