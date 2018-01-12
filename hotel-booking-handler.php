<?php
include('user-session.php');
error_reporting(0); 
$errors = '';
$myemail = 'augustinetreezy@gmail.com';
if(empty($_POST['first_name'])  || 
   empty($_POST['last_name']) || 
   empty($_POST['phone']) || 
   empty($_POST['adults']) || 
   empty($_POST['check_in']) || 
   empty($_POST['check_out']) || 
   empty($_POST['email']))
{
    $errors .= "Error: all fields are required to be filled";
}

$first_name = $_POST['first_name']; 
$last_name = $_POST['last_name']; 
$email_address = $_POST['email']; 
$phone = $_POST['phone']; 
$adults = $_POST['adults']; 
$depart_date = $_POST['check_in']; 
$depart_date = $_POST['check_out']; 
$subject = isset($_POST['subject']) ? $_POST['subject'] : "";
$message = $_POST['message'];
$website = isset($_POST['website']) ? $_POST['website'] : "";

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address)){
    $errors .= "<br />Error: Invalid email address";
}

if( empty($errors)){
    $to = $myemail; 
    $email_subject = "Contact form submission" . (empty($subject) ? "" : ": " . $subject);
    $email_body = "You have received a new message. ".
    " Here are the details:\n\nName: $name \nEmail: $email_address " . (empty($website) ? "" : "\nWebsite: " . $website) . "\nMessage: \n\n$message"; 
    
    $headers = "From: $myemail\n"; 
    $headers .= "Reply-To: $email_address";
    
    mail($to,$email_subject,$email_body,$headers);

    $success_msg = "Your message successfully sent!";
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
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="skylift | Responsive HTML5 Travel Template">
    <meta name="author" content="SoapTheme">

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
                    <li><a href="#">PAGES</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main">
                    <?php if (!empty($errors)) { ?>
                        <div class="alert alert-error">
                            <?php echo $errors; ?>
                            <span class="close"></span>
                        </div>
                    <?php } else if (!empty($success_msg)) { ?>
                        <div class="alert alert-success">
                            <?php echo $success_msg; ?>
                            <span class="close"></span>
                        </div>
                    <?php }    ?>
                    <br />
                    <a class="button btn-small sky-blue1" onclick="history.go(-1);">Go Back</a>
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
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="js/theme-scripts.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    
</body>
</html>

