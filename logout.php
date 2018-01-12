<?php
include('user-session.php');
include('connection.php');

    $userData=$_SESSION["userData"];
    $email = $userData['email'];
$check=mysqli_query($db,"SELECT * FROM `users` WHERE `email`='$email'");
if (mysqli_num_rows($check)==1) {
	$cols=mysqli_fetch_array($check);
	if ($cols['oauth_provider']=="google") {
		 //Include GP config file
		include_once 'gpConfig.php';

		//Unset token and user data from session
		unset($_SESSION['token']);
		unset($_SESSION['userData']);

		//Reset OAuth access token
		$gClient->revokeToken();

		//Destroy entire session
		session_destroy();
	}else{
		unset($_SESSION['userData']);
		session_destroy();

	}
}

//Redirect to homepage
header("Location:index.php");
?>