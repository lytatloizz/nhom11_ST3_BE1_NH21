<?php
session_start();
require "config/config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/users.php";
$manu = new Manufacture;
$product = new Product;
$getAllProducts = $product->getAllProducts();
$getAllmanu = $manu->getAllManu();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<!-- Custom stlylesheet -->


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="bill.php"><i class="fas fa-wallet"></i>Bill</a></li>
						<li><a href="user.php"><i class="fa fa-user"></i>User</a></li>
						<li><a href="account-center.html"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form method="get" action="result.php">
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here" name="keyword">
									<button type="submit" class="search-btn" name="submit">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">
											<?php 
											if(isset($_SESSION['cart']))
										 		echo sizeof($_SESSION['cart']);
											else
											 echo 0;
											 ?>
										 </div>
									</a>
									<div class="cart-dropdown">
										
										<?php if(isset($_SESSION['cart'])): for ($i=0; $i < sizeof($_SESSION['cart']); $i++):  ?>
										<div class="cart">
											<div class="product-widget">
												<?php
													echo '<div class="product-img">
															<img src="./img/'.$_SESSION['cart'][$i][2].'" alt="">
														</div>
														<div class="product-body">
															<h3 class="product-name"><a href="#">'. $_SESSION['cart'][$i][1] .'</a></h3>
															<h4 class="product-price"><span class="qty">1x</span>'. $_SESSION['cart'][$i][3].'</h4>
														</div>';
												?>
											</div>
										</div>
										<?php endfor; endif ?>
										<div class="cart-summary">
											<small><?php
											if(isset($_SESSION['cart']))
											{
												echo sizeof($_SESSION['cart']);
											}else
											{
												echo 0;
											}
											 
											 ?> Item(s) selected</small>
											<h5>SUBTOTAL: <?php 
											if(isset($_SESSION['cart']))
											{
												echo number_format( $_SESSION['sum']);
											}else
											{
												echo 0;
											}
											
											 ?>VND</h5>
										</div>
										<div class="cart-btns">
											<a href="add-cart.php">View Cart</a>
											<a href="add-cart.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
										
									</div>
								</div>
								<!-- /Cart -->	
								
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<?php foreach($getAllmanu as $value): ?>
						<li><a href="products.php?manu_id=<?php echo $value['manu_id'] ?>">
							<?php echo $value['manu_name'] ?>
						</a></li>
						<?php endforeach; ?>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->


