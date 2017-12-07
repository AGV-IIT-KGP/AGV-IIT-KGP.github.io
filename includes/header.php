<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<title>Autonomous Ground Vehicle(AGV) IIT Kharagpur</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	
	<!-- Styles -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen"/>
	<link rel="stylesheet" href="css/color-scheme/blue.css">
	<link rel="stylesheet" href="css/jquery-ui.css">

	<!-- Base JS -->
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/main.js"></script>
	
	<!-- Revolution Slider -->
	<script src="js/jquery.themepunch.plugins.min.js"></script>
	<script src="js/jquery.themepunch.revolution.min.js"></script>
	<script src="js/revolution-slider-options.js"></script>
	
	<!--Map-->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/jquery.gmap.min.js"></script>

	<!-- Filtering -->
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/filter.js"></script>

	<!-- Prety photo -->
	<script src="js/jquery.prettyPhoto.js"></script>
	<script>
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
	</script>
</head>

<body id="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'header-transparent'; }else { echo ''; } ?>">

<div class="main">

	<!-- HEADER 
	============================================= -->
	<div class="header header-transparent header-alt">
		<div class="layout clearfix">
			<div class="mob-layout wrap-left">
				<!-- Logo -->
				<a href="./index.php" class="logo"><img src="img/agv.png" alt=""></a>
				<!-- Mobile Navigation Button -->
				<div class="btn-menu icon-reorder"></div>

				<!-- Search Form -->
				<form action="/" class="b-search-form" role="search" method="get" id="searchform">
					<div class="input-wrap">
						<input type="text" placeholder="Search..">
					</div>
				</form>
				<!-- End Search Form -->

				<!-- Navigation -->
				<ul class="menu">
					<!-- Item 1 -->
					<li class="has-mega">
						<a href="index.php" class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'active'; }else { echo ''; } ?>">Home</a>
					</li>					

					<li>
						<a href="projects.php" class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'projects.php'){echo 'active'; }else { echo ''; } ?>">Projects</a>
					</li>

					<li>
						<a href="publications.php" class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'publications.php'){echo 'active'; }else { echo ''; } ?>">Publications</a>
					</li>
					
					<!-- Item 2 - MegaMenu -->
					<li class="has-mega">
						<a href="people.php" class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'people.php'){echo 'active'; }else { echo ''; } ?>">People</a>
					</li>

					<!-- Item x - MegaMenu -->
					<li class="has-mega">
						<a href="recruitment.php" class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'recruitment.php'){echo 'active'; }else { echo ''; } ?>">Recruitment</a>
					</li>

					<!-- Item y - MegaMenu -->
					<li class="has-mega">
						<a href="sponsorship.php" class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'sponsorship.php'){echo 'active'; }else { echo ''; } ?>">Sponsorship</a>
					</li>

					<!-- Item 3 -->
					<li>
						<a href="blog.php" class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'blog.php'){echo 'active'; }else { echo ''; } ?>">Blog</a>
					</li>

					<!-- Item 4 -->
					<li>
						<a href="contact.php" class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'contact.php'){echo 'active'; }else { echo ''; } ?>">Contact</a>
					</li>

				</ul>
			</div>
		</div>
		<!-- Mobile Navigation -->
		<ul class="mob-menu">
			<!-- Item 1 -->
			<li>
				<div>
					<a href="index.html">Home</a>
					<span class="btn-submenu"></span>
				</div>
			</li>					

			<li>
				<div>
					<a href="index.html">Projects</a>
					<span class="btn-submenu"></span>
				</div>
			</li>

			<li>
				<div>
					<a href="index.html">Publications</a>
					<span class="btn-submenu"></span>
				</div>
			</li>

			<!-- Item 2 -->
			<li>
				<div>
					<a href="about-us.html">People</a>
					<span class="btn-submenu"></span>
				</div>
			</li>
			<!-- End Item 2 -->
			<!-- Item 3 -->
			<li>
				<div>
					<a href="blog.html">Blog</a>
					<span class="btn-submenu"></span>
				</div>
			</li>
			<!-- End Item 3 -->
			<!-- Item 4 -->
			<li>
				<div>
					<a href="contact.html">Contact</a>
					<span class="btn-submenu"></span>
				</div>
			</li>
			<!-- End Item 4 -->
		</ul>
		<!-- End Mobile Navigation -->
	</div>
	<!-- END HEADER 
	============================================= -->
