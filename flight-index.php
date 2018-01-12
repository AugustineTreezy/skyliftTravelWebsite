<?php 
include('user-session.php');
include('connection.php');
error_reporting(0);
$res=mysqli_query($db,"SELECT * FROM `flights` ORDER BY `depart_date` ASC LIMIT 3");
$num=mysqli_num_rows($res);
?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Flight-home | Skylift</title>
    
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
        #flight-list{z-index:1000; float:left;list-style:none;margin-top:1px;padding:0;width:375px;position: absolute;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);border-radius: 5px;}
        #flight-list li{padding: 10px; background: #fffff0; border-bottom: #bbb9b9 1px solid;}
        #flight-list li:hover{background:#ece3d2;cursor: pointer;}
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
                        <li class="active"><a href="#flights-tab" data-toggle="tab">FLIGHTS</a></li>                                  
                    </ul>
                    <div class="visible-mobile">
                        <ul id="mobile-search-tabs" class="search-tabs clearfix">                            
                            <li class="active"><a href="#flights-tab">FLIGHTS</a></li>                                                    
                        </ul>
                    </div>
                    
                    <div class="search-tab-content">
                        
                        <div class="tab-pane fade active in" id="flights-tab">
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
                    </div>
                </div>
            </div>
            
            <div class="section">
                <div class="container">
                    <h2>Featured Flight Deals</h2>
                    <div class="image-box style11 block">
                        <div class="row">
                            <?php
                                while ($cols=mysqli_fetch_array($res)) {
                                $airline=$cols['airline'];
                                $res2=mysqli_query($db,"SELECT * FROM `flight_desc` WHERE `name`='$airline'");
                                $cols2=mysqli_fetch_array($res2);                    

                                ?>
                            <div class="col-sm-4">
                                <article class="box">
                                    <figure class="animated" data-animation-type="fadeInDown">
                                        <form id="push_<?php echo $cols['id']; ?>" method="post" action="flight-detailed.php">
                                            <input type="hidden" name="id" value="<?php echo $cols['id']; ?>">                                      
                                        <a onclick="document.getElementById('push_<?php echo $cols['id']; ?>').submit();"><img alt="<?php echo $cols2['name']; ?>" src="images/flights/s_resized0/<?php echo $cols2['image']; ?>"></a>
                                          </form>
                                        <figcaption>
                                            <h3 class="caption-title"><?php echo $cols['going_to']; ?></h3>
                                            <span><?php echo $cols['airline']; ?></span>
                                        </figcaption>
                                    </figure>
                                    <div class="details">
                                        <span class="price">
                                            <small>From</small>$<?php echo $cols['price']; ?>
                                        </span>
                                        <div class="icon-box style11">
                                            <div class="icon-wrapper">
                                                <i class="soap-icon-plane-right takeoff-effect circle"></i>
                                            </div>
                                            <div class="details">
                                                <h4 class="box-title"><?php echo $cols['leaving_from']; ?> to <?php echo $cols['going_to']; ?><small><?php echo $cols['trip']; ?> flight</small></h4>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <?php
                                  }                 
                  
                               ?>
                        </div>
                    </div>
                    
                    <h2>Cheap Flights &amp; Air Tickets</h2>
                    <div class="image-carousel style2 block" data-animation="slide" data-item-width="270" data-item-margin="30">
                        <ul class="slides image-box listing-style2 flight">
                            <?php 
                            $c_res=mysqli_query($db,"SELECT * FROM `flights` ORDER BY `price` ASC LIMIT 8");
                            $c_num=mysqli_num_rows($c_res);
                            while ($c_cols=mysqli_fetch_array($c_res)) {
                                $c_airline=$c_cols['airline'];
                                $c_res2=mysqli_query($db,"SELECT * FROM `flight_desc` WHERE `name`='$c_airline'");
                                $c_cols2=mysqli_fetch_array($c_res2); 
                            ?>                            
                           
                            <li>
                                <article class="box">
                                    <figure>
                                        <span><img alt="<?php echo $c_cols2['name']; ?>" src="images/flights/s_resized1/<?php echo $c_cols2['image']; ?>" width="270" height="160" /></span>
                                    </figure>
                                    <div class="details">
                                        <form id="push_<?php echo $c_cols['id']; ?>" method="post" action="flight-detailed.php">
                                            <input type="hidden" name="id" value="<?php echo $c_cols['id']; ?>">                                      
                                        <a onclick="document.getElementById('push_<?php echo $c_cols['id']; ?>').submit();" class="pull-right button btn-mini uppercase">select</a>
                                          </form>
                                        <h4 class="box-title"><?php echo $c_cols['going_to']; ?></h4>
                                        <label class="price-wrapper">
                                            <span class="price-per-unit">$<?php echo $c_cols['price']; ?></span>oneway
                                        </label>
                                    </div>
                                </article>
                                </li>
                                <?php
                                } 

                                ?>
                            
                        </ul>
                    </div>

            </div>
            
            <div class="global-map-area promo-box no-margin parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="content-section description pull-right col-sm-9">
                        <div class="table-wrapper hidden-table-sm">
                            <div class="table-cell">
                                <h2 class="m-title">
                                    Comfortable and modern flight experience.<br /><em>400+ Airlines to Travel The World!</em>
                                </h2>
                            </div>
                            <div class="table-cell action-section col-md-4 no-float">
                                <form method="post" action="flight-list-view.php">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-12">
                                            <input type="text" class="input-text input-large full-width" value="" placeholder="Enter destination or hotel name" />
                                        </div>
                                        <div class="col-xs-6 col-md-12">
                                            <button class="full-width btn-large">search flights</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="image-container col-sm-4">
                        <img src="images/backgrounds/air-hostess.png" alt="" class="animated" data-animation-type="fadeInUp" />
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
            });
        function FlightFromselectInfo(val) {

        $("#flight-frm-search-box").val(val);
        $("#flight-frm-suggesstion-box").hide();

        }
        function FlightToselectInfo(val) {

        $("#flight-to-search-box").val(val);
        $("#flight-to-suggesstion-box").hide();
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

