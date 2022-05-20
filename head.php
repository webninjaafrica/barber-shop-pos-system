<?php session_start();  if(!isset($_SESSION['user_id']) && !isset($_SESSION['user_details'])){ header('location: login.php'); } include_once('autoload.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>BARBER | HOME</title>
	
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <style type="text/css">
    	a{padding:8px !important;}
    </style>
</head>
<body>

