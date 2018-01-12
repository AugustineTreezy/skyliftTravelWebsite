<?php
session_cache_limiter('private_no_expire');
include('user-session.php');
include('connection.php');
error_reporting(0);

  if (empty($_POST)) {
    header("location:index.php");
    exit();
  }
  if (empty($_POST['id'])) {
    header("location:index.php");
    exit();
  }
  $id=$_POST['id'];
  $res=mysqli_query($db,"SELECT * FROM `hotels` WHERE `id`='$id'");
  $cols=mysqli_fetch_array($res);
  $hotel_id=$cols['hotel_id'];
  $res2=mysqli_query($db,"SELECT * FROM `hotel_images` WHERE `hotel_id`='$hotel_id'");
  $cols2=mysqli_fetch_array($res2);                       
    
   if (isset($_SESSION["userData"])) {
    $userData=$_SESSION["userData"];
    $bookInfo=$_SESSION["bookinfo"];
    $first_name = $userData['first_name'];
    $last_name = $userData['last_name'];
    $full_name = ' ' . $userData["first_name"].' '.$userData['last_name'];
    $email = $userData['email'];
    $phone = $userData['phone'];
    $check_in=$bookInfo['check_in'];
    $check_out=$bookInfo['check_out'];

   }

?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Hotel-booking | Skylift</title>
    
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
                            
                            <form class="booking-form" action="hotel-booking-handler.php">
                                <div class="person-information">
                                    <h2>Your Personal Information</h2>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>first name</label>
                                            <input type="text" id="first_name" name="first_name" class="input-text full-width" value="" placeholder="" required/>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>last name</label>
                                            <input type="text" id="last_name" name="last_name" class="input-text full-width" value="" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>email address</label>
                                            <input type="text" id="email" name="email" class="input-text full-width" value="" placeholder="" required/>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Phone number</label>
                                            <input type="text" id="phone" name="phone" class="input-text full-width" value="" placeholder="e.g. +254700000000" required />
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
                                    <h2>Booking Information</h2>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>Adults</label>
                                            <div class="selector">
                                                <select class="full-width" name="adults" required>
                                                    <option value=""> select </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Kids</label>
                                            <div class="selector">
                                                <select class="full-width" name="kids">
                                                    <option value=""> select </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>Check In</label>
                                            <div class="datepicker-wrap">
                                                    <input type="text" id="check_in" name="check_in" class="input-text full-width" placeholder="mm/dd/yy" value="<?php echo $check_in ?>"  required/>
                                                </div>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Check Out</label>
                                            <div class="datepicker-wrap">
                                                    <input type="text" id="check_out" name="check_out" class="input-text full-width" placeholder="mm/dd/yy" value="<?php echo $check_out ?>" required/>
                                                </div>
                                        </div>
                                        
                                    </div>
                                   
                                </div>
                                <hr />
                               
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <button type="submit" class="full-width btn-large">CONFIRM BOOKING</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar col-sms-6 col-sm-4 col-md-3">
                        
                        
                        <?php include("page_modules/contact-box.php");  ?>
                    </div>
                </div>
            </div>
        </section>
        <?php  include('page_modules/footer.php'); ?>
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
        document.getElementById("first_name").value = "<?php echo $first_name; ?>";
        document.getElementById("last_name").value = "<?php echo $last_name; ?>";
        document.getElementById("phone").value = "<?php echo $phone; ?>";
        document.getElementById("email").value = "<?php echo $email; ?>";
        document.getElementById("depart_date").value = "<?php echo $cols['depart_date']; ?>";
    </script>
</body>
</html>

