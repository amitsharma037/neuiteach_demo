<?php 
session_start();
include_once('_config/connect.php'); 
require_once("classes/viewModel/teacherDashboard.viewmodel.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>neuiteach Education</title>
 
<link rel="stylesheet" type="text/css" href="style/jQuery/grid-framework.css"/>
<link rel="stylesheet" type="text/css" href="style/jQuery/material.css"/>
<link rel="stylesheet" type="text/css" href="style/jQuery/jquery-confirm.css"/>
<link rel="stylesheet" type="text/css" href="style/jQuery/chosen.css"/>
<link rel="stylesheet" type="text/css" href="style/jQuery/select2.css"/>
<link rel="stylesheet" type="text/css" href="style/neuiton.css"/>
<link rel="stylesheet" type="text/css" href="style/highlighted.css"/>
<link rel="stylesheet" type="text/css" href="style/admin/bootstrapcdn.css"/> 
<link rel="stylesheet" type="text/css" href="style/jQuery/bootstrap-spinner.css"/>
<link rel="stylesheet" type="text/css" href="style/animation.css"/>

<script type="text/javascript" src="js/jQuery/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/angular/jquery-confirm.js"></script>
<script type="text/javascript" src="js/jQuery/select2.full.js"></script>
<script type="text/javascript" src="js/angular/angular.js"></script>
<script type="text/javascript" src="js/angular/angular-aria.min.js"></script>
<script type="text/javascript" src="js/angular/angular-messages.js"></script>
<script type="text/javascript" src="js/angular/angular-animate.min.js"></script>
<script type="text/javascript" src="js/angular/angular-cookies.min.js"></script>
<script type="text/javascript" src="js/angular/angular-route.js"></script>
<script type="text/javascript" src="js/angular/angular-material.min.js"></script>
<script type="text/javascript" src="js/angular/ui-bootstrap-tpls-1.3.3.js"></script>
<script type="text/javascript" src="js/angularViewModel/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKyX5MCI9pT0PJRAXTHBXlSaV9ko52emw&libraries=places"></script>
<script type="text/javascript" src="js/angular/angular-autocomplete-location.js"></script>
<script type="text/javascript" src="js/jQuery/animation.js"></script>

<script>
	indexViewModel();
</script>

</head>

<body id="home-page" ng-app="ernext" ng-controller="mainControl">
	<!-- Header -->
	<?php include_once('header.inc.php'); ?>
	<div class="cl"></div>
    <!-- eof Header -->
    
    <div id="container">
        <!-- Banner -->
		<?php require_once('slider.inc.php'); ?>
        <!-- eof Banner -->
        
        <!-- highlighted -->
		<div class="cl"></div>
		<?php require_once('highlighted.inc.php'); ?>
        <!-- eof highlighted -->
		
	  <div class="cl"></div>
      <div class="main-body">
            <!-- Our courses -->
			<?php require_once('our-courses.inc.php'); ?>
            <!-- eof Our courses -->
		  
		  	<!-- Our teacher -->
			<?php require_once('our-teacher.inc.php'); ?>
            <!-- eof Our teacher -->
            
		  	<!-- Google Adsence session -->
			<?php require_once('google-adsence.inc.php'); ?>
            <!-- eof Google Adsence session -->
        <div class="cl"></div>    
        </div>
		
		<div style="margin-bottom: 30px;">
        <!-- Footer-->
		 <?php require_once('footer.inc.php'); ?>
        <!-- eof Footer-->
		</div>
    </div>
	<div class="cl"></div>
	<div id="footer-fixed" style="margin-top: 90px;">
		<div class="res-btn-area">
			<a href="request-for-demo" class="res-btn">Request for Demo</a>
			<a href="contact-us" class="res-btn">Contact Us</a>
		</div>
	</div>
    
    
</body>
</html>