<?php
session_cache_limiter('private_no_expire');
include('user-session.php');
include('connection.php');
error_reporting(0);

  if (empty($_POST)) {
    header("location:index.php");
    exit();
  }
  $id=$_POST['id'];
  $res=mysqli_query($db,"SELECT * FROM `destinations` WHERE `id`='$id'");
  $cols=mysqli_fetch_array($res);


?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Tour-detailed | Skylift</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="Travel" />
    <meta name="description" content="skylift">
    <meta name="author" content="CodegreedDevelopers">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,500,700' rel='stylesheet' type='text/css'>
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
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Destinations Detailed</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">Destinations Detailed</li>
                </ul>
            </div>
        </div>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-md-9">
                        <div class="tab-container style1" id="hotel-main-content">
                            <ul class="tabs">
                                <li class="active"><a data-toggle="tab" href="#photos-tab">photos</a></li>
                                <li><a data-toggle="tab" href="#map-tab">map</a></li>
                                <li><a data-toggle="tab" href="#steet-view-tab">street view</a></li>                               
                                                               
                            </ul>
                            <div class="tab-content">
                                <div id="photos-tab" class="tab-pane fade in active">
                                     <div class="featured-image image-container">
                                        <img src="images/destinations/resized0/<?php echo $cols['image']; ?>" alt="<?php echo $cols['name']; ?>">
                                    </div>
                                </div>
                                <div id="map-tab" class="tab-pane fade">
                                    
                                </div>
                                <div id="steet-view-tab" class="tab-pane fade" style="height: 500px;">
                                    
                                </div>
                                
                            </div>
                        </div>
                        
                        <div id="hotel-features" class="tab-container">
                            <ul class="tabs">
                                <li class="active"><a href="#hotel-description" data-toggle="tab">Description</a></li>
                               
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="hotel-description">
                                    <div class="intro table-wrapper full-width hidden-table-sms">
                                        <div class="col-sm-5 col-lg-4 features table-cell">
                                            <ul>
                                                <li><label> Destination name:</label><?php echo $cols['name']; ?></li>
                                                <li><label> Country:</label><?php echo $cols['country']; ?></li>
                                                <li><label> City:</label><?php echo $cols['city']; ?></li> 
                                                <?php
                                                if($cols['duration']!=null){ ?>
                                                <li><label> Duration:</label><?php echo $cols['duration']; ?> (approx)</li>
                                                <?php }?>                                             
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="long-description">
                                        <h2>About <?php echo $cols['name']; ?></h2>
                                        <p>
                                           <?php echo $cols['overview']; ?>
                                        </p></br>

                                        <h2>What's Included</h2>
                                        <p>
                                           <?php echo $cols['included']; ?>
                                        </p></br>

                                        <?php
                                        if ($cols['not_included']!=null) {?>
                                         
                                            <h2>What's not Included</h2>
                                            <p>
                                               <?php echo $cols['not_included']; ?>
                                            </p></br>

                                        <?php                                            
                                        }
                                        ?>

                                    </div>
                                </div>
                               
                            </div>
                        
                        </div>
                    </div>
                    <div class="sidebar col-md-3">
                        <article class="detailed-logo">
                            <figure>
                                <img src="images/destinations/resized1/<?php echo $cols['image']; ?>" alt="<?php echo $cols['name']; ?>">
                            </figure>
                            <div class="details">
                                <h2 class="box-title"><?php echo $cols['name']; ?><small><i class="soap-icon-departure yellow-color"></i><span class="fourty-space"><?php echo $cols['city']; ?>,<?php echo $cols['country']; ?></span></small></h2>
                                <span class="price clearfix">
                                    <small class="pull-left">From</small>
                                    <span class="pull-right">$<?php echo $cols['price']; ?></span>
                                </span>
                                <p class="description"><?php echo mb_strimwidth($cols['description'], 0, 160, "..."); ?></p>
                                <form id="push_<?php echo $cols['id']; ?>" method="post" action="hotel-booking.php">
                                    <input type="hidden" name="id" value="<?php echo $cols['id']; ?>">
                                <a onclick="document.getElementById('push_<?php echo $cols['id']; ?>').submit();" class="button yellow full-width uppercase btn-small">check availability</a>
                                </form>

                            </div>
                        </article>
                        
                        <?php include("page_modules/contact-box.php"); ?>

                        <div class="travelo-box">
                            <h4>Suggestions for you</h4>
                            <?php
                            $count=$cols['country'];
                            $id=$cols['id'];
                            $nem=$cols['name'];
                            $loc=$cols['location'];
                            $pri=$cols['price'];

                             $res3=mysqli_query($db,"SELECT * FROM `destinations` WHERE NOT `id`='$id' AND `country` LIKE '%$count%'  LIMIT 0,3");
                             while ($cols3=mysqli_fetch_array($res3)) {  

                            ?>
                            <div class="image-box style14">
                                <article class="box">
                                    <figure>
                                        <form id="push_<?php echo $cols3['id']; ?>" method="post" action="tour-detailed.php">
                                            <input type="hidden" name="id" value="<?php echo $cols3['id']; ?>">
                                            <a onclick="document.getElementById('push_<?php echo $cols['id']; ?>').submit();"><img src="images/destinations/resized2/<?php echo $cols3['image']; ?>" alt="<?php echo $cols3['name']; ?>" /></a>

                                        </form>
                                        
                                    </figure>
                                    <div class="details">
                                        <form id="push_<?php echo $cols3['id']; ?>" method="post" action="tour-detailed.php">
                                            <input type="hidden" name="id" value="<?php echo $cols3['id']; ?>">
                                            <h5 class="box-title"><a onclick="document.getElementById('push_<?php echo $cols3['id']; ?>').submit();"><?php echo $cols3['name']; ?></a></h5>
                                        </form>
                                        
                                        <label class="price-wrapper">
                                            <span class="price-per-unit">$<?php echo $cols3['price']; ?></span>avg/night
                                        </label>

                                    </div>
                                </article>
                            </div><br>
                            <?php }
                            if (mysqli_num_rows($res3)<1) { ?>
                                 <div class="alert alert-error">
                                    <?php echo "Currently there are no Suggestions for you"; ?>
                                    <span class="close"></span>
                                </div>
                                <?php
                                
                            }
                            ?>
                        </div>
                        
                        <div class="travelo-box book-with-us-box">
                            <h4>Why Book with us?</h4>
                            <ul>
                                <li>
                                    <i class="soap-icon-hotel-1 circle"></i>
                                    <h5 class="title"><a href="#">1,000+ Destinations</a></h5>
                                    <p>Browse through variety of destinations you can visit.</p>
                                </li>
                                <li>
                                    <i class="soap-icon-support circle"></i>
                                    <h5 class="title"><a href="#">Excellent Support</a></h5>
                                    <p>We have 24/7 support from our team in case of anything.</p>
                                </li>
                            </ul>
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
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false?libraries=places&key=AIzaSyBO5Else2rW4UNyXiCMp3y20JV7BseTMys"></script>
    
    <script type="text/javascript" src="js/calendar.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="js/theme-scripts.js"></script>
    
    <script type="text/javascript">
        tjq(document).ready(function() {
            // calendar panel
            var cal = new Calendar();
            var unavailable_days = [17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
            var price_arr = {3: '$170', 4: '$170', 5: '$170', 6: '$170', 7: '$170', 8: '$170', 9: '$170', 10: '$170', 11: '$170', 12: '$170', 13: '$170', 14: '$170', 15: '$170', 16: '$170', 17: '$170'};

            var current_date = new Date();
            var current_year_month = (1900 + current_date.getYear()) + "-" + (current_date.getMonth() + 1);
            tjq("#select-month").find("[value='" + current_year_month + "']").prop("selected", "selected");
            cal.generateHTML(current_date.getMonth(), (1900 + current_date.getYear()), unavailable_days, price_arr);
            tjq(".calendar").html(cal.getHTML());
            
            tjq("#select-month").change(function() {
                var selected_year_month = tjq("#select-month option:selected").val();
                var year = parseInt(selected_year_month.split("-")[0], 10);
                var month = parseInt(selected_year_month.split("-")[1], 10);
                cal.generateHTML(month - 1, year, unavailable_days, price_arr);
                tjq(".calendar").html(cal.getHTML());
            });
            
            
            tjq(".goto-writereview-pane").click(function(e) {
                e.preventDefault();
                tjq('#hotel-features .tabs a[href="#hotel-write-review"]').tab('show')
            });
            
            // editable rating
            tjq(".editable-rating.five-stars-container").each(function() {
                var oringnal_value = tjq(this).data("original-stars");
                if (typeof oringnal_value == "undefined") {
                    oringnal_value = 0;
                } else {
                    //oringnal_value = 10 * parseInt(oringnal_value);
                }
                tjq(this).slider({
                    range: "min",
                    value: oringnal_value,
                    min: 0,
                    max: 5,
                    slide: function( event, ui ) {
                        
                    }
                });
            });
        });
        
        tjq('a[href="#map-tab"]').on('shown.bs.tab', function (e) {
            var center = panorama.getPosition();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
        tjq('a[href="#steet-view-tab"]').on('shown.bs.tab', function (e) {
            fenway = panorama.getPosition();
            panoramaOptions.position = fenway;
            panorama = new google.maps.StreetViewPanorama(document.getElementById('steet-view-tab'), panoramaOptions);
            map.setStreetView(panorama);
        });
        var map = null;
        var panorama = null;
        var fenway = new google.maps.LatLng(<?php echo $cols['latitude']; ?>, <?php echo $cols['longitude']; ?>);
        var mapOptions = {
            center: fenway,
            zoom: 16
        };
        var panoramaOptions = {
            position: fenway,
            pov: {
                heading: 34,
                pitch: 10
            }
        };
        function initialize() {
            tjq("#map-tab").height(tjq("#hotel-main-content").width() * 0.6);
            map = new google.maps.Map(document.getElementById('map-tab'), mapOptions);
            panorama = new google.maps.StreetViewPanorama(document.getElementById('steet-view-tab'), panoramaOptions);
            map.setStreetView(panorama);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        
    </script>
</body>
</html>

