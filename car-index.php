<?php 
include('user-session.php');
include('connection.php');
error_reporting(0);
$res=mysqli_query($db,"SELECT * FROM `cars` LIMIT 0,7");
$num=mysqli_num_rows($res);
?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Car-Home | Skylift</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="Travel" />
    <meta name="description" content="skylift">
    <meta name="author" content="CodegreedDevelopers">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.min.css">
    
    <!-- Current Page Styles -->
    <link rel="stylesheet" type="text/css" href="components/revolution_slider/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/revolution_slider/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/jquery.bxslider/jquery.bxslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/flexslider/flexslider.css" media="screen" />

  
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="css/style.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="css/updates.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="css/responsive.css">

    <style type="text/css">
        #cars-list{z-index:1000; float:left;list-style:none;margin-top:1px;padding:0;width:375px;position: absolute;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px;}
        #cars-list li{padding: 10px; background: #fffff0; border-bottom: #bbb9b9 1px solid;}
        #cars-list li:hover{background:#ece3d2;cursor: pointer;}
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
                        <li class="active"><a href="#cars-tab" data-toggle="tab">CARS</a></li>                         
                                                
                    </ul>
                    <div class="visible-mobile">
                        <ul id="mobile-search-tabs" class="search-tabs clearfix">                       
                            <li class="active"><a href="#cars-tab">CARS</a></li>
                                                                            
                        </ul>
                    </div>
                    
                    <div class="search-tab-content">
                    
                        <div class="tab-pane fade active in" id="cars-tab">
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
                                            <label>Pick-Up Date / Time</label>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="datepicker-wrap">
                                                        <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Drop-Off Date / Time</label>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="datepicker-wrap">
                                                        <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="selector">
                                                        <label>&nbsp;</label>
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
            <div class="section gray-area text-left">
                <div class="container">
                    
                    <h2>Top Hire Cars</h2>
                    <div class="block image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
                        <ul class="slides image-box style1">
                            <?php
                                while ($cols=mysqli_fetch_array($res)) {  
                                $car_id=$cols['car_id'];
                                $res2=mysqli_query($db,"SELECT * FROM `car_images` WHERE `car_id`='$car_id'");
                                $cols2=mysqli_fetch_array($res2);                 

                                ?> 
                            <li>
                                <article class="box">
                                    <figure>
                                        <a class="hover-effect" title="" href="ajax/slideshow-popup.php?id=<?php echo $car_id ?>"><img width="270" height="160" src="images/cars/resized0/<?php echo $cols2['img1']; ?>" alt="<?php echo $cols['name']; ?>"></a>
                                    </figure>
                                    <div class="details">
                                        <span class="price"><small>FROM</small>$<?php echo $cols['price']; ?></span>
                                        <form id="push_<?php echo $cols['id']; ?>" method="post" action="car-detailed.php">
                                            <h4 class="box-title"><a onclick="document.getElementById('push_<?php echo $cols['id']; ?>').submit();"><?php echo $cols['name']; ?></a><small>Per Day</small></h4>

                                            <input type="hidden" name="id" value="<?php echo $cols['id']; ?>">                                       
                                         </form>
                                        
                                    </div>
                                </article>
                            </li>
                             <?php
                              }
                            ?>
                          
                        </ul>
                    </div>
                    
                    <div class="block row">
                        <div class="col-md-4">
                            <h2>Last Minute Deals</h2>
                            <div class="travelo-box image-box style13"> 
                            <?php
                                $l_res=mysqli_query($db,"SELECT * FROM `cars` ORDER BY `pick_date` ASC LIMIT 0,4");
                                while ($l_cols=mysqli_fetch_array($l_res)) {  
                                $l_car_id=$l_cols['car_id'];
                                $l_res2=mysqli_query($db,"SELECT * FROM `car_images` WHERE `car_id`='$l_car_id'");
                                $l_cols2=mysqli_fetch_array($l_res2);                 

                                ?>                               
                                <div class="box">
                                    <figure>
                                        <img width="63" height="59" alt="<?php echo $l_cols['name']; ?>" src="images/cars/s_resized3/<?php echo $l_cols2['img1']; ?>">
                                    </figure>
                                    <div class="action">
                                        <span class="price"><small>per day</small>$<?php echo $l_cols['price']; ?></span>
                                    </div>
                                    <div class="details">                                        
                                        <form id="push_<?php echo $l_cols['id']; ?>" method="post" action="car-detailed.php">
                                            <h4 class="box-title"><a onclick="document.getElementById('push_<?php echo $l_cols['id']; ?>').submit();"><?php echo $l_cols['name']; ?><small><?php echo $l_cols['type']; ?></small></a></h4>

                                            <input type="hidden" name="id" value="<?php echo $l_cols['id']; ?>">                                       
                                         </form>
                               <!--          <span class="time skin-color"><i class="soap-icon-clock"></i>24 hours remaining</span> -->
                                    </div>
                                </div><br>
                                <?php
                              }
                            ?>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <h2>Explore More</h2>
                            <div class="travelo-box explore-more image-box style5 clearfix">
                                <div class="icon-box intro">
                                    <i class="soap-icon-recommend circle"></i>
                                    <h5 class="box-title"><small>Recommended for you!</small>Car Packages Starting at $99.00</h5>
                                </div>
                                <?php
                                $r_res=mysqli_query($db,"SELECT * FROM `cars` WHERE `price` >=100 ORDER BY `price` ASC LIMIT 0,4");
                                while ($r_cols=mysqli_fetch_array($r_res)) {  
                                $r_car_id=$r_cols['car_id'];
                                $r_res2=mysqli_query($db,"SELECT * FROM `car_images` WHERE `car_id`='$r_car_id'");
                                $r_cols2=mysqli_fetch_array($r_res2);                 

                                ?> 
                                <article class="box animated" data-animation-type="fadeIn" data-animation-delay="0">
                                    <figure>
                                        <form id="push_<?php echo $r_cols['id']; ?>" method="post" action="car-detailed.php">
                                            <input type="hidden" name="id" value="<?php echo $r_cols['id']; ?>">                                       
                                        <a onclick="document.getElementById('push_<?php echo $r_cols['id']; ?>').submit();"><img width="183" height="120" alt="<?php echo $r_cols['name']; ?>" src="images/cars/s_resized0/<?php echo $r_cols2['img1']; ?>"></a>
                                         </form>
                                        <figcaption>
                                            <h6 class="caption-title"><?php echo $r_cols['name']; ?></h6>
                                            <span>$<?php echo $r_cols['price']; ?></span>
                                        </figcaption>
                                    </figure>
                                </article>
                                <?php
                              }
                            ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h2>Why Book with us?</h2>
                             <div class="travelo-box book-with-us-box">
                            <h4>Why Book with us?</h4>
                            <ul>
                                <li>
                                    <i class="soap-icon-car-1 circle"></i>
                                    <h5 class="title"><a href="#">5,000+ Cars</a></h5>
                                    <p>Browse through our large collection of cars.</p>
                                </li>
                                
                                <li>
                                    <i class="soap-icon-support circle"></i>
                                    <h5 class="title"><a href="#">Excellent Support</a></h5>
                                    <p>Experience full support from our team.</p>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="global-map-area promo-box no-margin parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="table-wrapper hidden-table-sm">
                        <div class="content-section description pull-right col-sm-9">
                            <div class="table-wrapper hidden-table-sm">
                                <div class="table-cell">
                                    <h2 class="m-title">
                                        Tell us where you would like to go.<br /><em>3,000+ VIP Transport Options!</em>
                                    </h2>
                                </div>
                                <div class="table-cell action-section col-md-4 no-float">
                                    <form method="post" action="car-list-view.php">
                                        <div class="row">
                                            <div class="col-xs-6 col-md-12">
                                                <input type="text" class="input-text input-large full-width" value="" placeholder="Enter destination or hotel name" />
                                            </div>
                                            <div class="col-xs-6 col-md-12">
                                                <button class="full-width btn-large">search options</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="image-container col-sm-4">
                            <img width="292" height="269" alt="" src="images/backgrounds/cars.png" class="animated" data-animation-type="fadeInUp">
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
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    <!-- load revolution slider scripts -->
    <script type="text/javascript" src="components/revolution_slider/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- load BXSlider scripts -->
    <script type="text/javascript" src="components/jquery.bxslider/jquery.bxslider.min.js"></script>
    
    <!-- load FlexSlider scripts -->
    <script type="text/javascript" src="components/flexslider/jquery.flexslider-min.js"></script>
    
    <!-- Google Map Api -->
    <script type='text/javascript' src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script type="text/javascript" src="js/gmap3.min.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="js/theme-scripts.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
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
            });
    </script>
    
    <script type="text/javascript">
        tjq(document).ready(function() {
            tjq('.revolution-slider').revolution(
            {
                dottedOverlay:"none",
                delay:9000,
                startwidth:1200,
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

