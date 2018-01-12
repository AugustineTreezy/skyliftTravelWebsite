<?php
include('user-session.php'); 
include ('connection.php'); 
error_reporting(0);
$errors = '';
if(empty($_POST['first_name'])  || 
   empty($_POST['last_name'])  || 
   empty($_POST['password']) || 
   empty($_POST['confirm_password'])){
    $errors .= "Error: Name, Email and password fields are required";
    
}else{

$first_name = mysqli_real_escape_string($db,trim(ucfirst($_POST['first_name'])); 
$email_address = mysqli_real_escape_string($db,trim($_POST['email'])));
$last_name = mysqli_real_escape_string($db,trim(ucfirst($_POST['last_name']))); 
$password= mysqli_real_escape_string($db,trim($_POST['password'])); 
$confirm_password= mysqli_real_escape_string($db,trim($_POST['confirm_password']));
$subscribe=mysqli_real_escape_string($db,trim($_POST['subscribe'])); 


if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address)){
    $errors .= "Error: Invalid email address";
     
}else{
if($password!=$confirm_password){
    $errors .= "Error: Your password does not match";
     
}else{
    $new_password=md5($password);

if( empty($errors)){
    //check if user exists
    $check=mysqli_query($db,"SELECT * FROM `users` WHERE `email`='$email_address'");
    if(mysqli_num_rows($check)==1){
        $errors .= "Error: You are already a member, proceed to <a id='my_link' href='#travelo-login' class='soap-popupbox'>login</a>";
         

    }else{
        $created=date("Y-m-d h:i:s");
        $ins=mysqli_query($db,"INSERT INTO `users`(`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `phone` `password`, `gender`, `locale`, `picture`, `city`, `country`, `about`, `link`, `created`, `modified`) VALUES ('','custom','','$first_name','$last_name','$email_address', '' '$new_password','','','avatar.png','','','','',$created','$created')");
        if($ins){
            //if user checked skylift news, add user to subscribers
            if($subscribe=='true'){
                $sub=mysqli_query($db,"INSERT INTO `subscribers`(`id`, `email`) VALUES ('','$email_address')");
            }           
             
            $success_msg = "You have successfully regestered"; 
            // header("location:javascript://history.go(-1)");
            $cols=mysqli_fetch_array($check_user); 

            $gpUserData = array(                    
                    'first_name'    => $cols['first_name'],
                    'last_name'     => $cols['last_name'],
                    'email'         => $cols['email'],
                    'phone'         => $cols['phone'],        
                    'picture'       => $cols['picture'],
                    'city'       => $cols['city'],
                    'country'       => $cols['country'],
                    'about'       => $cols['about'],
                    
                );
                //Storing user data into session
                }
            $_SESSION['userData'] = $gpUserData;
                         

        }else{
             $errors .= "Error: Unable to SignUp, try again later";
        }
       }
    }
 }
}
} 
?>

<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>skylift | Responsive HTML5 Travel Template</title>
    
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
    <style type="text/css">
        #my_link{
            color: #6699ff;

        }
        #my_link hover{
            color: #ffffff;
            
        }
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
        <div id="page-wrapper">   
        <?php
            include('page_modules/header.php');
        ?>

        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Sign Up</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">Sign Up</li>
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

