<?php 
session_cache_limiter('private_no_expire');
include('user-session.php');
include('connection.php');
error_reporting(0);

    $destination=mysqli_real_escape_string($db,trim($_POST['destination']));
    $check_in=mysqli_real_escape_string($db,trim($_POST['check_in']));
    $check_out=mysqli_real_escape_string($db,trim($_POST['check_out']));

    $bookInfo = array(                    
                    'check_in'    => $check_in,
                    'check_out'     => $check_out,                    
                );
        //Storing book data into session
    $_SESSION['bookinfo'] = $bookInfo;
   

  $res=mysqli_query($db,"SELECT * FROM `hotels` WHERE `name` LIKE '%$destination%' OR `location` LIKE '%$destination%' LIMIT 15");
  $num=mysqli_num_rows($res);
  ?>
  
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Hotel-list | Skylift</title>
    
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
        <?php include('page_modules/header.php'); ?>
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Hotel Search Results</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">Hotel Search Results</li>
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
                                        <a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modify Search</a>
                                    </h4>
                                    <div id="modify-search-panel" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            <form method="post">
                                                <div class="form-group">
                                                    <label>destination</label>
                                                    <input type="text" class="input-text full-width" name="destination" placeholder="" value="<?php echo $destination ?>" />
                                                    <div class="card" id="hotel-suggesstion-box"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label>check in</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="check_in" class="input-text full-width" placeholder="mm/dd/yy" value="<?php echo $check_in ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>check out</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="check_out" class="input-text full-width" placeholder="mm/dd/yy" value="<?php echo $check_out ?>" />
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
                            
                            <div id="hotel_list" class="hotel-list listing-style3 hotel">

                                <!-- Fetch the hotels -->
                                <?php
                                while ($cols=mysqli_fetch_array($res)) {
                                $hotel_id=$cols['hotel_id'];
                                $res2=mysqli_query($db,"SELECT * FROM `hotel_images` WHERE `hotel_id`='$hotel_id'");
                                $cols2=mysqli_fetch_array($res2);                       

                                ?>                                
                                <article id="hot_single" class="box">
                                    <figure class="col-sm-5 col-md-4">
                                        <img width="270" height="160" alt="" src="images/hotels/resized0/<?php echo $cols2['img1']; ?>" alt="<?php echo $cols['name']; ?>">
                                    </figure>
                                    <div class="details col-sm-7 col-md-8">
                                         <div class="details-wrapper">
                                           <div class="first-row">
                                                <h4 class="box-title"><?php echo $cols['name']; ?><small><i class="soap-icon-departure yellow-color"></i> <?php echo $cols['location']; ?></small></h4>
                                                <div class="amenities">
                                                    <?php
                                                      if ($cols['wifi']==1) { ?>
                                                        <i class="soap-icon-wifi circle" data-toggle="tooltip" title="Wi-Fi available"></i>
                                                    </li>
                                                    <?php
                                                      }
                                                    ?>

                                                    <?php
                                                      if ($cols['fitness_facility']==1) { ?>
                                                        <i class="soap-icon-fitnessfacility circle" data-toggle="tooltip" title="Fitness Facility available"></i>
                                                    </li>
                                                    <?php
                                                      }
                                                    ?>

                                                    <?php
                                                      if ($cols['restaurant']==1) { ?>
                                                        <i class="soap-icon-fork circle" data-toggle="tooltip" title="Restaurant available"></i>
                                                    </li>
                                                    <?php
                                                      }
                                                    ?>

                                                    <?php
                                                      if ($cols['swimming_pool']==1) { ?>
                                                        <i class="soap-icon-swimming circle" data-toggle="tooltip" title="Swimming pool available"></i>
                                                    </li>
                                                    <?php
                                                      }
                                                    ?>

                                                    <?php
                                                      if ($cols['wine_bar']==1) { ?>
                                                        <i class="soap-icon-coffee circle" data-toggle="tooltip" title="Wine bar available"></i>
                                                    </li>
                                                    <?php
                                                      }
                                                    ?>
                                                  
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div>
                                            <p><?php echo mb_strimwidth($cols['description'], 0, 200, "..."); ?></p>
                                            <div>
                                                <span class="price"><small>AVG/NIGHT</small>$<?php echo $cols['price']; ?></span>
                                                <form id="push_<?php echo $cols['id']; ?>" method="post" action="hotel-detailed.php">
                                                    <input type="hidden" name="id" value="<?php echo $cols['id']; ?>">
                                                    <a class="button btn-small full-width text-center" title="" onclick="document.getElementById('push_<?php echo $cols['id']; ?>').submit();">SELECT</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <?php
                                  }                 
                  
                                  if(mysqli_num_rows($res)<1){ ?>
                                    <div class="alert alert-error">
                                       <?php echo"No results found, please check your spellings and retry again"; ?> 
                                    <span class="close"></span>
                                  
                                  <?php
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
                    price_filter(ui.values[ 0 ],ui.values[ 1 ]);

                }
                
            });
            tjq(".min-price-label").html( "$" + tjq("#price-range").slider( "values", 0 ));
            tjq(".max-price-label").html( "$" + tjq("#price-range").slider( "values", 1 ));   

            function price_filter(min,max) {
                tjq.ajax({
                    type: "POST",
                    url: "php/filter_hotel_price.php",
                    data:'min='+ min + '&max=' + max,
                    beforeSend: function(){
                        tjq('#hotel_list').css("opacity", ".5");
                    },
                    success: function(data){
                        tjq('#hotel_list').css("opacity", "");
                        tjq('#hot_single').html(data);
                    }
                });
                             
            }      
            
        });
    </script>
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>
</body>
</html>

