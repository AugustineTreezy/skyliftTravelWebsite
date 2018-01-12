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
    <title>Car-Booking | Skylift</title>
    
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
                    <h2 class="entry-title">Hotel Booking</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">Hotel Booking</li>
                </ul>
            </div>
        </div>
        <section id="content" class="gray-area">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-sms-6 col-sm-8 col-md-9">
                        <div class="booking-section travelo-box">
                            
                            <form class="booking-form">
                                <div class="person-information">
                                    <h2>Your Personal Information</h2>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>first name</label>
                                            <input type="text" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>last name</label>
                                            <input type="text" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>email address</label>
                                            <input type="text" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Verify E-mail Address</label>
                                            <input type="text" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>Country code</label>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option>United Kingdom (+44)</option>
                                                    <option>United States (+1)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Phone number</label>
                                            <input type="text" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> I want to receive <span class="skin-color">skylift</span> promotional offers in the future
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="card-information">
                                    <h2>Your Card Information</h2>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>Credit Card Type</label>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option>select a card</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Card holder name</label>
                                            <input type="text" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>Card number</label>
                                            <input type="text" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Card identification number</label>
                                            <input type="text" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>Expiration Date</label>
                                            <div class="constant-column-2">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option>month</option>
                                                    </select>
                                                </div>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option>year</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-2">
                                            <label>billing zip code</label>
                                            <input type="text" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <h2>Arrival/Flight Information</h2>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <label>Airline Name</label>
                                        <div class="selector full-width">
                                            <select>
                                                <option value="">Select...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        <label>Arriving Number</label>
                                        <input type="text" class="input-text full-width">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> By continuing, you agree to the <a href="#"><span class="skin-color">Terms and Conditions</span></a>.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <button type="submit" class="full-width btn-large">CONFIRM BOOKING</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar col-sms-6 col-sm-4 col-md-3">
                        <div class="booking-details skylift-box">
                            <h4>Booking Details</h4>
                            <article class="car-detail">
                                <figure class="clearfix">
                                    <a title="" href="car-detailed.php" class="middle-block"><img class="middle-item" alt="" src="http://placehold.it/75x75"></a>
                                    <div class="travel-title">
                                        <h5 class="box-title">BMW Mini<small>Economy car</small></h5>
                                        <a href="car-detailed.php" class="button">EDIT</a>
                                    </div>
                                </figure>
                                <div class="details">
                                    <div class="icon-box style11 full-width">
                                        <div class="icon-wrapper">
                                            <i class="soap-icon-departure"></i>
                                        </div>
                                        <dl class="details">
                                            <dt class="skin-color">Date</dt>
                                            <dd>Nov 14, 2013 to nov 15.2013</dd>
                                        </dl>
                                    </div>
                                    <div class="icon-box style11 full-width">
                                        <div class="icon-wrapper">
                                            <i class="soap-icon-departure"></i>
                                        </div>
                                        <dl class="details">
                                            <dt class="skin-color">Time</dt>
                                            <dd>11:00 AM to 11:00am</dd>
                                        </dl>
                                    </div>
                                    <div class="icon-box style11 full-width">
                                        <div class="icon-wrapper">
                                            <i class="soap-icon-departure"></i>
                                        </div>
                                        <dl class="details">
                                            <dt class="skin-color">Location</dt>
                                            <dd>London city to paris orly airport</dd>
                                        </dl>
                                    </div>
                                </div>
                            </article>
                            
                            <h4>Other Details</h4>
                            <dl class="other-details">
                                <dt class="feature">Mileage included:</dt><dd class="value">3,000 miles</dd>
                                <dt class="feature">Damage Protection:</dt><dd class="value">$0.00 USD</dd>
                                <dt class="feature">Per day price:</dt><dd class="value">$45.39</dd>
                                <dt class="feature">taxes and fees:</dt><dd class="value">$155.61</dd>
                                <dt class="total-price">Total Price</dt><dd class="total-price-value">$201.00</dd>
                            </dl>
                        </div>
                        
                        <div class="travelo-box contact-box">
                            <h4>Need skylift Help?</h4>
                            <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                <br>
                                <a class="contact-email" href="#">help@skylift.com</a>
                            </address>
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
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    
    <script type="text/javascript" src="js/calendar.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="js/theme-scripts.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    
    <script type="text/javascript">
    
    </script>
</body>
</html>

