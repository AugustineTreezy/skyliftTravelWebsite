<?php 
include('user-session.php');
include('connection.php');
error_reporting(0);
?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Skylift | World Travel</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="Travel" />
    <meta name="description" content="skylift">
    <meta name="author" content="CodegreedDevelopers">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.min.css">
    
    <!-- Current Page Styles -->
    <link rel="stylesheet" type="text/css" href="components/revolution_slider/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/revolution_slider/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/jquery.bxslider/jquery.bxslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/flexslider/flexslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="css/style.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="css/updates.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="css/updates.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="css/responsive.css">

    <style type="text/css">

#hotel-list{z-index:1000; float:left;list-style:none;margin-top:1px;padding:0;width:275px;position: absolute;box-shadow:  0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px;}
#hotel-list li{padding: 10px; background: #fffff0; border-bottom: #bbb9b9 1px solid;}
#hotel-list li:hover{background:#ece3d2;cursor: pointer;}

#flight-list{z-index:1000; float:left;list-style:none;margin-top:1px;padding:0;width:375px;position: absolute;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px;}
#flight-list li{padding: 10px; background: #fffff0; border-bottom: #bbb9b9 1px solid;}
#flight-list li:hover{background:#ece3d2;cursor: pointer;}

#cars-list{z-index:1000; float:left;list-style:none;margin-top:1px;padding:0;width:375px;position: absolute;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px;}
#cars-list li{padding: 10px; background: #fffff0; border-bottom: #bbb9b9 1px solid;}
#cars-list li:hover{background:#ece3d2;cursor: pointer;}

#tour-list{z-index:1000; float:left;list-style:none;margin-top:1px;padding:0;width:275px;position: absolute;box-shadow:  0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px;}
#tour-list li{padding: 10px; background: #fffff0; border-bottom: #bbb9b9 1px solid;}
#tour-list li:hover{background:#ece3d2;cursor: pointer;}

    </style>
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->

    <!-- Javascript Page Loader -->
    <!-- <script type="text/javascript" src="js/pace.min.js" data-pace-options='{ "ajax": false }'></script>
    <script type="text/javascript" src="js/page-loading.js"></script -->
</head>
<body>
    <div id="page-wrapper">
        <?php
            include('page_modules/header.php');
        ?>
        <div id="slideshow">
            <div class="fullwidthbanner-container">
                <div class="revolution-slider" style="height: 0; overflow: hidden;">
                    <ul>    <!-- SLIDE  -->
                        <!-- Slide1 -->
                        <li data-transition="zoomin" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/home1.jpg" alt="">
                        </li>
                        
                        <!-- Slide2 -->
                        <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/home2.jpg" alt="">
                        </li>
                        
                        <!-- Slide3 -->
                        <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/home3.jpg" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            
        <section id="content">
            <div class="search-box-wrapper">
                <div class="search-box container">
                    <ul class="search-tabs clearfix">
                        <li class="active"><a href="#hotels-tab" data-toggle="tab">HOTELS</a></li>
                        <li><a href="#flights-tab" data-toggle="tab">FLIGHTS</a></li>                        
                        <li><a href="#cars-tab" data-toggle="tab">CARS</a></li>
                        <li><a href="#tours-tab" data-toggle="tab">TOURS</a></li>           
                                                
                    </ul>
                    <div class="visible-mobile">
                        <ul id="mobile-search-tabs" class="search-tabs clearfix">
                            <li class="active"><a href="#hotels-tab">HOTELS</a></li>
                            <li><a href="#flights-tab">FLIGHTS</a></li>                            
                            <li><a href="#cars-tab">CARS</a></li>
                            <li><a href="#tours-tab">TOURS</a></li>
                                                        
                        </ul>
                    </div>
                    
                    <div class="search-tab-content">
                        <div class="tab-pane fade active in" id="hotels-tab">
                            <form action="hotel-list-view.php" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-3">
                                        <h4 class="title">Where</h4>
                                        <label>Your Destination</label>
                                        <input id="hotel-search-box" type="text" name="destination" class="input-text full-width search" placeholder="enter a hotel name" required/>
                                        <div class="card" id="hotel-suggesstion-box"></div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label>Check In</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="check_in" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Check Out</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="check_out" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-6 col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button type="submit" class="full-width icon-check animated" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="flights-tab">
                            <form action="flight-list-view.php" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Leaving From</label>
                                            <input type="text" id="flight-frm-search-box" name="leaving_frm" class="input-text full-width" placeholder="city, distirct or specific airpot" required />
                                            <div class="card" id="flight-frm-suggesstion-box"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Going To</label>
                                            <input type="text" id="flight-to-search-box" name="going_to" class="input-text full-width" placeholder="city, distirct or specific airpot" required/>
                                            <div class="card" id="flight-to-suggesstion-box"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <label>Departing On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="depart_frm" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                           
                                            <div class="col-xs-6 pull-right">
                                                <label>&nbsp;</label>
                                                <button type="submit" class="full-width icon-check animated" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="tours-tab">
                            <form action="tour-list-view.php" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-3">
                                        <h4 class="title">Where</h4>
                                        <label>Your Destination</label>
                                        <input id="tour-search-box" type="text" name="destination" class="input-text full-width search" placeholder="enter a destination or place" required/>
                                        <div class="card" id="tour-suggesstion-box"></div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6 col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button type="submit" class="full-width icon-check animated" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                                                
                        <div class="tab-pane fade" id="cars-tab">
                            <form action="car-list-view.php" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Pick Up</label>
                                            <input type="text" name="pick_up_location" id="pick_up_location_search" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                            <div class="card" id="pick-up-suggesstion-box"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Drop Off</label>
                                            <input type="text" name="drop_off_location" id="drop_off_location_search" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                            <div class="card" id="drop-off-suggesstion-box"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <div class="form-group">
                                            <label>Pick-Up Date</label>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="pick_up_date" class="input-text full-width" placeholder="mm/dd/yy" />
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Drop-Off Date</label>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="drop_off_date" class="input-text full-width" placeholder="mm/dd/yy" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="selector">                                                
                                                <button type="submit" class="full-width icon-check animated" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </form>
                        </div>
                         
                    </div>
                </div>
            </div>
            
            <!-- Popuplar Destinations -->
            <div class="destinations section">
                <div class="container">
                    <h2>Popular Destinations</h2>
                    <div class="row image-box style1 add-clearfix">
                        <?php
                            $res=mysqli_query($db,"SELECT * FROM `hotels` LIMIT 0,4");
                              while ($cols=mysqli_fetch_array($res)) {
                              $hotel_id=$cols['hotel_id'];
                              $res2=mysqli_query($db,"SELECT * FROM `hotel_images` WHERE `hotel_id`='$hotel_id'");
                              $cols2=mysqli_fetch_array($res2);  

                            ?>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
                                    <a href="ajax/slideshow-popup.php?id=<?php echo $hotel_id ?>" class="hover-effect popup-gallery"><img src="images/hotels/s_resized0/<?php echo $cols2['img1']; ?>" alt="<?php echo $cols['name']; ?>"  width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>FROM</small>$<?php echo $cols['price']; ?></span>
                                    <form id="push_<?php echo $cols['id']; ?>" method="post" action="hotel-detailed.php">
                                        <input type="hidden" name="id" value="<?php echo $cols['id']; ?>">
                                        <h4 class="box-title"><a onclick="document.getElementById('push_<?php echo $cols['id']; ?>').submit();"><?php echo $cols['name']; ?><small><?php echo $cols['country']; ?></small></a></h4>
                                    </form>
                                    
                                </div>
                            </article>
                        </div>
                        <?php
                            }

                        ?>
                    </div>
                </div>
            </div>
            
            <!-- Honeymoon -->
            <div class="honeymoon section global-map-area promo-box parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="col-sm-6 content-section description pull-right">
                        <h1 class="title">Popular Destinations for Honeymoon</h1>
                        <p>Enjoy your honeymoon with your loved one in one of this places.</p>
                        <div class="row places image-box style9">
                            <?php
                            $d_res=mysqli_query($db,"SELECT * FROM `destinations` LIMIT 0,3");
                              $d_num=mysqli_num_rows($d_res);
                              while ($d_cols=mysqli_fetch_array($d_res)) {
                                $d_tour_id=$d_cols['tour_id'];  

                            ?>
                            <div class="col-xs-4">
                                <article class="box">
                                    <figure>
                                        <form id="push_<?php echo $d_cols['id']; ?>" method="post" action="tour-detailed.php">
                                                <input type="hidden" name="id" value="<?php echo $d_cols['id']; ?>">
                                                <a  onclick="document.getElementById('push_<?php echo $d_cols['id']; ?>').submit();" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1">
                                            <img src="images/destinations/resized0/<?php echo $d_cols['image']; ?>" alt="<?php echo $d_cols['name']; ?>" /></a>
                                        </form>
                                        
                                    </figure>
                                    <div class="details">
                                        <h4 class="box-title"><?php echo $d_cols['country']; ?></h4>
                                        <form id="push_<?php echo $d_cols['id']; ?>" method="post" action="tour-detailed.php">
                                            <input type="hidden" name="id" value="<?php echo $d_cols['id']; ?>">
                                         <a onclick="document.getElementById('push_<?php echo $d_cols['id']; ?>').submit();" title="" class="button">SEE ALL</a>
                                        </form>
                                        
                                    </div>
                                </article>
                            </div>
                            <?php
                                  }                 
                  
                                  if(mysqli_num_rows($res)<1){
                                  echo"Destinations not available currently.Come back later";
                                    }
                               ?>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 image-container no-margin">
                        <img src="images/backgrounds/honeymoon.png" alt="" class="animated" data-animation-type="fadeInUp" data-animation-duration="2">
                    </div>
                </div>
            </div>
            
            <!-- Did you Know? section -->
            <div class="offers section">
                <div class="container">
                    <h1 class="text-center">More deals</h1>
                    <p class="col-xs-9 center-block no-float text-center">Check below for things you are interested and enjoy our convinient services.</p>
                    <div class="row image-box style2">
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                                    <a href="car-index.php" title=""><img src="images/backgrounds/cars.png" alt="cars" width="270" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4>Hire Cars</h4>
                                    <p>Choose from our large collection of cars and hire in a click of button.</p>
                                    <a href="car-index.php" title="" class="button">SEE ALL</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
                                    <a href="hotel-index.php" title=""><img src="images/backgrounds/hotel-home.png" alt="" width="270" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4>Book Hotel</h4>
                                    <p>Book a hotel from our large collection of hotels from all over the world.</p>
                                    <a href="hotel-index.php" title="" class="button">SEE ALL</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                                    <a href="flight-index.php" title=""><img src="images/backgrounds/flight.png" alt="" width="270" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4>Book Flight</h4>
                                    <p>Choose your favourite flight and enjoy he flight experience.</p>
                                    <a href="flight-index.php" title="" class="button">SEE ALL</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
                                    <a href="tour-index.php" title=""><img src="images/backgrounds/tour.png" alt="" width="270" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4>Book Tour</h4>
                                    <p>Choose from many destinations to spend holidays or for an adventure.</p>
                                    <a href="tour-index.php" title="" class="button">SEE ALL</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Features section -->
            <div class="features section global-map-area parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row image-box style7">
                        <div class="col-sms-6 col-sm-6 col-md-4">
                            <article class="box">
                                <figure class="middle-block">
                                    <img src="images/backgrounds/best-price.png" alt="Best price" class="middle-item" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4><a href="#">Best Price Guarantee</a></h4>
                                    <p>
                                        We offer you the best prices ever when booking or hiring with us.
                                    </p>
                                </div>
                            </article>
                        </div>
                    
                        <div class="col-sms-6 col-sm-6 col-md-4">
                             <article class="box">
                                <figure class="middle-block">
                                    <img src="images/backgrounds/why-choose-us.png" alt="" class="middle-item" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4><a href="#">Why Chose Us</a></h4>
                                    <p>
                                        Browse through our large collection of hotels, cars, flights and tours.
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-4">
                             <article class="box">
                                <figure class="middle-block">
                                    <img src="images/backgrounds/help.png" alt="" class="middle-item" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4><a href="#">Need Help?</a></h4>
                                    <p>
                                        Contact us in need of help.Our support team is 24/7 available.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <?php
            include('page_modules/footer.php');
       ?>
    </div>


    <!-- Javascript -->
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.noconflict.js"></script>
    <script type="text/javascript" src="js/modernizr.2.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="js/jquery-ui.1.10.4.min.js"></script>
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <!-- load revolution slider scripts -->
    <script type="text/javascript" src="components/revolution_slider/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- load BXSlider scripts -->
    <script type="text/javascript" src="components/jquery.bxslider/jquery.bxslider.min.js"></script>

    <!-- Flex Slider -->
    <script type="text/javascript" src="components/flexslider/jquery.flexslider.js"></script>

    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>

    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="js/theme-scripts.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <!-- Plugin js for this page-->
  <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <script>
$(document).ready(function(){
    $("#hotel-search-box").keyup(function(){
        $.ajax({
        type: "POST",
        url: "php/ajax_hotel.php",
        data:'keyword='+$(this).val(),
        beforeSend: function(){
            $("#hotel-search-box").css("background","#FFF url(php/LoaderIcon.gif) no-repeat 155px");
        },
        success: function(data){
            $("#hotel-suggesstion-box").show();
            $("#hotel-suggesstion-box").html(data);
            $("#hotel-search-box").css("background","#FFF");
        }
        });
    });
    $("#flight-frm-search-box").keyup(function(){
        $.ajax({
        type: "POST",
        url: "php/ajax_flight_from.php",
        data:'keyword='+$(this).val(),
        beforeSend: function(){
            $("#flight-frm-search-box").css("background","#FFF url(php/LoaderIcon.gif) no-repeat 155px");
        },
        success: function(data){
            $("#flight-frm-suggesstion-box").show();
            $("#flight-frm-suggesstion-box").html(data);
            $("#flight-frm-search-box").css("background","#FFF");
        }
        });
    });
    $("#flight-to-search-box").keyup(function(){
        $.ajax({
        type: "POST",
        url: "php/ajax_flight_to.php",
        data:'keyword='+$(this).val(),
        beforeSend: function(){
            $("#flight-to-search-box").css("background","#FFF url(php/LoaderIcon.gif) no-repeat 155px");
        },
        success: function(data){
            $("#flight-to-suggesstion-box").show();
            $("#flight-to-suggesstion-box").html(data);
            $("#flight-to-search-box").css("background","#FFF");
        }
        });
    });
   
    $("#pick_up_location_search").keyup(function(){
        $.ajax({
        type: "POST",
        url: "php/ajax_car_pick_up.php",
        data:'keyword='+$(this).val(),
        beforeSend: function(){
            $("#pick_up_location_search").css("background","#FFF url(php/LoaderIcon.gif) no-repeat 155px");
        },
        success: function(data){
            $("#pick-up-suggesstion-box").show();
            $("#pick-up-suggesstion-box").html(data);
            $("#pick_up_location_search").css("background","#FFF");
        }
        });
    });
    $("#drop_off_location_search").keyup(function(){
        $.ajax({
        type: "POST",
        url: "php/ajax_car_drop_off.php",
        data:'keyword='+$(this).val(),
        beforeSend: function(){
            $("#pick_up_location_search").css("background","#FFF url(php/LoaderIcon.gif) no-repeat 155px");
        },
        success: function(data){
            $("#drop-off-suggesstion-box").show();
            $("#drop-off-suggesstion-box").html(data);
            $("#drop_off_location_search").css("background","#FFF");
        }
        });
    });
    $("#tour-search-box").keyup(function(){
        $.ajax({
        type: "POST",
        url: "php/ajax_tour.php",
        data:'keyword='+$(this).val(),
        beforeSend: function(){
            $("#tour-search-box").css("background","#FFF url(php/LoaderIcon.gif) no-repeat 155px");
        },
        success: function(data){
            $("#tour-suggesstion-box").show();
            $("#tour-suggesstion-box").html(data);
            $("#tour-search-box").css("background","#FFF");
        }
        });
    });
});

function HotelselectInfo(val) {
$("#hotel-search-box").val(val);
$("#hotel-suggesstion-box").hide();

}
function FlightFromselectInfo(val) {

$("#flight-frm-search-box").val(val);
$("#flight-frm-suggesstion-box").hide();

}
function FlightToselectInfo(val) {

$("#flight-to-search-box").val(val);
$("#flight-to-suggesstion-box").hide();
}
function PickUpselectInfo(val) {

$("#pick_up_location_search").val(val);
$("#pick-up-suggesstion-box").hide();
}
function DropOffselectInfo(val) {

$("#drop_off_location_search").val(val);
$("#drop-off-suggesstion-box").hide();
}
function TourselectInfo(val) {

$("#tour-search-box").val(val);
$("#tour-suggesstion-box").hide();
}
</script>
    
    <script type="text/javascript">
        tjq(document).ready(function() {
            tjq('.revolution-slider').revolution(
            {
                dottedOverlay:"none",
                delay:8000,
                startwidth:1170,
                startheight:646,
                onHoverStop:"on",
                hideThumbs:10,
                fullWidth:"on",
                forceFullWidth:"on",
                navigationType:"none",
                shadow:0,
                spinner:"spinner4",
                hideTimerBar:"on",
            });
        });
    </script>
</body>
</html>

