<?php
session_start();
require_once "GoogleAPI/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("1072340591244-qs8cces4ru221ah7h84dn2gta6jdkhri.apps.googleusercontent.com");
$gClient->setClientSecret("A4xoTUsX4fPEwtNqCLiB990J");
$gClient->setApplicationName("Tes 2");
$gClient->setRedirectUri("http://localhost/Tes2/g-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
