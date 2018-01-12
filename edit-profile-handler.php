<?php
include('user-session.php'); 
include ('connection.php'); 
$userData=$_SESSION["userData"];
$email = $userData['email'];
error_reporting(0);
if(empty($_POST['first_name'])  || 
   empty($_POST['last_name'])){ 
    
}else{

    $usr_first_name = mysqli_real_escape_string($db,trim(ucfirst($_POST['first_name']))); 
    $usr_last_name = mysqli_real_escape_string($db,trim(ucfirst($_POST['last_name']))); 
    $usr_phone= mysqli_real_escape_string($db,trim($_POST['phone']));
    $usr_email= mysqli_real_escape_string($db,trim($_POST['email']));
    $usr_city= mysqli_real_escape_string($db,trim($_POST['city']));
    $usr_country= mysqli_real_escape_string($db,trim($_POST['country']));
    $usr_desc= mysqli_real_escape_string($db,trim($_POST['desc']));
    $data = $_POST['image'];

    $res=mysqli_query($db,"SELECT * FROM `users` WHERE `email`='$email'");
    
    $cols_=mysqli_fetch_assoc($res);
    $id=$cols_['id'];
    

if(empty($errors)){
    if (isset($_POST['image'])) {
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $imageName = 'user_'.$id.'.png';
        file_put_contents('images/user_dp/'.$imageName, $data);
        $imageName_db='images/user_dp/'.$imageName;

     
    }
     $ins=mysqli_query($db,"UPDATE `users` SET `first_name`='$usr_first_name',`last_name`='$usr_last_name',`email`='$usr_email',`phone`='$usr_phone',`city`='$usr_city',`country`='$usr_country',`about`='$usr_desc',`picture`='$imageName_db' WHERE `email`='$usr_email'");
        if($ins){ ?>
                    <div class="alert alert-success alert-dismissable fade in">
                        <?php echo "Profile updated successfully"; ?>
                    <span class="close"></span><br><br>

            <?php
           
             }else{?>
                    <div class="alert alert-error alert-dismissable fade in" >
                        <?php echo "An error occured, please try again later"; ?>
                    <span class="close"></span><br><br>

            <?php

             }
          }              
    }
     
?>
