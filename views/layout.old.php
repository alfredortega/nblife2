<?php

?>
<!DOCTYPE html>
<html>
  <head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>styles/master.css" >
	<link rel="stylesheet" href="<?php echo $GLOBALS['BASE_URL'] ?>styles/menu.css" >
	

  </head>
  <body>
  	<div class="Container">
		<div class="Header">
		
		</div><!--end Header-->
		<div class="MenuContainer" id="Menu">
			<ul class="nav navbar-nav">
				<!--<li><a href="/" class="current"><span>Home</span></a></li> -->
				<li><a href="<?php echo $GLOBALS['BASE_URL'] ?>pages/index"><span>Home</span></a></li>
				<li><a href="<?php echo $GLOBALS['BASE_URL'] ?>pages/aboutus"><span>About Us</span></a></li>
				<li><a href="<?php echo $GLOBALS['BASE_URL'] ?>posts/index"><span>Posts</span></a></li>
				<?php if(isset($_SESSION['User'])) { ?>
					<li><a href="<?php echo $GLOBALS['BASE_URL'] ?>users/index"><span>Users</span></a></li>
					<li><a href="<?php echo $GLOBALS['BASE_URL'] ?>users/logout"><span>Logout</span></a></li>
				<?php } else {  ?>
					<li><a href="<?php echo $GLOBALS['BASE_URL'] ?>users/register"><span>Register</span></a></li>
					<li><a href="<?php echo $GLOBALS['BASE_URL'] ?>users/login"><span>Login</span></a></li>
				<?php } ?>
			</ul>
		</div>	
		<br/>
		<div class="LeftBody">
			Woo hoo
		</div>
		<div class="RightBody">
			<?php require_once('routes.php'); ?>
		</div>
		<div class="Footer">
		  Copyright &copy; 2014-2016
		</div>
  	</div><!-- end container-->
  <body>
<html>


