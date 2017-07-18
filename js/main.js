
  var jq = $.noConflict();
  jq(document).ready(function(){
    jq(function(){
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            mobile: false
        });
        wow.init();


        /***************************
                Map
        ****************************/

        function myMap() {
          var green = [{"featureType":"all","elementType":"geometry","stylers":[{"saturation":"0"},{"lightness":"0"},{"visibility":"on"},{"gamma":"1"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#e0e9f2"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"off"},{"color":"#000000"},{"lightness":"0"}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text","stylers":[{"visibility":"simplified"},{"saturation":"-100"},{"lightness":"-43"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#5a5858"},{"lightness":"0"},{"visibility":"on"},{"weight":"1.00"},{"gamma":"1"},{"saturation":"-54"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#6a6969"},{"lightness":"0"}]},{"featureType":"poi.attraction","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"poi.attraction","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.attraction","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#698577"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"invert_lightness":true}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"},{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"lightness":"0"},{"color":"#474747"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":"0"},{"weight":0.2},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"invert_lightness":true}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"visibility":"off"},{"saturation":"-100"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.fill","stylers":[{"color":"#a1a1a1"},{"visibility":"off"}]},{"featureType":"road.highway.controlled_access","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"lightness":"0"},{"visibility":"on"},{"color":"#474747"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#454545"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"saturation":"-80"},{"lightness":"42"},{"color":"#989898"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"saturation":"-100"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#474747"},{"lightness":"0"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"lightness":"8"},{"color":"#909090"}]},{"featureType":"road.local","elementType":"labels.icon","stylers":[{"saturation":"-100"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#6d6d6d"},{"lightness":"0"},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#616e74"},{"lightness":"0"}]}];
          var green2 = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"off"},{"hue":"#ff0000"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.airport","elementType":"all","stylers":[{"visibility":"on"},{"color":"#626368"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#83e7c3"},{"visibility":"on"}]}];
          var mapCanvas = document.getElementById("contact-map");

          var mapOptions = {
            center: new google.maps.LatLng(-9.090262, -50.961707), zoom: 5,
            styles: green,
            scrollwheel: false
          };

          var map = new google.maps.Map(mapCanvas, mapOptions);

          var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-9.090262, -50.961707),
            map: map,
            title: 'Comapny Name'
          });


        }
        myMap();


        /***************************
          Show hide shooping cart
        ****************************/
        jq("#shopping").click(function(res){
          jq(".shopping-cart").toggle("slow");
        })


        /***************************
          Fixed nav after scrolling
        ****************************/
        jq(window).bind('scroll', function () {
            if (jq(window).scrollTop() > 50) {
                jq('.fixed-menu').addClass('navbar-fixed-top');
            } else {
                jq('.fixed-menu').removeClass('navbar-fixed-top');
            }
        });

        /**************************
            Main Slider
        ***************************/
        // (function(){

        jq("#slide-previous").click(function(){
          plusDivs(-1)
        })

        jq("#slide-next").click(function(){
          plusDivs(1)
        })

          var slideIndex = 1;
          var imgInterval;
          showDivs(slideIndex);


          //change image in interval
          imgInterval = setInterval(function(){

             plusDivs(1)

           }, 6000);

           //on hover stop interval

           jq(".w3-content").hover(function(){
              clearInterval(imgInterval);
           },function(){
             imgInterval = setInterval(function(){

                plusDivs(1)

              }, 6000);
           })

          function plusDivs(n) {
              showDivs(slideIndex += n);
          }

          function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlides");
              if (n > x.length) {
                  slideIndex = 1
              }
              if (n < 1) {
                  slideIndex = x.length
              }
              for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";
                  // jq(x[i]).hide("slow");
              }
              // x[slideIndex - 1].style.display = "block";
              // jq(x[slideIndex - 1]).effect("fade");
              jq(x[slideIndex - 1]).fadeIn();
          }

        // })();
        (function(){
          // var jq = $.noConflict();
          // jq(document).ready(function(){

           var size=[10,15.1];
            var protection=10;
            var border = 7;
            // range slider

            jq("#slider-range-min" ).slider({
              range: "min",
              value: 37,
              min: 1,
              max: 700,
              slide: function( event, ui ) {
                jq( "#amount" ).val( "$" + ui.value );
              }
            });


            //change view

            jq("#landscape-view-btn").click(function(){
              jq(".frame-box").hide();
              jq(".frame-box-landscape").show();
            })

            jq("#portrait-view-btn").click(function(){
                jq(".frame-box-landscape").hide();
                jq(".frame-box").show();
            })


            //slick frame slider

            jq('.frame-showcase').slick({
              dots: true,
              infinite: false,
              speed: 300,
              slidesToShow: 4,
              slidesToScroll: 4
            });

            jq(".frames").click(function(){
              var src = jq(this).attr('src');
              var imgId = jq(this).data("img");
              console.log(imgId);
			  //this will change the picture with the slider
              jq(".potrait-frame").attr('src',src);
              jq(".landscape-frame").attr('src',src);

              jq("#chose_single_frame").val(imgId);
              console.log(jq("#chose_single_frame").val());

            })


            // set margin

            jq(".margin-btn").click(function(){

              var data = jq(this).data("size");
              console.log(data);

              if(data==0){
                jq(".potraitImg").removeClass("cm3Border").removeClass("cm5Border").addClass("noborder");
              }else if(data==3){
                jq(".potraitImg").removeClass("noborder").removeClass("cm5Border").addClass("cm3Border");
              }else if(data==5){
                jq(".potraitImg").removeClass("noborder").removeClass("cm3Border").addClass("cm5Border");
              }

            })


            // read url

            function readURL(input) {

              if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      jq('.main-img').attr('src', e.target.result);
                  }

                  reader.readAsDataURL(input.files[0]);
              }
            }

            jq('#file').change(function () {
               readURL(this);
            });


            jq(".data-size").click(function(res){
                size = jq(this).val();
                size = JSON.parse(size);

                generateOutput(size,border,protection);

            });

            jq(".get-protection").click(function(res){
              var val = jq(this).data("value");

              if(val == "glass-christal"){
                protection = 10
              }else if(val == "anti-reflactive"){
                protection = 15
              }else if(val == "uv"){
                protection = 30
              }
              generateOutput(size,border,protection)
            })

            function  generateOutput(size,border,protection){

              var h = size[0];
              var w = size[1];

              jq("#printing-size").html(h+"x"+w);

              jq("#final-size").html((h+border)+"x"+(w+border));

              var total_price = .002*border*h*w+protection;
              jq("#final-price").html(total_price.toFixed(2));
            }

            generateOutput(size,border,protection);

          // });

        })();
    });
  });
