<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->


<!-- Mirrored from htmldemo.net/bstore/bstore/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 18:19:20 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Bstore - Fashion Modern HTML5 eCommerce Website Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../../public/assets/images/favicon.webp">


	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="../../../public/assets/css/font-awesome.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../../../public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/assets/css/animate.css">
    <link rel="stylesheet" href="../../../public/assets/css/jquery.fancybox.css">
    <link rel="stylesheet" href="../../../public/assets/css/jquery.bxslider.css">
    <link rel="stylesheet" href="../../../public/assets/css/jquery-ui-slider.css">
    <link rel="stylesheet" href="../../../public/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../../../public/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../public/assets/css/nivo-slider.css">
    <link rel="stylesheet" href="../../../public/assets/css/main.css">
    <link rel="stylesheet" href="../../../public/assets/css/ie.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
    <link rel="stylesheet" href="../../../public/assets/css/responsive.css">

</head>

<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- Add your site or application content here -->

	<!-- HEADER AREA START -->
	<header class="hedaer-area">

		<!-- HEADER-TOP START -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<!-- HEADER-LEFT-MENU START -->
					<div class="col-md-6">
						<div class="header-left-menu">
							<div class="welcome-info">
								Welcome <span>Bstore</span>
							</div>
							<div class="currenty-converter">
								<form method="post" action="#" id="currency-set">
									<div class="current-currency">
										<span class="cur-label">Currency : </span><strong>USD</strong>
									</div>
									<ul class="currency-list currency-toogle">
										<li>
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
										<li>
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
									</ul>
								</form>
							</div>
							<div class="selected-language">
								<div class="current-lang">
									<span class="current-lang-label">Language : </span><strong>English</strong>
								</div>
								<ul class="languages-choose language-toogle">
									<li>
										<a href="#" title="English">
											<span>English</span>
										</a>
									</li>
									<li>
										<a href="#" title="Français (French)">
											<span>Français</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- HEADER-LEFT-MENU END -->
	
					<!-- HEADER-RIGHT-MENU START -->
					<div class="col-md-6">
						<?php
							if (isset($_SESSION['taiKhoan'])) { 
								extract($_SESSION['taiKhoan']);
						?>
						<div class="header-right-menu">
							<nav>
								<ul class="list-inline">
								<li class="list-inline-item"><a href="index.php?act=quenmatkhau">Quên mật khẩu</a></li>
									<li class="list-inline-item"><a href="index.php?act=edit_taikhoan">Cập nhập tài khoản</a></li>
									<li class="list-inline-item"><a href="index.php?act=dangxuat">Đăng xuất</a></li>
									<?php if ($id_role==1) {?>
                						<li class="list-inline-item"><a href="../Admin/index.php">Đăng nhập Admin</a></li>
                					<?php }?>
									<li class="list-inline-item"><a href="cart.html">My Cart</a></li>
									<li class="list-inline-item"><a href=""><?php echo $taiKhoan ?></a></li>
								</ul>
							</nav>
						</div>
						<?php }else{?>
						<div class="header-right-menu">
							<nav>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="cart.html">My Cart</a></li>
									<li class="list-inline-item"><a href="index.php?act=dangnhap">Đăng nhập</a></li>
								</ul>
							</nav>
						</div>
						<?php }?>
					</div>
					<!-- HEADER-RIGHT-MENU END -->
				</div>
			</div>
		</div>
		<!-- HEADER-TOP END -->

		<!-- HEADER-MIDDLE START -->
		<div class="header-middle d-none d-lg-block">
			<div class="container">
				<div class="header-middle-wraper">
	
					<!-- LOGO START -->
					<div class="logo">
						<a href="index.html"><img src="../../../public/assets/images/logo.webp" alt="bstore logo" /></a>
					</div>
					<!-- LOGO END -->
	
					<!-- CATEGORYS-PRODUCT-SEARCH START -->
					<div class="categorys-product-search">
						<form action="index.php?act=sanpham" method="post" class="search-form-cat">
							<div class="search-product form-group">
								<select name="id_dm" class="cat-search">
									<option value="">Danh mục</option>
									<?php
										foreach ($listdm as $dm) {
											echo '<option value="'.$dm['id_dm'].'">'.$dm['ten_dm'].'</option>';
										}
									?>
								</select>
								<input type="text" class="form-control search-form" name="s"
									placeholder="Enter your search key ... " />
								<button class="search-button" value="Search" name="btn" type="submit">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</form>
					</div>
					<!-- CATEGORYS-PRODUCT-SEARCH END -->

					<!-- HEADER-RIGHT-CALLUS START -->
					<div class="header-right-callus">
						<h3>call us free</h3>
						<span>0123-456-789</span>
					</div>
					<!-- HEADER-RIGHT-CALLUS END -->

				</div>
			</div>
		</div>
		<!-- HEADER-MIDDLE END -->

		<!-- MAIN-MENU-AREA START -->
		<div class="main-menu-area d-none d-lg-block">
			<div class="container">
				<div class="row">

					<!-- MAINMENU START -->
					<div class="col-lg-9">
						<div class="mainmenu">
							<nav>
								<ul>
									<li class="active"><a href="index.php">Home</a>								
									</li>
									<li>
										<a href="index.php?act=sanpham">Sản phẩm</a>
									</li>
									<li>
										<a href="shop-gird.html">Danh mục</a>
										<ul class="home-menu">
											<li><a href="shop-gird.html">T-shirts</a></li>
											<li><a href="shop-gird.html">clothing</a></li>
											<li><a href="shop-gird.html">Delivery</a></li>
										</ul>
									</li>
									<li>
										<a href="shop-gird.html">Giới thiệu</a>
									</li>
									<li>
										<a href="shop-gird.html">Liên hệ</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- MAINMENU END -->

					<!-- SHOPPING-CART START -->
					<div class="col-lg-3">
						<div class="shopping-cart-out d-flex justify-content-end">
							<div class="shopping-cart">
								<a class="shop-link" href="cart.html" title="View my shopping cart">
									<i class="fa fa-shopping-cart cart-icon"></i>
									<b>My Cart</b>
									<span class="ajax-cart-quantity">2</span>
								</a>

								<div class="shipping-cart-overly">
									<div class="shipping-item">
										<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
										<div class="shipping-item-image">
											<a href="#"><img src="../../../public/assets/images/shopping-image.webp" alt="shopping image" /></a>
										</div>
										<div class="shipping-item-text">
											<span>2 <span class="pro-quan-x">x</span> <a href="#"
													class="pro-cat">Watch</a></span>
											<span class="pro-quality"><a href="#">S,Black</a></span>
											<p>$22.95</p>
										</div>
									</div>
									<div class="shipping-item">
										<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
										<div class="shipping-item-image">
											<a href="#"><img src="../../../public/assets/images/shopping-image2.webp" alt="shopping image" /></a>
										</div>
										<div class="shipping-item-text">
											<span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Women
													Bag</a></span>
											<span class="pro-quality"><a href="#">S,Gary</a></span>
											<p>$19.95</p>
										</div>
									</div>
									<div class="shipping-total-bill">
										<div class="cart-prices">
											<span class="shipping-cost">$2.00</span>
											<span>Shipping</span>
										</div>
										<div class="total-shipping-prices">
											<span class="shipping-total">$24.95</span>
											<span>Total</span>
										</div>
									</div>
									<div class="shipping-checkout-btn">
										<a href="checkout.html">Check out <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- SHOPPING-CART END -->

				</div>			
			</div>
		</div>
		<!-- MAIN-MENU-AREA END -->

		<!-- Mobile Header START -->
		<div class="mobile-header d-lg-none">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-4">
						<div class="header-toggle">
							<button class="toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
								<span></span>
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
					<div class="col-4">
						<div class="logo">
							<a href="index.html"><img src="../../../public/assets/images/logo.webp" alt="bstore logo" /></a>
						</div>
					</div>
					<div class="col-4">
						<div class="mobile-shopping-cart">
							<a class="shop-link" href="cart.html" title="View my shopping cart">
								<i class="fa fa-shopping-cart cart-icon"></i>								
								<span class="cart-quantity">2</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Header END -->

	</header>
	<!-- HEADER AREA End -->