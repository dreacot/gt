<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="Dreacot">
	<title>GameTrade.ng | Login</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="/assets/css/infinite-slider.css" rel="stylesheet">
	<link href='/assets/fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
	<link href="/assets/css/style.css" rel="stylesheet">
	<link href="/assets/css/animate.css" rel="stylesheet">
	<link href="/assets/css/w3.css" rel="stylesheet">
	<link href="/assets/css/hover-min.css" rel="stylesheet">
</head>

<body>
	<!-- <preloader> -->
	<div id="preloader">
		<div class="spinner spinner-round"></div>
	</div>
	<!-- site header-->
	<header class="site-header">
		<!-- >>>>>>> 24eb2c8bf7d5f410d10bb3077b678fbc477dd7de -->
		<!-- <main class="site-main"> -->
		<div>
			<nav class="navbar navbar-default" id="title">
				<div class="container">
					<div class="navbar-header">
						<div class="container">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse, #bs-navbar-collapse1">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="index" class="navbar-brand brand-logo">
								<img src="/assets/img/logo.png" srcset="/assets/img/logo2.png 2x, img/logo3.png 3x" alt="Post" width="100%"
								 height="100%">
							</a>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="bs-navbar-collapse1" style="float: left">
						<ul class="nav navbar-nav main-navbar-nav">
							<li><a href="#xwhishlist" class="fa fa-heart-o" onclick="toggle_visibility('myWishlist');"> Wishlist</a></li>
							<div class="wishlist-popup" id="myWishlist">
								<form action="/action_page.php" class="wishlist-container">
									<ul class="header-cart-wrapitem">
										<li class="header-cart-item">
											<div class="header-cart-item-img">
												<img src="/assets/img/wishlist/item-01.jpg" alt="IMG">
											</div>
											<div class="header-cart-item-txt">
												<a href="#" class="header-cart-item-name">
													Grand Theft Auto V
												</a>
												<span class="header-cart-item-info">
													₦5,600.00
												</span>
											</div>
										</li>
										<hr>
										<li class="header-cart-item">
											<div class="header-cart-item-img">
												<img src="/assets/img/wishlist/item-01.jpg" alt="IMG">
											</div>
											<div class="header-cart-item-txt">
												<a href="#" class="header-cart-item-name">
													The Last of Us
												</a>
												<span class="header-cart-item-info">
													₦5,600.00
												</span>
											</div>
										</li>


									</ul>
								</form>
							</div>
							<li><a href="#xsearch" class="fa fa-search" onclick="toggle_visibility('mySearch');"> Search</a></li>
							<div class="search-popup" id="mySearch">
								<form action="/action_page.php" class="search-container">
									<input type="search" placeholder="Search..." name="search">
									<div class="close-icon fa fa-times-thin" onclick="toggle_visibility('mySearch');"></div>
								</form>
							</div>
						</ul>
					</div>
					<a href="index.php" class="topnav-centered navbar-brand ">
						<img src="/assets/img/logo.png" srcset="/assets/img/logo2.png 2x, img/logo3.png 3x" alt="Post">
					</a>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-navbar-collapse">
						<ul class="nav navbar-nav main-navbar-nav">
							<li><a href="#xcart" class=" fa fa-cart-plus" onclick="toggle_visibility('myCart');"> Cart</a></li>
							<span class="header-icons-noti-top-aft">5</span>
							<div class="form-popup" id="myCart">
								<form action="/action_page.php" class="form-container">
									<ul class="header-cart-wrapitem">
										<li class="header-cart-item">
											<div class="header-cart-item-img">
												<img src="/assets/img/cart/item-01.jpg" alt="IMG">
											</div>
											<div class="header-cart-item-txt">
												<a href="#" class="header-cart-item-name">
													Ghost Recon: Advanced Warfighter
												</a>
												<span class="header-cart-item-info">
													1 x ₦5,600.00
												</span>
											</div>
										</li>
										<hr>
										<li class="header-cart-item">
											<div class="header-cart-item-img">
												<img src="/assets/img/cart/item-01.jpg" alt="IMG">
											</div>
											<div class="header-cart-item-txt">
												<a href="#" class="header-cart-item-name">
													Detriot has fallen
												</a>
												<span class="header-cart-item-info">
													1 x ₦15,600.00
												</span>
											</div>
										</li>
									</ul>
									<div class="header-cart-total">
										Total: ₦34,400.00
									</div>
									<div class="header-cart-buttons">
										<div class="header-cart-wrapbtn">
											<!-- Button -->
											<a href="#xcart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
												View Cart
											</a>
										</div>
										<div class="header-cart-wrapbtn">
											<!-- Button -->
											<a href="#xcheckout" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
												Check Out
											</a>
										</div>
									</div>
								</form>
							</div>

							<li><a href="#xcart" class=" fa fa-bell" onclick="toggle_visibility('myNotification');"></a></li>
							<!-- /.navbar-collapse -->
							<span class="header-icons-noti-noti">1</span>
							<div class="notification-popup" id="myNotification">
								<div class="form-container">
									<div class="w-300 text-center">
										<span class="fa fa-bell fa-5x"></span><br>
										<span>No notification</span>
									</div>

								</div>
							</div>


							<li><a href="#xaccount" class=" fa fa-user-o" onclick="toggle_visibility('myForm');"> Hi, <b>
										<?php if (isset($_SESSION['user'])){ echo $_SESSION['firstname']; } else {echo "Login"; }?></b> <i class="fa fa-caret-down"></i></a></li>
							<!-- <Form housing login and signup dropdown> -->
							<div class=" form-popup" id="myForm">
								<!-- <login Dropdown> -->
								<div id="defaultOpen1" class="">
									<div class="form-container border">
										<div>
											<a href="account">
												<p class="header-dropdown"><i class="fa fa-user"></i> My Profile</p>
											</a>
											<a href="orders">
												<p class="header-dropdown"><i class="fa fa-shopping-bag"></i> My Orders</p>
											</a>
											<a href="wishlist">
												<p class="header-dropdown"><i class="fa fa-heart"></i> My Wishlist</p>
											</a>
											<a href="#xwallet">
												<p class="header-dropdown"><i class="fa fa-credit-card"></i> My Wallet</p>
											</a>
											<a href="#x">
												<p class="header-dropdown"><i class="fa fa-map-marker"></i> Track My Order</p>
											</a>
											<a href="#xlogout">
												<p class="header-dropdown logout"><i class="fa fa-sign-out"></i> Logout</p>
											</a>
										</div>

									</div>
								</div>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title text-center">Sign Up</h4>
										</div>
										<div class="modal-body ">
											<form action="/exchange/process_register" class="signup-form-container">
												<div class="form-group ">
													<label for="firstname"><b>First Name</b></label>
													<input type="text" placeholder="Enter First Name" name="firstname" required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="lastname"><b>Last Name</b></label>
													<input type="text" placeholder="Enter Last Name" name="lastname" required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="email"><b>Email</b></label>
													<input type="text" placeholder="Enter Email" name="email" required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="phonenumber"><b>Phone Number</b></label>
													<input type="tel" placeholder="Enter Phone Number" name="phonenumber" minlength="11" maxlength="11"
													 required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="password"><b>Password</b></label>
													<input type="password" placeholder="Enter Password" name="password" minlength="8" required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="confirm_password"><b>Confirm Password</b></label>
													<input type="password" placeholder="Confirm Password" name="confirm_password" minlength="8" required>
													<span class="help-block"></span>
												</div>
												<p class="">
													<input type="checkbox" placeholder="Confirm Password" name="psw" required>
													I have read and accepted the <a class="brown" href="#xterms">terms and conditions</a>
												</p>
												<button type="submit" class="btn">Sign Up</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- <password Dropdown> -->
							<div class="form-popup" id="myReset">
								<form action="/action_page.php" class="form-container">
									<h1 style="font-size: 14px; text-align: center">Reset Password</h1>
									<label for="email"><b>Email</b></label>
									<input type="text" placeholder="Enter Email" name="email" required>
									<button type="submit" class="btn">Reset Password</button>
									<div style=" text-align: center">
										<a class="brown" href="#xforgot" onclick="toggle_visibility('myReset');toggle_visibility('myForm');">Login</a>
									</div>
									<!-- <<<<<<< HEAD -->
								</form>
								<!-- ======= -->
								</form>
							</div>
							<!-- >>>>>>> 24eb2c8bf7d5f410d10bb3077b678fbc477dd7de -->
					</div>
					<!-- /.navbar-collapse -->
					<!-- END MAIN NAVIGATION -->
				</div>
			</nav>
		</div>
	</header>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/assets/js/custom.js"></script>
	<script src="/assets/js/carousel.js"></script>
	<script src="/assets/js/preloader.js"></script>
	<script src="/assets/js/jquery.easing.min.js"></script>
	<script>
		$(document).ready(function () {
			$("body").mouseup(function (e) {
				var subject = $("#myReset");

				if (e.target.id !== subject.attr('id') && !subject.has(e.target).length) {
					subject.fadeOut();
				}

			});
		});

	</script>
</body>

</html>