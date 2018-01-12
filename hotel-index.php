<?php 
include('user-session.php');
include('connection.php');
error_reporting(0);
?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Hotel-home | Skylift</title>
    
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
        #hotel-list{z-index:1000; float:left;list-style:none;margin-top:1px;padding:0;width:275px;position: absolute;box-shadow:  0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px;}
        #hotel-list li{padding: 10px; background: #fffff0; border-bottom: #bbb9b9 1px solid;}
        #hotel-list li:hover{background:#ece3d2;cursor: pointer;}
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
                        <li class="active"><a href="#hotels-tab" data-toggle="tab">HOTELS</a></li>
                                            
                    </ul>
                    <div class="visible-mobile">
                        <ul id="mobile-search-tabs" class="search-tabs clearfix">
                            <li class="active"><a href="#hotels-tab">HOTELS</a></li>
                                                  
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
                    </div>
                </div>
            </div>
            
            <div class="section">
                <div class="container">
                    <h2>Recommended Hotels</h2>
                    <div class="block image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
                        <ul class="slides image-box listing-style2">
                            <?php
                            $res=mysqli_query($db,"SELECT * FROM `hotels` LIMIT 0,6");
                              while ($cols=mysqli_fetch_array($res)) {
                              $hotel_id=$cols['hotel_id'];
                              $res2=mysqli_query($db,"SELECT * FROM `hotel_images` WHERE `hotel_id`='$hotel_id'");
                              $cols2=mysqli_fetch_array($res2);  

                            ?>
                            <li>
                                <article class="box">
                                    <figure>
                                        <a href="ajax/slideshow-popup.php?id=<?php echo $hotel_id ?>" class="hover-effect popup-gallery"><img src="images/hotels/s_resized0/<?php echo $cols2['img1']; ?>" alt="<?php echo $cols['name']; ?>"  width="270" height="160" /></a>
                                    </figure>
                                    <div class="details">
                                        <form id="push_<?php echo $cols['id']; ?>" method="post" action="hotel-detailed.php">
                                                    <input type="hidden" name="id" value="<?php echo $cols['id']; ?>">
                                                    <a class="pull-right button uppercase" title="" onclick="document.getElementById('push_<?php echo $cols['id']; ?>').submit();">SELECT</a>
                                                </form>
                                        <h4 class="box-title"><?php echo $cols['name']; ?></h4>
                                        <label class="price-wrapper">
                                            <span class="price-per-unit">$<?php echo $cols['price']; ?></span>avg/night
                                        </label>
                                    </div>
                                </article>
                            </li>
                            <?php
                                }

                            ?>
                           
                        </ul>
                    </div>
                    
                    
                    <h2>Travelers Choice of Hotels</h2>
                    <div class="image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
                        <ul class="slides image-box hotel listing-style1">
                            <?php
                            $hot=mysqli_query($db,"SELECT * FROM `hotels` ORDER BY `hotel_id` DESC");
                              while ($cols_hot=mysqli_fetch_array($hot)) {
                              $hot_id=$cols_hot['hotel_id'];
                              $img=mysqli_query($db,"SELECT * FROM `hotel_images` WHERE `hotel_id`='$hot_id' LIMIT 0,6");
                              $hot_img=mysqli_fetch_array($img);  

                            ?>
                            <li>
                                <article class="box">
                                    <figure>
                                        <a href="ajax/slideshow-popup.php?id=<?php echo $hot_id ?>" class="hover-effect popup-gallery"><img src="images/hotels/s_resized0/<?php echo $hot_img['img1']; ?>" alt="<?php echo $cols_hot['name']; ?>"  width="270" height="160" /></a>
                                    </figure>
                                    <div class="details">
                                        <span class="price">
                                            <small>avg/night</small>
                                            $<?php echo $cols_hot['price']; ?>
                                        </span>
                                        <h4 class="box-title"><?php echo $cols_hot['name']; ?><small><?php echo $cols_hot['location']; ?></small></h4>
                                        
                                        <p class="description"><?php echo mb_strimwidth($cols_hot['description'], 0, 110, "..."); ?></p>
                                        <div class="action">
                                            <form id="push_<?php echo $cols_hot['id']; ?>" method="post" action="hotel-detailed.php">
                                                    <input type="hidden" name="id" value="<?php echo $cols_hot['id']; ?>">
                                                    <a class="button btn-small" title="" onclick="document.getElementById('push_<?php echo $cols_hot['id']; ?>').submit();">SELECT</a>
                                                
                                            <a class="button btn-small yellow popup-map" href="#" data-box="<?php echo $cols_hot['latitude']; ?>, <?php echo $cols_hot['longitude']; ?>">VIEW ON MAP</a>
                                            </form>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <?php
                                }

                            ?>
                           
                        </ul>
                    </div>
                </div>
            </div>


            
            <div class="global-map-area promo-box no-margin parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="content-section description pull-right col-sm-9">
                        <div class="table-wrapper hidden-table-sm">
                            <div class="table-cell">
                                <h2 class="m-title animated" data-animation-type="fadeInDown">
                                    Tell us where you would like to go.<br /><em>1,000+ Hotel and Resorts Available!</em>
                                </h2>
                            </div>
                            <div class="table-cell action-section col-md-4 no-float">
                                <form action="hotel-list-view.php" method="post">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-12">
                                            <input type="text" id="hotel-bottom-search-box" name="destination" class="input-text input-large full-width" value="" placeholder="Enter destination or hotel name" />
                                            <div class="card" id="hotel-bottom-suggesstion-box"></div>
                                        </div>
                                        <div class="col-xs-6 col-md-12">
                                            <button class="full-width btn-large animated" data-animation-type="fadeInUp" data-animation-delay="1">search hotels</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="image-container col-sm-4">
                        <img src="images/backgrounds/hotel.png" alt="" width="342" height="258" class="animated" data-animation-type="fadeInUp" data-animation-duration="2" />
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
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false?libraries=places&key=AIzaSyBO5Else2rW4UNyXiCMp3y20JV7BseTMys"></script>
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
    // $("#hotel-bottom-search-box").keyup(function(){
    //     $.ajax({
    //     type: "POST",
    //     url: "php/ajax_hotel.php",
    //     data:'keyword='+$(this).val(),
    //     beforeSend: function(){
    //         $("#hotel-search-box").css("background","#FFF url(php/LoaderIcon.gif) no-repeat 155px");
    //     },
    //     success: function(data){
    //         $("#hotel-bottom-suggesstion-box").show();
    //         $("#hotel-bottom-suggesstion-box").html(data);
    //         $("#hotel-bottom-search-box").css("background","#FFF");
    //     }
    //     });
    // });
  
});
        function HotelselectInfo(val) {
    $("#hotel-search-box").val(val);
    $("#hotel-suggesstion-box").hide();

    }
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

