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
  $res=mysqli_query($db,"SELECT * FROM `cars` WHERE `id`='$id'");
  $cols=mysqli_fetch_array($res); 
  $car_id=$cols['car_id'];
  $res2=mysqli_query($db,"SELECT * FROM `car_images` WHERE `car_id`='$car_id'");
  $cols2=mysqli_fetch_array($res2); 
?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Car-detailed | Skylift</title>
    
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
                    <h2 class="entry-title">Car Detailed</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">Car Detailed</li>
                </ul>
            </div>
        </div>
        <section id="content" class="gray-area">
            <div class="container car-detail-page">
                <div class="row">
                    <div id="main" class="col-md-9">
                        <div id="photos-tab" class="tab-pane fade in active">

                                    <div class="photo-gallery style1" data-animation="slide" data-sync="#photos-tab .image-carousel">
                                        <ul class="slides">
                                            <li><img src="images/cars/resized0/<?php echo $cols2['img1']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
                                            <li><img src="images/cars/resized0/<?php echo $cols2['img2']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
                                            <li><img src="images/cars/resized0/<?php echo $cols2['img3']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
                                            <li><img src="images/cars/resized0/<?php echo $cols2['img4']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
                                            <li><img src="images/cars/resized0/<?php echo $cols2['img5']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
                                            <li><img src="images/cars/resized0/<?php echo $cols2['img6']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="image-carousel style1" data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#photos-tab .photo-gallery">
                                        <ul class="slides">
                                            <li><img src="images/cars/resized1/<?php echo $cols2['img1']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
                                            <li><img src="images/cars/resized1/<?php echo $cols2['img2']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
                                            <li><img src="images/cars/resized1/<?php echo $cols2['img3']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
                                            <li><img src="images/cars/resized1/<?php echo $cols2['img4']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
                                            <li><img src="images/cars/resized1/<?php echo $cols2['img5']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
                                            <li><img src="images/cars/resized1/<?php echo $cols2['img6']; ?>" alt="<?php echo $cols['name']; ?>" /></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                        <div class="tab-container">
                            <ul class="tabs">
                                <li class="active">
                                    <a href="#car-details" data-toggle="tab">Car Details</a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="car-details">
                                    <div class="intro box table-wrapper full-width hidden-table-sms">
                                        <div class="col-sm-4 table-cell travelo-box">
                                            <dl class="term-description">                                               
                                                <dt>Car Type:</dt><dd><?php echo $cols['type']; ?></dd>
                                                <dt>Car name:</dt><dd><?php echo $cols['name']; ?></dd>
                                                <dt>Passenger:</dt><dd><?php echo $cols['passengers']; ?></dd>
                                                <dt>No. of Doors:</dt><dd><?php echo $cols['passengers']; ?></dd>                                                                           
                                                <dt>total price:</dt><dd>$<?php echo $cols['price']; ?>.00</dd>
                                            </dl>
                                        </div>
                                        <div class="col-sm-8 table-cell">
                                            <div class="detailed-features clearfix">
                                                <div class="col-md-6">
                                                    <h4 class="box-title">
                                                        Pick-up location details
                                                    </h4>
                                                    <div class="icon-box style11">
                                                        <div class="icon-wrapper">
                                                            <i class="soap-icon-clock"></i>
                                                        </div>
                                                        <dl class="details">
                                                            <dt class="skin-color">pickup time</dt>
                                                            <dd><?php echo $cols['pick_date']; ?>  |  <?php echo strtoupper($cols['pick_time']); ?></dd>
                                                        </dl>
                                                    </div>
                                                    <div class="icon-box style11">
                                                        <div class="icon-wrapper">
                                                            <i class="soap-icon-departure"></i>
                                                        </div>
                                                        <dl class="details">
                                                            <dt class="skin-color">Location</dt>
                                                            <dd><?php echo $cols['pick_location']; ?></dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="box-title">
                                                        Drop-off location details
                                                    </h4>
                                                    <div class="icon-box style11">
                                                        <div class="icon-wrapper">
                                                            <i class="soap-icon-clock"></i>
                                                        </div>
                                                        <dl class="details">
                                                            <dt class="skin-color">Drop off Time</dt>
                                                            <dd><?php echo $cols['drop_date']; ?>  |  <?php echo strtoupper($cols['drop_time']); ?> </dd>
                                                        </dl>
                                                    </div>
                                                    <div class="icon-box style11">
                                                        <div class="icon-wrapper">
                                                            <i class="soap-icon-departure"></i>
                                                        </div>
                                                        <dl class="details">
                                                            <dt class="skin-color">Location</dt>
                                                            <dd><?php echo $cols['drop_location']; ?></dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2>Car Rental Information</h2>
                                    <p><?php echo $cols['description']; ?></p>
                                    <br />
                                    <div class="car-features box">
                                        <div class="row add-clearfix">
                                            <div class="col-sms-6 col-sm-6 col-md-4">
                                                <span class="icon-box style2">
                                                    <i class="soap-icon-user circle"></i><?php echo $cols['passengers']; ?> Passengers
                                                </span>
                                            </div>
                                            <div class="col-sms-6 col-sm-6 col-md-4">
                                                <span class="icon-box style2">
                                                    <i class="soap-icon-suitcase circle"></i><?php echo $cols['bags']; ?> Bags
                                                </span>
                                            </div>

                                            <?php
                                              if ($cols['airconditioner']==1) { ?>
                                                <div class="col-sms-6 col-sm-6 col-md-4">
                                                    <span class="icon-box style2">
                                                        <i class="soap-icon-aircon circle"></i>air conditioning
                                                    </span>
                                                </div>
                                                <?php
                                              }
                                            ?>

                                            <?php
                                              if ($cols['automatictransmission']==1) { ?>
                                                <div class="col-sms-6 col-sm-6 col-md-4">
                                                    <span class="icon-box style2">
                                                        <i class="soap-icon-automatic-transmission circle"></i>Automatic transmission
                                                    </span>
                                                </div>
                                                <?php
                                              }
                                            ?>

                                            <?php
                                              if ($cols['powerdoorlocks']==1) { ?>
                                                <div class="col-sms-6 col-sm-6 col-md-4">
                                                    <span class="icon-box style2">
                                                        <i class="soap-icon-automatic-transmission circle"></i>Powerdoor locks
                                                    </span>
                                                </div>
                                                <?php
                                              }
                                            ?>

                                            <?php
                                              if ($cols['powersteering']==1) { ?>
                                                <div class="col-sms-6 col-sm-6 col-md-4">
                                                    <span class="icon-box style2">
                                                        <i class="soap-icon-anchor circle"></i>Power steering
                                                    </span>
                                                </div>
                                                <?php
                                              }
                                            ?>

                                            <?php
                                              if ($cols['antilockbrakingsys']==1) { ?>
                                                <div class="col-sms-6 col-sm-6 col-md-4">
                                                    <span class="icon-box style2">
                                                        <i class="soap-icon-securevault circle"></i>Antilock braking system
                                                    </span>
                                                </div>
                                                <?php
                                              }
                                            ?>

                                            <?php
                                              if ($cols['breakassist']==1) { ?>
                                                <div class="col-sms-6 col-sm-6 col-md-4">
                                                    <span class="icon-box style2">
                                                        <i class="soap-icon-recommend circle"></i>Break assist
                                                    </span>
                                                </div>
                                                <?php
                                              }
                                            ?>

                                            <?php
                                              if ($cols['driverairbag']==1) { ?>
                                                <div class="col-sms-6 col-sm-6 col-md-4">
                                                    <span class="icon-box style2">
                                                        <i class="soap-icon-letter circle"></i>Driver airbag
                                                    </span>
                                                </div>
                                                <?php
                                              }
                                            ?>

                                            <?php
                                              if ($cols['passengerairbag']==1) { ?>
                                                <div class="col-sms-6 col-sm-6 col-md-4">
                                                    <span class="icon-box style2">
                                                        <i class="soap-icon-availability circle"></i>Passenger airbag
                                                    </span>
                                                </div>
                                                <?php
                                              }
                                            ?>

                                            <?php
                                              if ($cols['powerwindow']==1) { ?>
                                                <div class="col-sms-6 col-sm-6 col-md-4">
                                                    <span class="icon-box style2">
                                                        <i class="soap-icon-restricted circle"></i>Power window
                                                    </span>
                                                </div>
                                                <?php
                                              }
                                            ?>

                                            <?php
                                              if ($cols['cdplayer']==1) { ?>
                                                <div class="col-sms-6 col-sm-6 col-md-4">
                                                    <span class="icon-box style2">
                                                        <i class="soap-icon-fmstereo circle"></i>CD player
                                                    </span>
                                                </div>
                                                <?php
                                              }
                                            ?>

                                            <?php
                                              if ($cols['centrallocking']==1) { ?>
                                                <div class="col-sms-6 col-sm-6 col-md-4">
                                                    <span class="icon-box style2">
                                                        <i class="soap-icon-liability circle"></i>Central locking
                                                    </span>
                                                </div>
                                                <?php
                                              }
                                            ?>

                                            <?php
                                              if ($cols['crashcensor']==1) { ?>
                                                <div class="col-sms-6 col-sm-6 col-md-4">
                                                    <span class="icon-box style2">
                                                        <i class="soap-icon-automatic-transmission circle"></i>Crash censor
                                                    </span>
                                                </div>
                                                <?php
                                              }
                                            ?>

                                            <div class="col-sms-6 col-sm-6 col-md-4">
                                                <span class="icon-box style2">
                                                    <i class="soap-icon-fueltank circle"></i><?php echo $cols['fuel']; ?> Vehicle
                                                </span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-md-3">
                        <article class="detailed-logo">
                            <figure>
                                <img src="images/cars/s_resized1/<?php echo $cols2['img1']; ?>" alt="<?php echo $cols['name']; ?>">
                            </figure>
                            <div class="details">
                                <h2 class="box-title"><?php echo $cols['name']; ?><small><?php echo $cols['type']; ?></small></h2>
                                <span class="price clearfix">
                                    <small class="pull-left">per day</small>
                                    <span class="pull-right">$<?php echo $cols['price']; ?></span>
                                </span>
                                <div class="mile clearfix">
                                    <span class="skin-color">Mileage:</span>
                                    <span class="mileage pull-right"><?php echo $cols['mileage']; ?> Miles</span>
                                </div>
                               
                                <p class="description"><?php echo mb_strimwidth($cols['description'], 0, 160, "..."); ?></p>
                                <a class="button yellow full-width uppercase btn-small" href="#">Hire Now</a>
                            </div>
                        </article>
                        <div class="travelo-box">
                            <h4>Suggestions for you</h4>
                            <?php
                            $id=$cols['car_id'];
                            $nem=$cols['name'];
                            $loc=$cols['pick_location'];
                            $pri=$cols['price'];
                             $res3=mysqli_query($db,"SELECT * FROM `cars` WHERE NOT `car_id`='$id' AND `pick_location` LIKE '%$loc%' OR `price` LIKE '$pri' LIMIT 0,3");
                             while ($cols3=mysqli_fetch_array($res3)) { 
                                $sug_car_id=$cols3['car_id'];
                                $res4=mysqli_query($db,"SELECT * FROM `car_images` WHERE `car_id`='$sug_car_id'");
                                $cols4=mysqli_fetch_array($res4);  

                            ?>
                            <div class="image-box style14">
                                <article class="box">
                                    <figure>
                                        <form id="push_<?php echo $cols3['id']; ?>" method="post" action="car-detailed.php">
                                            <input type="hidden" name="id" value="<?php echo $cols3['id']; ?>">
                                            <a onclick="document.getElementById('push_<?php echo $cols3['id']; ?>').submit();"><img src="images/cars/s_resized2/<?php echo $cols4['img1']; ?>" alt="<?php echo $cols3['name']; ?>" /></a>

                                        </form>
                                        
                                    </figure>
                                    <div class="details">
                                        <form id="push_<?php echo $cols3['id']; ?>" method="post" action="car-detailed.php">
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
                        <?php include("page_modules/contact-box.php"); ?>
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
        </section>
        <?php include('page_modules/footer.php'); ?>
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
    
    <script type="text/javascript" src="js/calendar.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="js/theme-scripts.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>

