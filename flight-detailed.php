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
  $res=mysqli_query($db,"SELECT * FROM `flights` WHERE `id`='$id'");
  $cols=mysqli_fetch_array($res);
  $airline=$cols['airline'];
    $res2=mysqli_query($db,"SELECT * FROM `flight_desc` WHERE `name`='$airline'");
    $cols2=mysqli_fetch_array($res2);     

?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Flight-detailed | Skylift</title>
    
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
        <?php include('page_modules/header.php'); ?>
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Flight Detailed</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">Flight Detailed</li>
                </ul>
            </div>
        </div>
        <section id="content">
            <div class="container flight-detail-page">
                <div class="row">
                    <div id="main" class="col-md-9">
                        <div class="tab-container style1 box" id="flight-main-content">
                            <ul class="tabs">
                                <li class="active"><a data-toggle="tab" href="#photo-tab">photo</a></li>
                                
                              
                            </ul>
                            <div class="tab-content">
                                <div id="photo-tab" class="tab-pane fade in active">
                                    <div class="featured-image image-container">
                                        <img src="images/flights/s_resized2/<?php echo $cols2['image']; ?>" alt="">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div id="flight-features" class="tab-container">
                            <ul class="tabs">
                                <li class="active"><a href="#flight-details" data-toggle="tab">Flight Details</a></li>
                                <li><a href="#inflight-features" data-toggle="tab">Inflight Features</a></li>
                              
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="flight-details">
                                    <div class="intro table-wrapper full-width hidden-table-sm box">
                                        <div class="col-md-4 table-cell travelo-box">
                                            <dl class="term-description">
                                                <dt>Airline:</dt><dd><?php echo $cols['airline']; ?></dd>                                     
                                                <dt>Seats &amp; Baggage:</dt><dd>Extra Charge</dd>
                                                <dt>Inflight Features:</dt><dd>Available</dd>                                                
                                                <dt>total price:</dt><dd><?php echo $cols['price']; ?>.00</dd>
                                            </dl>
                                        </div>
                                        <div class="col-md-8 table-cell">
                                            <div class="detailed-features booking-details">
                                                <div class="travelo-box">                                                
                                                    <h4 class="box-title"><?php echo $cols['leaving_from']; ?> to <?php echo $cols['going_to']; ?><small<?php echo $cols['trip']; ?> flight</small></h4>
                                                </div>
                                                <div class="table-wrapper flights">
                                                    <div class="table-row first-flight">
                                                        <div class="table-cell logo">
                                                            <img src="images/flights/resized0/<?php echo $cols2['logo']; ?>" alt="">
                                                            
                                                        </div>
                                                        <div class="table-cell timing-detail">
                                                            <div class="timing">
                                                                <div class="check-in">
                                                                    <label>Take off</label>
                                                                    <span><?php echo $cols['depart_date']; ?>, <?php echo $cols['depart_time']; ?></span>
                                                                </div>
                                                                <div class="duration text-center">
                                                                    <i class="soap-icon-clock"></i>
                                                                    <span><?php echo $cols['total_time']; ?></span>
                                                                </div>
                                                                <div class="check-out">
                                                                    <label>landing</label>
                                                                    <span><?php echo $cols['arrive_date']; ?>, <?php echo $cols['arrive_time']; ?></span>
                                                                </div>
                                                            </div>                                                                              
                                                        </div>                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="long-description">
                                        <h2>About <?php echo $cols['airline']; ?></h2>
                                        <p>
                                           <?php echo $cols2['description']; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="inflight-features">
                                   
                                    <p><?php echo $cols['airline']; ?> provides the following inflight features</p>
                                    <ul class="amenities clearfix style2">
                                        <?php
                                          if ($cols['wifi']==1) { ?>
                                              <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-wifi circle"></i>WI_FI</div>
                                              </li>
                                              <?php
                                          }
                                        ?>

                                        <?php
                                          if ($cols['entertainment']==1) { ?>
                                              <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-entertainment circle"></i>entertainment</div>
                                              </li>
                                              <?php
                                          }
                                        ?>

                                        <?php
                                          if ($cols['tv']==1) { ?>
                                              <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-television circle"></i>television</div>
                                              </li>
                                              <?php
                                          }
                                        ?>
                                        
                                        <?php
                                          if ($cols['airconditioner']==1) { ?>
                                              <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-aircon circle"></i>air conditioning</div>
                                              </li>
                                              <?php
                                          }
                                        ?>

                                        <?php
                                          if ($cols['coffee']==1) { ?>
                                              <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-coffee circle"></i>coffee</div>
                                              </li>
                                              <?php
                                          }
                                        ?>

                                        <?php
                                          if ($cols['drink']==1) { ?>
                                              <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-juice circle"></i>drink</div>
                                              </li>
                                              <?php
                                          }
                                        ?>

                                         <?php
                                          if ($cols['food']==1) { ?>
                                              <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-food circle"></i>food</div>
                                              </li>
                                              <?php
                                          }
                                        ?>

                                        <?php
                                          if ($cols['wine']==1) { ?>
                                              <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-winebar circle"></i>wines</div>
                                              </li>
                                              <?php
                                          }
                                        ?>

                                        <?php
                                          if ($cols['comfort']==1) { ?>
                                              <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-comfort circle"></i>comfort</div>
                                              </li>
                                              <?php
                                          }
                                        ?>

                                        <?php
                                          if ($cols['magazines']==1) { ?>
                                              <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-magazine circle"></i>magazines</div>
                                              </li>
                                              <?php
                                          }
                                        ?>

                                        <?php
                                          if ($cols['shopping']==1) { ?>
                                              <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-shopping circle"></i>shopping</div>
                                              </li>
                                              <?php
                                          }
                                        ?>

                                        <?php
                                          if ($cols['games']==1) { ?>
                                              <li class="col-md-4 col-sm-6">
                                            <div class="icon-box style2"><i class="soap-icon-joystick circle"></i>games</div>
                                              </li>
                                              <?php
                                          }
                                        ?>
                                       
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-md-3">
                        <article class="detailed-logo">
                            <figure>
                                <img src="images/flights/s_resized1/<?php echo $cols2['image']; ?>" alt="<?php echo $cols['airline']; ?>">
                            </figure>
                            <div class="details">
                                <h2 class="box-title"><?php echo $cols['leaving_from']; ?> to <?php echo $cols['going_to']; ?><small><?php echo $cols['trip']; ?></small></h2>
                                <span class="price clearfix">
                                    <small class="pull-left">avg/person</small>
                                    <span class="pull-right">$<?php echo $cols['price']; ?></span>
                                </span>
                                
                                <div class="duration">
                                    <i class="soap-icon-clock"></i>
                                    <dl>
                                        <dt class="skin-color">Total Time:</dt>
                                        <dd><?php echo $cols['total_time']; ?></dd>
                                    </dl>
                                </div>
                                
                                <p class="description">Book a flight from <?php echo $cols['leaving_from']; ?> to <?php echo $cols['going_to']; ?> with <?php echo $cols['airline']; ?> and enjoy the flight experience with us.</p>
                                <form id="push_<?php echo $cols['id']; ?>" method="post" action="flight-booking.php">
                                    <input type="hidden" name="id" value="<?php echo $cols['id']; ?>">
                                <a onclick="document.getElementById('push_<?php echo $cols['id']; ?>').submit();" class="button green full-width uppercase btn-medium">book flight now</a>
                                </form>
                            </div>
                        </article>

                        <?php include('page_modules/contact-box.php'); ?>                        
                        
                        <div class="travelo-box book-with-us-box">
                            <h4>Why Book with us?</h4>
                            <ul>
                                <li>
                                    <i class="soap-icon-plane-right circle"></i>
                                    <h5 class="title"><a href="#">1000+ Flights</a></h5>
                                    <p>Choose from variety of flights available.</p>
                                </li>                                
                                <li>
                                    <i class="soap-icon-support circle"></i>
                                    <h5 class="title"><a href="#">Excellent Support</a></h5>
                                    <p>Get full support from out team.</p>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
       <?php include('page_modules/footer.php');  ?>
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
                    oringnal_value = 10 * parseInt(oringnal_value);
                }
                tjq(this).slider({
                    range: "min",
                    value: oringnal_value,
                    min: 0,
                    max: 50,
                    slide: function( event, ui ) {
                        
                    }
                });
            });
        });
    </script>
</body>
</html>

