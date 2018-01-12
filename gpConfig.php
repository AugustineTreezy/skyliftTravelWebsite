<?php
include('user-session.php');

//Include Google client library 
include 'src/Google_Client.php';
include 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '294339453145-2m1aqommtav4qqs7dadipt3klkdbrvik.apps.googleusercontent.com'; //Google client ID
$clientSecret = '97l7gkCm1f_6HVdfDMhfINNP'; //Google client secret
$redirectURL = 'http://localhost/skylift/index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Skylift');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>