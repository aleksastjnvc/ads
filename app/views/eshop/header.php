<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" type="image/x-icon" href="<?= ASSETS . THEME ?>/images/home/ads.png" >

    <title><?php echo $data['page_title'] ?></title>
	
    <link href="<?= ASSETS . THEME ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>/css/price-range.css" rel="stylesheet">
    <link href="<?= ASSETS . THEME ?>/css/animate.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>/css/main.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?= ASSETS . THEME ?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<!-- <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li> -->
					
								<?php if(isset($data['user_data'])): ?>
									<li><a href="#" style="font-size:18px;"><i style="color:orange;" class="fa fa-user"></i> Welcome back, <a style="color:orange; font-size:22px; padding:0; margin-left:16px;" href=""><?php echo ucfirst($data['user_data']->name) ?></a></a></li>
								<?php endif; ?>

							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index"><img src="<?= ASSETS . THEME ?>/images/home/ads.png" style="width:65px;height:65px; margin-left:45px;" alt="" /></a>
						</div>

						<?php if(isset($data['user_data'])): ?>

						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown" style="margin-top:30px;">
									LOCATION
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Location 1</a></li>
									<li><a href="#">Location 2</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown" style="margin-top:30px;">
									YEAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">THIS YEAR</a></li>
									<li><a href="#">LAST YEAR</a></li>
									<li><a href="#">2021.</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown" style="margin-top:30px;">
									VISIBILITY
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Average</a></li>
									<li><a href="#">Premium</a></li>
									<li><a href="#">Ultra</a></li>
								</ul>
							</div>
						</div>

						<?php endif; ?>

					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">

								<?php if(isset($data['user_data']) && $data['user_data']->rank == 'admin'): ?>
								<li><a href="admin"><i class="fa fa-user"></i> Admin's dashboard</a></li>
								<?php endif; ?>	

								<li><a href="#"><i style="color:orange" class="fa fa-clock-o"></i> Latest Ads</a></li>

								<?php if(isset($data['user_data']) && $data['user_data']->rank == 'customer'): ?>

								<li><a href="myads"><i style="color:orange" class="fa fa-list"></i> My Ads</a></li>
								<li><a href="postad" style="font-size:18px;"><i style="color:orange" class="fa fa-crosshairs"></i> Post Ad</a></li>
								
								<?php endif; ?>		
								
								<?php if(isset($data['user_data'])): ?>
									<li><a href="<?=ROOT?>logout"><i style="color:red" class="fa fa-lock"></i> Logout</a></li>
								<?php else: ?>
 									<li><a href="<?=ROOT?>login"><i style="color:green" class="fa fa-lock"></i> Login</a></li>
								<?php endif; ?>
									

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- <div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop">Products</a></li>
										<li><a href="product-details">Product Details</a></li> 
										<li><a href="checkout">Checkout</a></li> 
										<li><a href="cart">Cart</a></li> 
										<li><a href="login">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog">Blog List</a></li>
										<li><a href="blog-single">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404">404</a></li>
								<li><a href="contact-us">Contact</a></li>
							</ul>
						</div> -->
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->