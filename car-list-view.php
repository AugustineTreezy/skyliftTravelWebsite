<?php 
session_cache_limiter('private_no_expire');
include('user-session.php');
include('connection.php');
// error_reporting(0);

$pick_up_location=mysqli_real_escape_string($db,trim($_POST['pick_up_location']));
$drop_off_location=mysqli_real_escape_string($db,trim($_POST['drop_off_location']));
$pick_up_date=mysqli_real_escape_string($db,trim($_POST['pick_up_date']));
$drop_off_date=mysqli_real_escape_string($db,trim($_POST['drop_off_date']));

$res=mysqli_query($db,"SELECT * FROM `cars` WHERE `pick_location` LIKE '%$pick_up_location%' OR `drop_location` LIKE '%$drop_off_location%' LIMIT 15");
$num=mysqli_num_rows($res);

?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Cars-List | Skylift</title>
    
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
                    <h2 class="entry-title">Car Search Results</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">Car Search Results</li>
                </ul>
            </div>
        </div>
        <section id="content" class="gray-area">
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
                                        <a data-toggle="collapse" href="#cartype-filter" class="collapsed">Car Type</a>
                                    </h4>
                                    <div id="cartype-filter" class="panel-collapse collapse filters-container">
                                        <div class="panel-content">
                                            <ul class="check-square filters-option">
                                                <li><a href="#">Full Size<small>(10)</small></a></li>
                                                <li><a href="#">Compact<small>(82)</small></a></li>
                                                <li class="active"><a href="#">Economy<small>(127)</small></a></li>
                                                <li><a href="#">Luxury / Premium<small>(22)</small></a></li>
                                                <li><a href="#">Mini Car<small>(38)</small></a></li>
                                                <li><a href="#">Van / Minivan<small>(39)</small></a></li>
                                                <li><a href="#">Exotic / Special<small>(72)</small></a></li>
                                            </ul>
                                            <a class="button btn-mini">MORE</a>
                                        </div>
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
                                                    <label>pickup from</label>
                                                    <input type="text" name="pick_up_location" class="input-text full-width" placeholder="city, district, or specific airpot" value="<?php echo $pick_up_location ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label>pick-up date</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="pick_up_date" class="input-text full-width" placeholder="mm/dd/yy" value="<?php echo $pick_up_date ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>drop-off date</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="drop_off_date" class="input-text full-width" placeholder="mm/dd/yy" value="<?php echo $drop_off_date ?>" />
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

                            <div class="car-list listing-style3 car">
                             <h4 class="search-results-title"><i class="soap-icon-search"></i><b><?php echo $num ?></b> results found.</h4><br>
                                <?php
                                while ($cols=mysqli_fetch_array($res)) {  
                                $car_id=$cols['car_id'];
                                $res2=mysqli_query($db,"SELECT * FROM `car_images` WHERE `car_id`='$car_id'");
                                $cols2=mysqli_fetch_array($res2);                 

                                ?> 
                                
                                <article class="box">
                                    <figure class="col-xs-3">
                                        <span><img src="images/cars/resized0/<?php echo $cols2['img1']; ?>" alt="<?php echo $cols['name']; ?>"></span>
                                    </figure>
                                    <div class="details col-xs-9 clearfix">
                                        <div class="col-sm-8">
                                            <div class="clearfix">
                                                <h4 class="box-title"><?php echo $cols['name']; ?><small><?php echo $cols['type']; ?></small></h4>
                                               
                                            </div>
                                            <div class="amenities">
                                                <ul>
                                                    <li><i class="soap-icon-user circle" data-toggle="tooltip" title="Accomodates <?php echo $cols['passengers']; ?> passengers"></i><?php echo $cols['passengers']; ?></li>
                                                    <li><i class="soap-icon-suitcase circle" data-toggle="tooltip" title="Fits <?php echo $cols['bags']; ?> bags"></i></i><?php echo $cols['bags']; ?></li>
                                                    <?php
                                                      if ($cols['airconditioner']==1) { ?>
                                                    <li><i class="soap-icon-aircon circle" data-toggle="tooltip" title="Air Conditioner available"></i>AC</li>
                                                    <?php
                                                      }
                                                    ?>

                                                    <?php
                                                      if ($cols['automatictransmission']==1) { ?>
                                                    <li><i class="soap-icon-automatic-transmission circle" data-toggle="tooltip" title="Has Automatic Transmission"></i>AT</li>
                                                    <?php
                                                      }
                                                    ?>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-2 character">
                                            <dl class="">
                                                <dt class="skin-color">mileage</dt><dd><?php echo $cols['mileage']; ?> miles</dd>
                                                <dt class="skin-color">Location</dt><dd>London city</dd>
                                            </dl>
                                        </div>
                                        <div class="action col-xs-6 col-sm-2">
                                            <span class="price"><small>per day</small>$<?php echo $cols['price']; ?></span>                        
                                            <form id="push_<?php echo $cols['id']; ?>" method="post" action="car-detailed.php">
                                                        <input type="hidden" name="id" value="<?php echo $cols['id']; ?>">
                                            <a onclick="document.getElementById('push_<?php echo $cols['id']; ?>').submit();" class="button btn-small">select</a>
                                            </form>
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
    
    <script type="text/javascript">
        tjq(document).ready(function() {
            tjq("#price-range").slider({
                range: true,
                min: 0,
                max: 1000,
                values: [ 100, 800 ],
                slide: function( event, ui ) {
                    tjq(".min-price-label").php( "$" + ui.values[ 0 ]);
                    tjq(".max-price-label").php( "$" + ui.values[ 1 ]);
                }
            });
            tjq(".min-price-label").php( "$" + tjq("#price-range").slider( "values", 0 ));
            tjq(".max-price-label").php( "$" + tjq("#price-range").slider( "values", 1 ));
            function filterProducts();
        });
    </script>
    <script>
    function filterProducts() {
    var price_range = $('#price_range').val();
    $.ajax({
        type: 'POST',
        url: 'php/filter_hotel_price.php',
        data:'price_range='+price_range,
        beforeSend: function () {
            $('.container').css("opacity", ".5");
        },
        success: function (html) {
            $('#productContainer').html(html);
            $('.container').css("opacity", "");
        }
    });
}
</script>
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>
</body>
</html>

