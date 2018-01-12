<?php 
include('user-session.php');
include('connection.php');
error_reporting(0);
if (!isset($_SESSION["userData"])) {
    header("Location:logout.php");

}else{
    $userData=$_SESSION["userData"];
    $first_name = $userData['first_name'];
    $last_name = $userData['last_name'];
    $full_name = ' ' . $userData["first_name"].' '.$userData['last_name'];
    $email = $userData['email'];
    $phone = $userData['phone'];
    $city = $userData['city'];
    $country = $userData['country'];
    $about = $userData['about'];
    $res=mysqli_query($db,"SELECT * FROM `users` WHERE `email`='$email'");
    $cols=mysqli_fetch_array($res);
}

?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>My-account | Skylift</title>
    
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.5.1/croppie.css">
    
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
                    <h2 class="entry-title">My Account</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">My Account</li>
                </ul>
            </div>
        </div>
        <section id="content" class="gray-area">
            <div class="container">
                <div id="main">
                    <div class="tab-container full-width-style arrow-left dashboard">
                        <ul class="tabs">
                            <li class="active"><a data-toggle="tab" href="#dashboard"><i class="soap-icon-anchor circle"></i>Dashboard</a></li>
                            <li class=""><a data-toggle="tab" href="#profile"><i class="soap-icon-user circle"></i>Profile</a></li>                 
                            <li class=""><a data-toggle="tab" href="#settings"><i class="soap-icon-settings circle"></i>Settings</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="dashboard" class="tab-pane fade in active">
                                <h1 class="no-margin skin-color">Hi <?php echo $first_name; ?>, Welcome to Skylift!</h1>
                                <p>All your trips booked with us will appear here and you’ll be able to manage everything!</p>
                                <br />
                                <div class="row block">
                                    <div class="col-sm-6 col-md-3">
                                        <a href="hotel-list-view.html">
                                            <div class="fact blue">
                                                <div class="numbers counters-box">
                                                    <dl>
                                                        <dt class="display-counter" data-value="3200">0</dt>
                                                        <dd>Hotels to Stay</dd>
                                                    </dl>
                                                    <i class="icon soap-icon-hotel"></i>
                                                </div>
                                                <div class="description">
                                                    <i class="icon soap-icon-longarrow-right"></i>
                                                    <span>View Hotels</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <a href="flight-list-view.html">
                                            <div class="fact yellow">
                                                <div class="numbers counters-box">
                                                    <dl>
                                                        <dt class="display-counter" data-value="4509">0</dt>
                                                        <dd>Airlines to Travel</dd>
                                                    </dl>
                                                    <i class="icon soap-icon-plane"></i>
                                                </div>
                                                <div class="description">
                                                    <i class="icon soap-icon-longarrow-right"></i>
                                                    <span>View Flights</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <a href="car-list-view.html">
                                            <div class="fact red">
                                                <div class="numbers counters-box">
                                                    <dl>
                                                        <dt class="display-counter" data-value="3250">0</dt>
                                                        <dd>VIP Transports</dd>
                                                    </dl>
                                                    <i class="icon soap-icon-car"></i>
                                                </div>
                                                <div class="description">
                                                    <i class="icon soap-icon-longarrow-right"></i>
                                                    <span>View Cars</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <a href="cruise-list-view.html">
                                            <div class="fact green">
                                                <div class="numbers counters-box">
                                                    <dl>
                                                        <dt class="display-counter" data-value="1570">0</dt>
                                                        <dd>Places to visit</dd>
                                                    </dl>
                                                    <i class="icon soap-icon-places flip-effect"></i>
                                                </div>
                                                <div class="description">
                                                    <i class="icon soap-icon-longarrow-right"></i>
                                                    <span>View Cruises</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="notification-area">
                                    <div class="info-box block">
                                        <span class="close"></span>
                                        <p>This is your Dashboard, the place to check your Profile, respond to Reservation Requests, view upcoming Trip Information, and much more.</p>
                                        <br />
                                        <ul class="circle">
                                            <li><span class="skin-color">Learn How It Works</span> — Watch a short video that shows you how Travelo works.</li>
                                            <li><span class="skin-color">Get Help</span> — View our help section and FAQs to get started on Travelo. </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="row block">
                                    <div class="col-md-6 notifications">
                                        <h2>Notifications</h2>
                                        <a href="#">
                                            <div class="icon-box style1 fourty-space">
                                                <i class="soap-icon-plane-right takeoff-effect yellow-bg"></i>
                                                <span class="time pull-right">JUST NOW</span>
                                                <p class="box-title">London to Paris flight in <span class="price">$120</span></p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="icon-box style1 fourty-space">
                                                <i class="soap-icon-hotel blue-bg"></i>
                                                <span class="time pull-right">10 Mins ago</span>
                                                <p class="box-title">Hilton hotel &amp; resorts in <span class="price">$247</span></p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="icon-box style1 fourty-space">
                                                <i class="soap-icon-car red-bg"></i>
                                                <span class="time pull-right">39 Mins ago</span>
                                                <p class="box-title">Economy car for 2 days in <span class="price">$39</span></p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="icon-box style1 fourty-space">
                                                <i class="soap-icon-cruise green-bg"></i>
                                                <span class="time pull-right">1 hour ago</span>
                                                <p class="box-title">Baja Mexico 4 nights in <span class="price">$537</span></p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="icon-box style1 fourty-space">
                                                <i class="soap-icon-hotel blue-bg"></i>
                                                <span class="time pull-right">2 hours ago</span>
                                                <p class="box-title">Roosevelt hotel in <span class="price">$170</span></p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="icon-box style1 fourty-space">
                                                <i class="soap-icon-hotel blue-bg"></i>
                                                <span class="time pull-right">3 hours ago</span>
                                                <p class="box-title">Cleopatra Resort in <span class="price">$247</span></p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="icon-box style1 fourty-space">
                                                <i class="soap-icon-car red-bg"></i>
                                                <span class="time pull-right">3 hours ago</span>
                                                <p class="box-title">Elite Car per day in <span class="price">$48.99</span></p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="icon-box style1 fourty-space">
                                                <i class="soap-icon-cruise green-bg"></i>
                                                <span class="time pull-right">last night</span>
                                                <p class="box-title">Rome to Africa 1 week in <span class="price">$875</span></p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="load-more">. . . . . . . . . . . . . </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Recent Activity</h2>
                                        <div class="recent-activity">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon soap-icon-plane-right circle takeoff-effect yellow-color"></i>
                                                        <span class="price"><small>avg/person</small>$120</span>
                                                        <h4 class="box-title">
                                                            Indianapolis to Paris<small>Oneway flight</small>
                                                        </h4>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon soap-icon-car circle red-color"></i>
                                                        <span class="price"><small>per day</small>$45.39</span>
                                                        <h4 class="box-title">
                                                            Economy Car<small>bmw mini</small>
                                                        </h4>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon soap-icon-cruise circle green-color"></i>
                                                        <span class="price"><small>from</small>$578</span>
                                                        <h4 class="box-title">
                                                            Jacksonville to Asia<small>4 nights</small>
                                                        </h4>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon soap-icon-hotel circle blue-color"></i>
                                                        <span class="price"><small>Avg/night</small>$620</span>
                                                        <h4 class="box-title">
                                                            Hilton Hotel &amp; Resorts<small>Paris france</small>
                                                        </h4>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon soap-icon-hotel circle blue-color"></i>
                                                        <span class="price"><small>avg/night</small>$170</span>
                                                        <h4 class="box-title">
                                                            Roosevelt Hotel<small>new york</small>
                                                        </h4>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon soap-icon-plane-right circle takeoff-effect yellow-color"></i>
                                                        <span class="price"><small>avg/person</small>$348</span>
                                                        <h4 class="box-title">
                                                            Mexico to England<small>return flight</small>
                                                        </h4>
                                                    </a>
                                                </li>
                                            </ul>
                                            <a href="#" class="button green btn-small full-width">VIEW ALL ACTIVITIES</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Benefits of Tavelo Account</h4>
                                        <ul class="benefits triangle hover">
                                            <li><a href="#">Faster bookings with lesser clicks</a></li>
                                            <li><a href="#">Track travel history &amp; manage bookings</a></li>
                                            <li class="active"><a href="#">Manage profile &amp; personalize experience</a></li>
                                            <li><a href="#">Receive alerts &amp; recommendations</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 previous-bookings image-box style14">
                                        <h4>Your Previous Bookings</h4>
                                        <article class="box">
                                            <figure class="no-padding">
                                                <a title="" href="#">
                                                    <img alt="" src="http://placehold.it/63x59" width="63" height="59">
                                                </a>
                                            </figure>
                                            <div class="details">
                                                <h5 class="box-title"><a href="#">Half-Day Island Tour</a><small class="fourty-space"><span class="price">$35</span> Family Package</small></h5>
                                            </div>
                                        </article>
                                        <article class="box">
                                            <figure class="no-padding">
                                                <a title="" href="#">
                                                    <img alt="" src="http://placehold.it/63x59" width="63" height="59">
                                                </a>
                                            </figure>
                                            <div class="details">
                                                <h5 class="box-title"><a href="#">Ocean Park Tour</a><small class="fourty-space"><span class="price">$26</span> Per Person</small></h5>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Need Travelo Help?</h4>
                                        <div class="contact-box">
                                            <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                                            <address class="contact-details">
                                                <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                                <br>
                                                <a class="contact-email" href="#">help@travelo.com</a>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="profile" class="tab-pane fade">
                                <div class="view-profile">
                                    <article class="image-box style2 box innerstyle personal-details">
                                        <figure>
                                           
                                               
                                                <a title="" href="#"><img alt="<?php echo $full_name ?>" src="<?php echo $cols['picture']; ?>" style="width: 160px;"></a>
                                                                                        
                                        </figure>
                                        <div class="details">
                                            <a href="#" class="button btn-mini pull-right edit-profile-btn">EDIT PROFILE</a>
                                            <h2 class="box-title fullname"><?php echo $full_name ?></h2>
                                            <dl class="term-description">                                                
                                                <dt>first name:</dt><dd><?php echo $first_name ?></dd>
                                                <dt>last name:</dt><dd><?php echo $last_name ?></dd>
                                                <dt>phone number:</dt><dd><?php if(!empty($phone)){echo $phone;}else{echo "Not provided";}  ?></dd>
                                                <dt>Email Address:</dt><dd style="text-transform: lowercase; font-size: 1.2167em;"><?php echo $email ?></dd>
                                               
                                            </dl>
                                        </div>
                                    </article>
                                    <hr>
                                    <h2>About You</h2>
                                        <div class="intro">
                                        <p>Vestibulum tristique, justo eu sollicitudin sagittis, metus dolor eleifend urna, quis scelerisque purus quam nec ligula. Suspendisse iaculis odio odio, ac vehicula nisi faucibus eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere semper sem ac aliquet. Duis vel bibendum tellus, eu hendrerit sapien. Proin fringilla, enim vel lobortis viverra, augue orci fringilla diam, sed cursus elit mi vel lacus. Nulla facilisi. Fusce sagittis, magna non vehicula gravida, ante arcu pulvinar arcu, aliquet luctus arcu purus sit amet sem. Mauris blandit odio sed nisi porttitor egestas. Mauris in quam interdum purus vehicula rutrum quis in sem. Integer interdum lectus at nulla dictum luctus. Sed risus felis, posuere id condimentum non, egestas pulvinar enim. Praesent pretium risus eget nisi ullamcorper fermentum. Duis lacinia nisi ac rhoncus vestibulum.</p>
                                    </div>
                                    <hr>
                                    <h2>Today’s Suggestions</h2>
                                    <div class="suggestions image-carousel style2" data-animation="slide" data-item-width="170" data-item-margin="22">
                                        <ul class="slides">
                                            <li>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/170x170" alt="" />
                                                </a>
                                                <h5 class="caption">Adventure</h5>
                                            </li>
                                            <li>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/170x170" alt="" />
                                                </a>
                                                <h5 class="caption">Beaches &amp; Sun</h5>
                                            </li>
                                            <li>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/170x170" alt="" />
                                                </a>
                                                <h5 class="caption">Casinos</h5>
                                            </li>
                                            <li>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/170x170" alt="" />
                                                </a>
                                                <h5 class="caption">Family Fun</h5>
                                            </li>
                                            <li>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/170x170" alt="" />
                                                </a>
                                                <h5 class="caption">History</h5>
                                            </li>
                                            <li>
                                                <a href="#" class="hover-effect">
                                                    <img src="http://placehold.it/170x170" alt="" />
                                                </a>
                                                <h5 class="caption">Adventure</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>Benefits of Tavelo Account</h4>
                                            <ul class="benefits triangle hover">
                                                <li><a href="#">Faster bookings with lesser clicks</a></li>
                                                <li><a href="#">Track travel history &amp; manage bookings</a></li>
                                                <li class="active"><a href="#">Manage profile &amp; personalize experience</a></li>
                                                <li><a href="#">Receive alerts &amp; recommendations</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 previous-bookings image-box style14">
                                            <h4>Your Previous Bookings</h4>
                                            <article class="box">
                                                <figure class="no-padding">
                                                    <a title="" href="#">
                                                        <img alt="" src="http://placehold.it/63x59" width="63" height="59">
                                                    </a>
                                                </figure>
                                                <div class="details">
                                                    <h5 class="box-title"><a href="#">Half-Day Island Tour</a><small class="fourty-space"><span class="price">$35</span> Family Package</small></h5>
                                                </div>
                                            </article>
                                            <article class="box">
                                                <figure class="no-padding">
                                                    <a title="" href="#">
                                                        <img alt="" src="http://placehold.it/63x59" width="63" height="59">
                                                    </a>
                                                </figure>
                                                <div class="details">
                                                    <h5 class="box-title"><a href="#">Ocean Park Tour</a><small class="fourty-space"><span class="price">$26</span> Per Person</small></h5>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Need Travelo Help?</h4>
                                            <div class="contact-box">
                                                <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                                                <address class="contact-details">
                                                    <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                                    <br>
                                                    <a class="contact-email" href="#">help@travelo.com</a>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-profile">
                                        <h2>Personal Details</h2>
                                        <div class="col-sm-9 no-padding no-float">
                                            <div class="row form-group">
                                                <div class="col-sms-6 col-sm-6">
                                                    <label>First Name</label>
                                                    <input type="text" id="first_name" name="first_name" class="input-text full-width" placeholder="" required>
                                                </div>
                                                <div class="col-sms-6 col-sm-6">
                                                    <label>Last Name</label>
                                                    <input type="text" id="last_name" name="last_name" class="input-text full-width" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sms-6 col-sm-6">
                                                    <label>Email Address</label>
                                                    <input type="text" id="email" name="email" class="input-text full-width" placeholder="" readonly required>
                                                </div>
                                                <div class="col-sms-6 col-sm-6">
                                                    <label>Verify Email Address</label>
                                                    <input type="text" id="v_email" name="v_email" class="input-text full-width" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row form-group">                                                
                                                <div class="col-sms-6 col-sm-6">
                                                    <label>Phone Number</label>
                                                    <input type="text" id="phone" name="phone" class="input-text full-width" placeholder="e.g. +254700000000">
                                                </div>
                                            </div>
                                            
                                            <hr>
                                            <h2>Contact Details</h2>
                                            <div class="row form-group">
                                                <div class="col-sms-6 col-sm-6">
                                                    <label>City</label>
                                                    <input type="text" id="city" name="city" class="input-text full-width" >
                                                </div>
                                                <div class="col-sms-6 col-sm-6">
                                                    <label>Country</label>
                                                    <input type="text" id="country" name="country" class="input-text full-width" >
                                                </div>
                                            </div>
                                          
                                            <hr>
                                            <h2>Upload Profile Photo</h2>
                                             
                                            <div class="row form-group">
                                                <div class="col-sms-12 col-sm-6 no-float">
                                                    <div class="fileinput full-width">
                                                        <input type="file" id="upload" name="img1" class="input-text" data-placeholder="select image">
                                                    </div>
                                                       
                                                </div>
                                            </div>
                                            <div id="upload-demo" style="width:350px"></div>
                                           
                                            <hr>
                                            <h2>Describe Yourself</h2>
                                            <div class="form-group">
                                                <textarea rows="5" id="desc" name="desc" class="input-text full-width" placeholder="please tell us about you"></textarea>
                                            </div>
                                            <div class="from-group">
                                                <button type="submit" id="update-settings" name="update-settings" class="btn-medium col-sms-6 col-sm-4 ">UPDATE SETTINGS</button>
                                            </div>
                                            
                                        </div>                                        
                                 
                                </div>

                            </div>
                            <div id="results">
                                                
                                </div>
                          
                            <div id="settings" class="tab-pane fade">
                                <h2>Account Settings</h2>
                                <div class="row form-group">
                                <div class="col-md-6">
                                <h5 class="skin-color">Change Your Password</h5>
                                <form>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-8 col-md-8">
                                            <label>Old Password</label>
                                            <input type="text" class="input-text full-width">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-8 col-md-8">
                                            <label>Enter New Password</label>
                                            <input type="text" class="input-text full-width">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-8 col-md-8">
                                            <label>Confirm New password</label>
                                            <input type="text" class="input-text full-width">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn-medium">UPDATE PASSWORD</button>
                                    </div>
                                </form>
                                <hr>
                            </div>
                                
                                <div class="col-md-6">
                                
                                <h5 class="skin-color">Change Your Email</h5>
                                <form>
                                    <div class="row form-group">
                                        <div class="col-md-12 col-sm-8 col-md-8">
                                            <label>Old email</label>
                                            <input type="text" class="input-text full-width" placeholder="You can not update email currently" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-8 col-md-8">
                                            <label>Enter New Email</label>
                                            <input type="text" class="input-text full-width" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-8 col-md-8">
                                            <label>Confirm New Email</label>
                                            <input type="text" class="input-text full-width" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">                                        
                                           <button class="btn-medium disabled">UPDATE EMAIL ADDRESS</button>                                        
                                    </div>
                                </form>
                                <div id="results">
                                    
                                </div>
                                
                                <hr>
                            </div>
                               
                            </div>
                          </div>
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

    <!-- Flex Slider -->
    <script type="text/javascript" src="components/flexslider/jquery.flexslider-min.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/theme-scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.5.1/croppie.js"></script>     
        
    
<script type="text/javascript">
    document.getElementById('upload-demo').style.display = 'none';

   $uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'circle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});


$('#upload').on('change', function () {
    document.getElementById('upload-demo').style.display = 'block';
    var reader = new FileReader();
    reader.onload = function (e) {
        $uploadCrop.croppie('bind', {
            url: e.target.result
        }).then(function(){
            console.log('jQuery bind complete');
        });

    }
    reader.readAsDataURL(this.files[0]);
});


$('#update-settings').on('click', function (ev) {
    var first_name= document.getElementById("first_name").value;
    var last_name= document.getElementById("last_name").value;
    var phone= document.getElementById("phone").value;
    var email= document.getElementById("email").value;
    var city= document.getElementById("city").value;
    var country= document.getElementById("country").value;
    var desc= document.getElementById("desc").value;
    $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (resp) {


        $.ajax({
            url: "edit-profile-handler.php",
            type: "POST",
            data: {"image":resp,"first_name":first_name,"last_name":last_name,"phone":phone,"email":email,"city":city,"country":country,"desc":desc},
            success: function (data) {
                $("#results").html(data);
            }
        });
    });
});


</script>

    <script type="text/javascript">
        tjq(document).ready(function() {
            tjq("#profile .edit-profile-btn").click(function(e) {
                e.preventDefault();
                tjq(".view-profile").fadeOut();
                tjq(".edit-profile").fadeIn();
            });

            setTimeout(function() {
                tjq(".notification-area").append('<div class="info-box block"><span class="close"></span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ab quis a dolorem, placeat eos doloribus esse repellendus quasi libero illum dolore. Esse minima voluptas magni impedit, iusto, obcaecati dignissimos.</p></div>');
            }, 10000);
        });
        tjq('a[href="#profile"]').on('shown.bs.tab', function (e) {
            tjq(".view-profile").show();
            tjq(".edit-profile").hide();
        });
    </script>
    <script type="text/javascript">
        document.getElementById("first_name").value = "<?php echo $first_name; ?>";
        document.getElementById("last_name").value = "<?php echo $last_name; ?>";
        document.getElementById("phone").value = "<?php echo $phone; ?>";
        document.getElementById("email").value = "<?php echo $email; ?>";
        document.getElementById("city").value = "<?php echo $city; ?>";
        document.getElementById("country").value = "<?php echo $country; ?>";
        document.getElementById("about").value = "<?php echo $about; ?>";

    </script>
</body>
</html>

