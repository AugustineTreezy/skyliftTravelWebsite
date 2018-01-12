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
    <title>Contact-us | Skylift</title>
    
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
                    <h2 class="entry-title">Contact Us</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>                    
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main">
                    <div class="travelo-google-map block"></div>
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="travelo-box contact-us-box">
                                <h4>Contact us</h4>
                                <ul class="contact-address">
                                    <li class="address">
                                        <i class="soap-icon-address circle"></i>
                                        <h5 class="title">Address</h5>
                                        <p>United States of America.</p>
                                        <p>P.O Box,  353 Three Avenue.</p>
                                    </li>
                                    <li class="phone">
                                        <i class="soap-icon-phone circle"></i>
                                        <h5 class="title">Phone</h5>
                                        <p>Local: 1-800-123-hello</p>
                                        <p>Mobile: 1-800-123-hello</p>
                                    </li>
                                    <li class="email">
                                        <i class="soap-icon-message circle"></i>
                                        <h5 class="title">Email</h5>
                                        <p>info@skylift.com</p>
                                        <p>www.skylift.com</p>
                                    </li>
                                </ul>
                                <ul class="social-icons full-width">
                                    <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="soap-icon-twitter"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="GooglePlus"><i class="soap-icon-googleplus"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="soap-icon-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Linkedin"><i class="soap-icon-linkedin"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Vimeo"><i class="soap-icon-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-9">
                            <div class="travelo-box">
                                <form class="contact-form" action="contact-us-handler.php" method="post">
                                    <h4 class="box-title">Send us a Message</h4>
                                    <div class="row form-group">
                                        <div class="col-xs-6">
                                            <label>Your Name</label>
                                            <input type="text" name="name" class="input-text full-width">
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Your Email</label>
                                            <input type="text" name="email" class="input-text full-width">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <textarea name="message" rows="6" class="input-text full-width" placeholder="write message here"></textarea>
                                    </div>
                                    <button type="submit" class="btn-large full-width">SEND MESSAGE</button>
                                </form>
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

    <script type="text/javascript">
        tjq(".travelo-google-map").gmap3({
            map: {
                options: {
                    center: [48.85661, 2.35222],
                    zoom: 12
                }
            },
            marker:{
                values: [
                    {latLng:[48.85661, 2.35222], data:"Paris"}

                ],
                options: {
                    draggable: false
                },
            }
        });
    </script>
</body>
</html>

