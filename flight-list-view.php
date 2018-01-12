<?php
session_cache_limiter('private_no_expire');
include('user-session.php');
include('connection.php');
error_reporting(0);

    $leaving_frm=mysqli_real_escape_string($db,trim($_POST['leaving_frm']));
    $leaving_to=mysqli_real_escape_string($db,trim($_POST['leaving_to'])); 
    $depart_frm=mysqli_real_escape_string($db,trim($_POST['depart_frm']));
    $depart_time=mysqli_real_escape_string($db,trim($_POST['depart_time']));

  $res=mysqli_query($db,"SELECT * FROM `flights` WHERE `leaving_from` LIKE '%$leaving_frm%' AND `going_to` LIKE '%$leaving_to%' LIMIT 15");
  $num=mysqli_num_rows($res);
  ?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Flight-list | Skylift</title>
    
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
                    <h2 class="entry-title">Flight Search Results</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">Flight Search Results</li>
                </ul>
            </div>
        </div>
        <section id="content">
            <div class="container">
                <div id="main">
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="toggle-container filters-container">
                                <div class="panel style1 arrow-right">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#price-filter" class="collapsed">Price</a>
                                    </h4>
                                    <div id="price-filter" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            <div id="price-range"></div>
                                            <br />
                                            <span class="min-price-label pull-left"></span>
                                            <span class="max-price-label pull-right"></span>
                                            <div class="clearer"></div>
                                        </div><!-- end content -->
                                    </div>
                                </div>
                                
                                <div class="panel style1 arrow-right">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#flight-times-filter" class="collapsed">Flight Times</a>
                                    </h4>
                                    <div id="flight-times-filter" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            <div id="flight-times" class="slider-color-yellow"></div>
                                            <br />
                                            <span class="start-time-label pull-left"></span>
                                            <span class="end-time-label pull-right"></span>
                                            <div class="clearer"></div>
                                        </div><!-- end content -->
                                    </div>
                                </div>                               
                                
                                <div class="panel style1 arrow-right">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modify Search</a>
                                    </h4>
                                    <div id="modify-search-panel" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            <form method="post">
                                                <div class="form-group">
                                                    <label>Leaving from</label>
                                                    <input type="text" class="input-text full-width" placeholder="" value="city, district, or specific airpot" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Departure on</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Arriving On</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                    </div>
                                                </div>
                                                <br />
                                                <button class="btn-medium icon-check uppercase full-width">search again</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-9">
                            
                            <div id="flight_list" class="flight-list listing-style3 flight">
                                <h4 class="search-results-title"><i class="soap-icon-search"></i><b><?php echo $num ?></b> results found.</h4>
                                <!-- Fetch the flights -->
                                <?php
                                while ($cols=mysqli_fetch_array($res)) {
                                $airline=$cols['airline'];
                                $res2=mysqli_query($db,"SELECT * FROM `flight_desc` WHERE `name`='$airline'");
                                $cols2=mysqli_fetch_array($res2);                    

                                ?>
                                <article id="flight_single" class="box">
                                    <figure class="col-xs-3 col-sm-2">
                                        <span><img alt="<?php echo $cols2['name']; ?>" src="images/flights/resized0/<?php echo $cols2['logo']; ?>"></span>
                                    </figure>
                                    <div class="details col-xs-9 col-sm-10">
                                        <div class="details-wrapper">
                                            <div class="first-row">
                                                <div>
                                                    <h4 class="box-title"><?php echo $cols['leaving_from']; ?> to <?php echo $cols['going_to']; ?><small><?php echo $cols['trip']; ?> flight</small></h4>
                                                
                                                    <div class="amenities">
                                                        <?php
                                                          if ($cols['airconditioner']==1) { ?>
                                                             <i class="soap-icon-aircon circle" data-toggle="tooltip" title="Air conditioner available"></i>
                                                              <?php
                                                          }
                                                        ?>

                                                       <?php
                                                          if ($cols['wifi']==1) { ?>                                                              
                                                            <i class="soap-icon-wifi circle" data-toggle="tooltip" title="Wi_Fi available"></i>
                                                              <?php
                                                          }
                                                        ?>

                                                        <?php
                                                          if ($cols['food']==1) { ?>
                                                            <i class="soap-icon-food circle" data-toggle="tooltip" title="Food available"></i>
                                                              <?php
                                                          }
                                                        ?> 

                                                        <?php
                                                          if ($cols['drink']==1) { ?>
                                                             <i class="soap-icon-juice circle" data-toggle="tooltip" title="Drinks available"></i>
                                                              <?php
                                                          }
                                                        ?>  

                                                        <?php
                                                          if ($cols['tv']==1) { ?>
                                                             <i class="soap-icon-television circle" data-toggle="tooltip" title="Television available"></i>
                                                              <?php
                                                          }
                                                        ?>                                                     
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="price"><small>AVG/PERSON</small>$<?php echo $cols['price']; ?></span>
                                                </div>
                                            </div>
                                            <div class="second-row">
                                                <div class="time">
                                                    <div class="take-off col-sm-4">
                                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                                        <div>
                                                            <span class="skin-color">Take off</span><br /><?php echo $cols['depart_date']; ?> <?php echo $cols['depart_time']; ?>
                                                        </div>
                                                    </div>
                                                    <div class="landing col-sm-4">
                                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                                        <div>
                                                            <span class="skin-color">landing</span><br /><?php echo $cols['arrive_date']; ?> <?php echo $cols['arrive_time']; ?>
                                                        </div>
                                                    </div>
                                                    <div class="total-time col-sm-4">
                                                        <div class="icon"><i class="soap-icon-clock yellow-color"></i></div>
                                                        <div>
                                                            <span class="skin-color">total time</span><br /><?php echo $cols['total_time']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action">
                                                    <form id="push_<?php echo $cols['id']; ?>" method="post" action="flight-detailed.php">
                                                        <input type="hidden" name="id" value="<?php echo $cols['id']; ?>">
                                                    <a onclick="document.getElementById('push_<?php echo $cols['id']; ?>').submit();" class="button btn-small full-width">SELECT NOW</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <?php
                                  }                 
                  
                                  if(mysqli_num_rows($res)<1){
                                  echo"No results found, please check your spellings and retry again";
                                    }
                               ?>
                                                                              
                                
                            </div>
                            
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
    
    <script type="text/javascript">
        tjq(document).ready(function() {
            tjq("#price-range").slider({
                range: true,
                min: 0,
                max: 1000,
                values: [ 100, 800 ],
                slide: function( event, ui ) {
                    tjq(".min-price-label").html( "$" + ui.values[ 0 ]);
                    tjq(".max-price-label").html( "$" + ui.values[ 1 ]);
                    // price_filter(ui.values[ 0 ],ui.values[ 1 ]);
                }
            });
            tjq(".min-price-label").html( "$" + tjq("#price-range").slider( "values", 0 ));
            tjq(".max-price-label").html( "$" + tjq("#price-range").slider( "values", 1 ));

            function price_filter(min,max) {
                tjq.ajax({
                    type: "POST",
                    url: "php/filter_flight_price.php",
                    data:'min='+ min + '&max=' + max,
                    beforeSend: function(){
                        tjq('#flight_list').css("opacity", ".5");
                    },
                    success: function(data){
                        tjq('#flight_list').css("opacity", "");
                        tjq('#flight_single').html(data);
                    }
                });
                             
            } 

            function convertTimeToHHMM(t) {
                var minutes = t % 60;
                var hour = (t - minutes) / 60;
                var timeStr = (hour + "").lpad("0", 2) + ":" + (minutes + "").lpad("0", 2);
                var date = new Date("2018/01/01 " + timeStr + ":00");
                var hhmm = date.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'});
                return hhmm;
            }
            tjq("#flight-times").slider({
                range: true,
                min: 0,
                max: 1440,
                step: 5,
                values: [ 360, 1200 ],
                slide: function( event, ui ) {
                    
                    tjq(".start-time-label").html( convertTimeToHHMM(ui.values[0]) );
                    tjq(".end-time-label").html( convertTimeToHHMM(ui.values[1]) );
                }
            });
            tjq(".start-time-label").html( convertTimeToHHMM(tjq("#flight-times").slider( "values", 0 )) );
            tjq(".end-time-label").html( convertTimeToHHMM(tjq("#flight-times").slider( "values", 1 )) );
        });
    </script>
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>
</body>
</html>

