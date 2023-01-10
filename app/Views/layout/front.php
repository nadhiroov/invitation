<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from html.templines.com/sokolcov/appbox/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 17:52:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AppBox</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.html" />

		<link href="<?= base_url(); ?>/template3/css/master.css" rel="stylesheet">

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="<?= base_url(); ?>/template3/plugins/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= base_url(); ?>/template3/plugins/switcher/css/color1.css" title="color1" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="<?= base_url(); ?>/template3/plugins/switcher/css/color2.css" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= base_url(); ?>/template3/plugins/switcher/css/color3.css" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="<?= base_url(); ?>/template3/plugins/switcher/css/color4.css" title="color4" media="all" />

		<script src="<?= base_url(); ?>/template3/js/jquery-1.11.2.min.js"></script>
		<script src="<?= base_url(); ?>/template3/js/bootstrap.min.js"></script>
		<script src="<?= base_url(); ?>/template3/js/modernizr.custom.js"></script>

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="animated-css">
		<div class="sp-body">
		<!-- Loader Landing Page -->
		<div id="ip-container" class="ip-container"> 
			<div class="ip-header" >
				<div class="ip-loader">
					<div class="text-center">
						<div class="ip-logo">
							<a class="logo"></a>
						</div>
					</div>
					<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
						<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
						<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
					</svg> 
				</div>
			</div>
		</div>
		<!-- Loader end -->
		<!-- Start Switcher -->
		<div class="switcher-wrapper">	
			<div class="demo_changer">
				<div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
				<div class="form_holder">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="predefined_styles">
								<div class="skin-theme-switcher">
									<h4>Skin</h4>
									<a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#05c3f9;"> </a>
									<a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#252525;"> </a>
									<a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#8bc34a;"> </a>							
									<a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#d94939;"> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<script src="<?= base_url(); ?>/template3/plugins/switcher/js/bootstrap-select.js"></script> 
			<script src="<?= base_url(); ?>/template3/plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script> 
			<script src="<?= base_url(); ?>/template3/plugins/switcher/js/dmss.js"></script>
		</div>
		<!-- End Switcher -->
		<header class="header pageRow paralax skew skew-bottom" style="background-image: url('<?= base_url(); ?>/template3/media/paralax/2.jpg');">
			<div class="overlay"></div>
			<div class="wrapper">
				<div class="header-outer">
					<div class="header-inner">
						<div class="header-top row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"><a href=".html" class="logo"></a></div>
							<div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
								<i class="fa fa-bars mobileMenuNav whiteTxtColor"></i>
								<nav class="nav-container customBgColor">
									<i class="fa fa-times mobileMenuNav small-device"></i>
									<ul class="menu">
										<li class="search pull-right">
											<form class="search-form form-inline" action="#" method="POST">
												<div class="form-group">
													<label class="sr-only" for="searchQuery">Search...</label>
													<input type="search" class="search-field roboto" id="searchQuery" placeholder="Search...">
												</div>
												<button type="submit" class="hidden">Search</button>
											</form>
											<a class="iconSearch roboto whiteTxtColor" href="#"><i class="fa fa-search"></i></a>
										</li>
										<li class="dropdown">
											<a data-toggle="dropdown" class="roboto whiteTxtColor dropdown-toggle" href="home-1.html">HOME <i class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu clearfix">
												<li><a class="roboto" href="home-1.html">HOME Version 1</a></li>
												<li><a class="roboto" href="home-2.html">HOME Version 2</a></li>
												<li><a class="roboto" href="home-3.html">HOME Version 3</a></li>
											</ul>
										</li>
										<li><a class="roboto whiteTxtColor" href="home-1.html">ABOUT</a></li>
										<li><a class="roboto whiteTxtColor" href="app-store.html">FEATURES</a></li>
										<li><a class="roboto whiteTxtColor" href="app-details.html">REVIEWS</a></li>
										<li><a class="roboto whiteTxtColor" href="home-1.html">SCREENS</a></li>
										<li><a class="roboto whiteTxtColor" href="blog.html">BLOG</a></li>
										<li><a class="roboto whiteTxtColor" href="signin">LOG IN</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="header-bottom header-v2 row">
					<div class="col-lg-12">
						<div class="header-left">
							<h1 class="header-title ralewaySemiBold whiteTxtColor">Best Way To Present Your Beautiful Mobile App</h1>
							<span class="header-subtitle_small roboto whiteTxtColor">AppBox is full of awesome features. Its designed for</span>
							<span class="header-subtitle_bold robotoMedium whiteTxtColor">App Landing and App Store site</span>
							<a href="blog-details.html" class="ellipseLink text-uppercase customColorLink whiteTxtColor pull-left robotoMedium hvr-pop" data-wow-delay="3.3s">LEARN MORE</a>
						</div>
						<div class="header-right">
							<img class="wow fadeInRight" data-wow-delay="3.3s" src="<?= base_url(); ?>/template3/media/home/5.png" alt="Phone">
						</div>
					</div>
				</div>
			</div>
			<div class="skew_appended whiteSection"></div>
		</header>
		<section id="getForFree" class="pageRow">
			<div class="wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="title_bold text-center ralewaySemiBold wow zoomIn blackTxtColor" data-wow-delay="0.3s">GET IT FOR FREE</h2>
						<span class="subtitle text-center robotoLight col-lg-12 col-md-12 col-sm-12 col-xs-12 wow zoomIn" data-wow-delay="0.3s">Choose your native platform and download the app FREE!</span>
						<div class="clearfix"></div>
						<ul class="store-buttons center-block clearfix arrowGetFree">
							<li class="pull-left wow fadeInLeft" data-wow-delay="0.3s">
								<a href="#" class="ellipseBtn bigBtn whiteBtn hvr-pop">
									<span>
										<i class="fa-custom-google-play"></i>
										Google Play
									</span>
								</a>
							</li>
							<li class="pull-right wow fadeInRight" data-wow-delay="0.3s">
								<a href="#" class="ellipseBtn bigBtn colorBtn hvr-pop">
									<span>
										<i class="fa fa-apple"></i>
										iOS App Store
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>			
		</section>
		<section id="amazingFeatures" class="pageRow skew skew-top graySection">
			<div class="wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="sectionTitle text-center ralewayLight balck">Some Amazing Features</h3>
						<ul class="featuresList pull-left col-lg-12">
							<li class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
								<div class="feature-item text-center clearfix hvr-pop">
									<div class="circle bigCircle center-block">
										<span><i class="fa fa-laptop customColor"></i></span>
									</div>
									<span class="feature-item_title text-uppercase text-center ralewaySemiBold col-lg-12 col-md-12 col-sm-12 col-xs-12 blackTxtColor">RESPONSIVE DESIGN</span>
									<span class="feature-item_desc text-center robotoLight col-lg-12 col-md-12 col-sm-12 col-xs-12">Eleifend morbi velit porttitor sed ipsum imperdiet ac ullamcorper fusce</span>
								</div>
							</li>
							<li class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
								<div class="feature-item text-center clearfix hvr-pop">
									<div class="circle bigCircle center-block">
										<span><i class="fa fa-flask customColor"></i></span>
									</div>
									<span class="feature-item_title text-uppercase text-center ralewaySemiBold col-lg-12 col-md-12 col-sm-12 col-xs-12 blackTxtColor">EASY TO CUSTOMIZE</span>
									<span class="feature-item_desc text-center robotoLight col-lg-12 col-md-12 col-sm-12 col-xs-12">Eleifend morbi velit porttitor sed ipsum imperdiet ac ullamcorper fusce</span>
								</div>
							</li>
							<li class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
								<div class="feature-item text-center clearfix hvr-pop">
									<div class="circle bigCircle center-block">
										<span><i class="fa fa-plane customColor"></i></span>
									</div>
									<span class="feature-item_title text-uppercase text-center ralewaySemiBold col-lg-12 col-md-12 col-sm-12 col-xs-12 blackTxtColor">PERFECT SHOWCASE</span>
									<span class="feature-item_desc text-center robotoLight col-lg-12 col-md-12 col-sm-12 col-xs-12">Eleifend morbi velit porttitor sed ipsum imperdiet ac ullamcorper fusce</span>
								</div>
							</li>
							<li class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
								<div class="feature-item text-center clearfix hvr-pop">
									<div class="circle bigCircle center-block">
										<span><i class="fa fa-cog customColor"></i></span>
									</div>
									<span class="feature-item_title text-uppercase text-center ralewaySemiBold col-lg-12 col-md-12 col-sm-12 col-xs-12 blackTxtColor">APP STORE SUPPORT</span>
									<span class="feature-item_desc text-center robotoLight col-lg-12 col-md-12 col-sm-12 col-xs-12">Eleifend morbi velit porttitor sed ipsum imperdiet ac ullamcorper fusce</span>
								</div>
							</li>							
						</ul>
					</div>
				</div>
			</div>
			<div class="skew_prepended whiteSection"></div>
		</section>
		<section id="new" class="pageRow paralax skew skew-bottom customBgColor trianglifyBox">
			<div class="wrapper">
				<div class="downloadConainer row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
						<a href="app-details.html" class="ellipseBtn smallBtn customWhiteBtn hvr-pop pull-left clear">
							<span class="text-uppercase">new</span>
						</a>
						<h3 class="sectionName ralewaySemiBold pull-left whiteTxtColor clear">Live conference support available</h3>
						<div class="sectionDesc robotoLight whiteTxtColor pull-left clear">Eleifend morbi orci velit porttitor sed imperdiet ac ullamcorper Fusce eget tortor vel magna iaculis convallis. Aeneaneros vitae metus pellentesque tincidunt.Cum sociis natoque penatibus et magnis dis parturient montes.</div>
						<div class="downloadBox pull-left clear arrowFreeDownload">
							<span class="downloadBox-text robotoCondensed whiteTxtColor pull-left">Free Download On</span>
							<span class="downloadBox-appbox robotoCondensedBold whiteTxtColor pull-left text-center">
								<i class="fa fa-android"></i>
								ANDROID
							</span>
							<span class="downloadBox-appbox robotoCondensedBold whiteTxtColor pull-left text-center">
								<i class="fa fa-apple"></i>
								iOS
							</span>
						</div>
					</div>
					<div class="posterBox col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<img class="wow fadeInRight" src="<?= base_url(); ?>/template3/media/home/2.png" alt="Poster" data-wow-delay="0.3s">
					</div>
				</div>
			</div>
			<div class="skew_appended whiteSection"></div>
		</section>
		<section id="choose" class="pageRow">
			<div class="wrapper">
				<div class="chooseApp row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
						<h3 class="sectionTitle text-center ralewayLight balck">Why Choose AppBox</h3>
						<div class="row">
							<div class="optionsBox col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
								<div class="centerPhone col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
									<img class="wow bounceIn" src="<?= base_url(); ?>/template3/media/home/3.png" alt="Phone" data-wow-delay="0.3s">
								</div>
								<ul class="optionsList pageRow">
									<li class="pull-left col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="options-item wow fadeInLeft" data-wow-delay="0.3s">
											<div class="circle smallCircle">
												<span><i class="fa fa-cubes customColor"></i></span>
											</div>
											<h4 class="options-name ralewaySemiBold text-uppercase text-right blackTxtColor">APP STORE</h4>
											<span class="options-desc robotoLight text-right">Eleifend morbi velit porttitor sed ipsum imperdiet ac ullamcorper fusce</span>
											<span class="option-dots"></span>
										</div>
									</li>
									<li class="pull-right col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="options-item wow fadeInRight" data-wow-delay="0.3s">
											<div class="circle smallCircle">
												<span><i class="fa fa-flag customColor"></i></span>
											</div>
											<h4 class="options-name ralewaySemiBold text-uppercase text-left blackTxtColor">MULTIPURPOSE LAYOUT</h4>
											<span class="options-desc robotoLight text-left">Eleifend morbi velit porttitor sed ipsum imperdiet ac ullamcorper fusce</span>
											<span class="option-dots"></span>
										</div>
									</li>
									<li class="pull-left col-lg-4 col-md-4 col-sm-4 col-xs-12 clear">
										<div class="options-item wow fadeInLeft" data-wow-delay="0.3s">
											<div class="circle smallCircle">
												<span><i class="fa fa-desktop customColor"></i></span>
											</div>
											<h4 class="options-name ralewaySemiBold text-uppercase text-right blackTxtColor">RETINA READY</h4>
											<span class="options-desc robotoLight text-right">Eleifend morbi velit porttitor sed ipsum imperdiet ac ullamcorper fusce</span>
											<span class="option-dots"></span>
										</div>
									</li>
									<li class="pull-right col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="options-item wow fadeInRight" data-wow-delay="0.3s">
											<div class="circle smallCircle">
												<span><i class="fa fa-comment customColor"></i></span>
											</div>
											<h4 class="options-name ralewaySemiBold text-uppercase text-left blackTxtColor">LIVE CHAT SUPPORT</h4>
											<span class="options-desc robotoLight text-left">Eleifend morbi velit porttitor sed ipsum imperdiet ac ullamcorper fusce</span>
											<span class="option-dots"></span>
										</div>
									</li>
									<li class="pull-left col-lg-4 col-md-4 col-sm-4 col-xs-12 clear">
										<div class="options-item wow fadeInLeft" data-wow-delay="0.3s">
											<div class="circle smallCircle">
												<span><i class="fa fa-apple customColor"></i></span>
											</div>
											<h4 class="options-name ralewaySemiBold text-uppercase text-right blackTxtColor">PREMIUM SUPPORT</h4>
											<span class="options-desc robotoLight text-right">Eleifend morbi velit porttitor sed ipsum imperdiet ac ullamcorper fusce</span>
										</div>
									</li>
									<li class="pull-right col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="options-item wow fadeInRight" data-wow-delay="0.3s">
											<div class="circle smallCircle">
												<span><i class="fa fa-coffee customColor"></i></span>
											</div>
											<h4 class="options-name ralewaySemiBold text-uppercase text-left blackTxtColor">AND MANY MORE </h4>
											<span class="options-desc robotoLight text-left">Eleifend morbi velit porttitor sed ipsum imperdiet ac ullamcorper fusce</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="reviews" class="pageRow full-width-slider-controls paralax skew skew-top customBgColor trianglifyBox">
			<div class="wrapper">
				<div class="reviewsContainer row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix staticBox">
						<div class="bottom-bracket whiteTxtColor circleBox center-block text-center"><i class="fa fa-quote-right"></i></div>
						<h3 class="reviews-title whiteTxtColor raleway text-center reviewsArrow">App Reviews</h3>
						<span class="reviews-subtitle robotoLight whiteTxtColor text-center">Read What Our Happy Customers Are Saying</span>
						<div id="owl-reviews" class="owl-carousel white-control review-full-width staticBox">
							<div class="review-item">
								<div class="review-slide">
									<div class="review-slide_text whiteTxtColor robotoItalic text-center">Eleifend morbi orci velit porttitor sed imperdiet ac ullamcorper Fusce eget tortor vel magna iaculis convallis. Aeneaneros vitae metus pellentesque tincidunt.Cum sociis natoque penatibus et magnis dis parturient montes turpis donec tincidunt tellus.</div>
									<div class="review-slide_autor center-block">
										<div class="review-slide_autor-ava circleBox wow rotateIn" data-wow-delay="0.3s">
											<img src="<?= base_url(); ?>/template3/media/54x54/1.jpg" alt="User Ava">
										</div>
										<div class="review-slide_autor-name whiteTxtColor robotoCondensed">Oscar Mendis</div>
										<div class="review-slide_autor-post whiteTxtColor roboto">Director: BoxApp Media Inc.</div>										
									</div>
								</div>
							</div>
							<div class="review-item">
								<div class="review-slide">
									<div class="review-slide_text whiteTxtColor robotoItalic text-center">Eleifend morbi orci velit porttitor sed imperdiet ac ullamcorper Fusce eget tortor vel magna iaculis convallis. Aeneaneros vitae metus pellentesque tincidunt.Cum sociis natoque penatibus et magnis dis parturient montes turpis donec tincidunt tellus.</div>
									<div class="review-slide_autor center-block">
										<div class="review-slide_autor-ava circleBox wow rotateIn" data-wow-delay="0.3s">
											<img src="<?= base_url(); ?>/template3/media/54x54/1.jpg" alt="User Ava">
										</div>
										<div class="review-slide_autor-name whiteTxtColor robotoCondensed">Oscar Mendis</div>
										<div class="review-slide_autor-post whiteTxtColor roboto">Director: BoxApp Media Inc.</div>										
									</div>
								</div>
							</div>
							<div class="review-item">
								<div class="review-slide">
									<div class="review-slide_text whiteTxtColor robotoItalic text-center">Eleifend morbi orci velit porttitor sed imperdiet ac ullamcorper Fusce eget tortor vel magna iaculis convallis. Aeneaneros vitae metus pellentesque tincidunt.Cum sociis natoque penatibus et magnis dis parturient montes turpis donec tincidunt tellus.</div>
									<div class="review-slide_autor center-block">
										<div class="review-slide_autor-ava circleBox wow rotateIn" data-wow-delay="0.3s">
											<img src="<?= base_url(); ?>/template3/media/54x54/1.jpg" alt="User Ava">
										</div>
										<div class="review-slide_autor-name whiteTxtColor robotoCondensed">Oscar Mendis</div>
										<div class="review-slide_autor-post whiteTxtColor roboto">Director: BoxApp Media Inc.</div>										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="skew_prepended whiteSection"></div>
		</section>
		<section id="screenshots-title" class="pageRow">
			<div class="wrapper">
				<div class="screenshotsTitBox row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
						<h3 class="sectionTitle text-center ralewayLight balck">AppBox Screenshots</h3>
					</div>
				</div>
			</div>
		</section>
		<section id="screenshots" class="pageRow skew skew-screenshots graySection">
			<div class="wrapper">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
						<div id="owl-screenshots" class="owl-carousel phone-slider">
							<div class="screenshot-item wow fadeInLeft" data-wow-delay="0.3s">
								<img src="<?= base_url(); ?>/template3/media/260x455/1.jpg" alt="Screenshot">
							</div>
							<div class="screenshot-item wow fadeInUp" data-wow-delay="0.3s">
								<img src="<?= base_url(); ?>/template3/media/260x455/2.jpg" alt="Screenshot">
							</div>
							<div class="screenshot-item wow fadeInRight" data-wow-delay="0.3s">
								<img src="<?= base_url(); ?>/template3/media/260x455/3.jpg" alt="Screenshot">
							</div>
							<div class="screenshot-item">
								<img src="<?= base_url(); ?>/template3/media/260x455/1.jpg" alt="Screenshot">
							</div>
							<div class="screenshot-item">
								<img src="<?= base_url(); ?>/template3/media/260x455/2.jpg" alt="Screenshot">
							</div>
							<div class="screenshot-item">
								<img src="<?= base_url(); ?>/template3/media/260x455/3.jpg" alt="Screenshot">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="skew_prepended reverse whiteSection"></div>
		</section>
		<section id="appVideo" class="pageRow full-width-slider-controls paralax skew skew-bottom customBgColor trianglifyBox">
			<div class="wrapper">
				<div class="videoAppsBox row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 staticBox clearfix">
						<h3 class="sectionTitle white text-center ralewayLight">App Video Showcase</h3>
						<div class="video-container pagePlayer wow zoomIn" data-wow-delay="0.3s">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="http://www.youtube.com/embed/_NIsv0aHbOw"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="skew_appended whiteSection"></div>
		</section>
		<section id="downloadApp" class="pageRow">
			<div class="wrapper">
				<div class="downloadAppBox row">
					<div class="phonesImgBox col-lg-5 col-md-5 col-sm-12 col-xs-12 clearfix">
						<img class="wow fadeInLeft" data-wow-delay="0.3s" src="<?= base_url(); ?>/template3/media/home/4.png" alt="Phones">
					</div>
					<div class="downloadContainer col-lg-7 col-md-7 col-sm-12 col-xs-12 clearfix">
						<h4 class="download-title ralewayLight blackTxtColor"><span class="ralewayMedium">Download</span> Our App</h4>
						<span class="download-subtitle robotoLight">Choose your native platform and download the app FREE!</span>
						<ul class="store-buttons center-block clearfix">
							<li class="pull-left wow fadeInRight" data-wow-delay="0.3s">
								<a href="#" class="ellipseBtn bigBtn whiteBtn hvr-pop">
									<span>
										<i class="fa-custom-google-play"></i>
										Google Play
									</span>
								</a>
							</li>
							<li class="pull-right wow fadeInRight" data-wow-delay="0.3s">
								<a href="#" class="ellipseBtn bigBtn colorBtn hvr-pop">
									<span>
										<i class="fa fa-apple"></i>
										iOS App Store
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="subscribe" class="pageRow skew skew-top subscribeNewsletter graySection">
			<div class="wrapper">
				<div class="subscribeBox row">
					<div class="subscribeContainer col-lg-7 col-md-7 col-sm-12 col-xs-12 pull-right clearfix">
						<h4 class="subscribe-title ralewaySemiBold">Subscribe To Newsletter</h4>
						<div class="subscribeFormBox pull-left clear">
							<div id="mc_embed_signup" class="mailchimp-form">
								<form action="http://templines.us9.list-manage.com/subscribe/post?u=fe9a9cfcf8d73763bcc53f206&amp;id=319cafcc43" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<div id="mc_embed_signup_scroll">
										<div class="mc-field-group mailchimp-form_field">
											<input type="email" class="subscribe-field robotoLight" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your email address">
										</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>
										<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										<div style="position: absolute; left: -5000px;">
											<input type="text" name="b_fe9a9cfcf8d73763bcc53f206_319cafcc43" tabindex="-1" value="">
										</div>
										<div class="clear">
											<button type="submit" class="mailchimp-form_btn ellipseSubmitBtn whiteTxtColor smallBtn robotoMedium customBgColor hvr-pop pull-right" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="skew_prepended reverse whiteSection"></div>
		</section>
		<section id="discountedPricing" class="pageRow">
			<div class="wrapper">
				<div class="discountBox row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
						<h3 class="sectionTitle text-center ralewayLight balck">Discounted Pricing</h3>
						<span class="smallText text-center robotoLight">Nullam id odio quis risus placerat aliquam. Cum sociis natoque penatibus et magnis dis part <br>urient montes nascetur ridiculus mus curabitur tellus lacus.</span>
						<ul class="package-list">
							<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="package-item center-block wow fadeInLeft" data-wow-delay="0.3s">
									<div class="package-header ralewaySemiBold text-center blackTxtColor">
										Standard Package
										<div class="circle middleCircle center-block">
											<span class="robotoLight">
												<b class="robotoCondensedBold customColor">$11</b>
												per month
											</span>
										</div>
									</div>
									<div class="package-body text-center">
										<ul class="package-options">
											<li class="robotoLight text-center">Unlimited support</li>
											<li class="robotoLight text-center">Easy & Fast Customization</li>
											<li class="robotoLight text-center">Unlimited Color possible</li>
											<li class="robotoLight text-center">Free PSD Template</li>
											<li class="robotoLight text-center">Lifetime Updates</li>
										</ul>
										<a href="app-details.html" class="ellipseLink middleLink center-block robotoMedium blackTxtColor text-uppercase text-center hvr-pop">BUY NOW</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="package-item center-block best wow fadeInUp" data-wow-delay="0.3s">
									<div class="package-header ralewaySemiBold text-center whiteTxtColor">
										Professional Package
										<div class="circle middleCircle center-block">
											<span class="whiteTxtColor">
												<b class="robotoCondensedBold whiteTxtColor">$25</b>
												per month
											</span>
										</div>
									</div>
									<div class="package-body text-center">
										<ul class="package-options">
											<li class="robotoLight text-center">Unlimited support</li>
											<li class="robotoLight text-center">Easy & Fast Customization</li>
											<li class="robotoLight text-center">Unlimited Color possible</li>
											<li class="robotoLight text-center">Free PSD Template</li>
											<li class="robotoLight text-center">Lifetime Updates</li>
										</ul>
										<a href="app-details.html" class="ellipseLink middleLink center-block robotoMedium whiteTxtColor text-uppercase text-center hvr-pop">BUY NOW</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="package-item center-block wow fadeInRight" data-wow-delay="0.3s">
									<div class="package-header ralewaySemiBold text-center blackTxtColor">
										Corporate Package
										<div class="circle middleCircle center-block">
											<span>
												<b class="robotoCondensedBold customColor">$39</b>
												per month
											</span>
										</div>
									</div>
									<div class="package-body text-center">
										<ul class="package-options">
											<li class="robotoLight text-center">Unlimited support</li>
											<li class="robotoLight text-center">Easy & Fast Customization</li>
											<li class="robotoLight text-center">Unlimited Color possible</li>
											<li class="robotoLight text-center">Free PSD Template</li>
											<li class="robotoLight text-center">Lifetime Updates</li>
										</ul>
										<a href="app-details.html" class="ellipseLink middleLink center-block robotoMedium blackTxtColor text-uppercase text-center hvr-pop">BUY NOW</a>
									</div>
								</div>
							</li>							
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="teamMembers" class="pageRow skew paralax skew-top full-width-slider-controls customBgColor trianglifyBox">
			<div class="wrapper">
				<div class="teamMembersBox row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix staticBox">
						<h3 class="reviews-title whiteTxtColor raleway text-center membersArrow">Team Members</h3>
						<span class="reviews-subtitle robotoLight whiteTxtColor text-center">Our Apps Are Made By Professionals, Meet Them Here</span>
						<div id="owl-members" class="owl-carousel white-control member-full-width staticBox">
							<div class="member-item center-block">
								<div class="member-ava circleBox center-block wow rotateIn" data-wow-delay="0.3s">
									<img src="<?= base_url(); ?>/template3/media/124x124/1.png" alt="Member">
								</div>
								<div class="member-name robotoCondensed whiteTxtColor text-center">Oscar Mendis</div>
								<div class="member-specialty roboto whiteTxtColor text-center">AppBox CEO</div>
							</div>
							<div class="member-item center-block">
								<div class="member-ava circleBox center-block wow rotateIn" data-wow-delay="0.3s">
									<img src="<?= base_url(); ?>/template3/media/124x124/2.png" alt="Member">
								</div>
								<div class="member-name robotoCondensed whiteTxtColor text-center">Thomas Hill</div>
								<div class="member-specialty roboto whiteTxtColor text-center">UX UI Designer</div>
							</div>
							<div class="member-item center-block">
								<div class="member-ava circleBox center-block wow rotateIn" data-wow-delay="0.3s">
									<img src="<?= base_url(); ?>/template3/media/124x124/3.png" alt="Member">
								</div>
								<div class="member-name robotoCondensed whiteTxtColor text-center">John Adam</div>
								<div class="member-specialty roboto whiteTxtColor text-center">Developer</div>
							</div>
							<div class="member-item center-block">
								<div class="member-ava circleBox center-block wow rotateIn" data-wow-delay="0.3s">
									<img src="<?= base_url(); ?>/template3/media/124x124/4.png" alt="Member">
								</div>
								<div class="member-name robotoCondensed whiteTxtColor text-center">Olivia Jason</div>
								<div class="member-specialty roboto whiteTxtColor text-center">Javascript</div>
							</div>
							<div class="member-item center-block">
								<div class="member-ava circleBox center-block wow rotateIn" data-wow-delay="0.3s">
									<img src="<?= base_url(); ?>/template3/media/124x124/5.png" alt="Member">
								</div>
								<div class="member-name robotoCondensed whiteTxtColor text-center">Tom Hasman</div>
								<div class="member-specialty roboto whiteTxtColor text-center">Beta Tester</div>
							</div>
							<div class="member-item center-block">
								<div class="member-ava circleBox center-block wow rotateIn" data-wow-delay="0.3s">
									<img src="<?= base_url(); ?>/template3/media/124x124/6.png" alt="Member">
								</div>
								<div class="member-name robotoCondensed whiteTxtColor text-center">Liza Camron</div>
								<div class="member-specialty roboto whiteTxtColor text-center">Developer</div>
							</div>
							<div class="member-item center-block">
								<div class="member-ava circleBox center-block wow rotateIn" data-wow-delay="0.3s">
									<img src="<?= base_url(); ?>/template3/media/124x124/4.png" alt="Member">
								</div>
								<div class="member-name robotoCondensed whiteTxtColor text-center">Oscar Mendis</div>
								<div class="member-specialty roboto whiteTxtColor text-center">Developer</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="skew_prepended whiteSection"></div>
		</section>
		<section id="featured" class="pageRow graySection">
			<div class="wrapper">
				<div class="featuredBox row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
						<h3 class="sectionTitle text-center ralewayLight balck">AppBox Featured In ...</h3>
						<ul class="featured-list">
							<li><img class="wow zoomIn" data-wow-delay="0.3s" src="<?= base_url(); ?>/template3/media/featured/1.png" alt="Logo 1"></li>
							<li><img class="wow zoomIn" data-wow-delay="0.3s" src="<?= base_url(); ?>/template3/media/featured/2.png" alt="Logo 2"></li>
							<li><img class="wow zoomIn" data-wow-delay="0.3s" src="<?= base_url(); ?>/template3/media/featured/3.png" alt="Logo 3"></li>
							<li><img class="wow zoomIn" data-wow-delay="0.3s" src="<?= base_url(); ?>/template3/media/featured/4.png" alt="Logo 4"></li>
							<li><img class="wow zoomIn" data-wow-delay="0.3s" src="<?= base_url(); ?>/template3/media/featured/5.png" alt="Logo 5"></li>
							<li><img class="wow zoomIn" data-wow-delay="0.3s" src="<?= base_url(); ?>/template3/media/featured/6.png" alt="Logo 6"></li>
							<li><img class="wow zoomIn" data-wow-delay="0.3s" src="<?= base_url(); ?>/template3/media/featured/7.png" alt="Logo 7"></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="support" class="pageRow skew skew-top">
			<div class="wrapper">
				<div class="supportBox row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
						<h3 class="sectionTitle text-center ralewayLight balck">App Support</h3>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 clearfix">
							<div class="support-item clearfix wow fadeInLeft" data-wow-delay="0.3s">
								<div class="circle smallCircle">
									<span><i class="fa fa-map-marker customColor"></i></span>
								</div>
								<h4 class="support-item_name ralewaySemiBold blackTxtColor">Address</h4>
								<div class="support-item_info robotoLight">121 King Street, Melbourne Victoria, Australia 3000</div>
							</div>
							<div class="support-item clearfix wow fadeInLeft" data-wow-delay="0.3s">
								<div class="circle smallCircle">
									<span><i class="fa fa-phone customColor"></i></span>
								</div>
								<h4 class="support-item_name ralewaySemiBold blackTxtColor">Free Helpline</h4>
								<div class="support-item_info robotoLight">
									(001) 800 345 333700<br>
									(002) 600 345 333700
								</div>
							</div>
							<div class="support-item clearfix wow fadeInLeft" data-wow-delay="0.3s">
								<div class="circle smallCircle">
									<span><i class="fa fa-envelope customColor"></i></span>
								</div>
								<h4 class="support-item_name ralewaySemiBold blackTxtColor">Email</h4>
								<div class="support-item_info robotoLight">
									<a href="mailto:info@appbox.com">info@appbox.com</a>
									<a href="mailto:info@appbox.com">feedback@appbox.com</a>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 clearfix">
							<div class="support-desc robotoLight">Nullam id odio quis risus placerat aliquam. Cum sociis natoque penatibus et magnis dis part urient montes nascetur ridiculus mus curabitur tellus lacus.</div>
							<div class="support-formbox clearfix wow fadeInRight" data-wow-delay="0.3s">
								<div id="success"></div>
								<form novalidate id="contactForm" class="support-form form-inline" name="sentMessage">
									<div class="form-group half-wigth pull-left">
										<label class="sr-only" for="user-name">Full Name</label>
										<input type="text" data-validation-required-message="Please enter your full name." required class="lineField robotoLight" id="user-name" placeholder="Full Name *">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group half-wigth pull-right">
										<label class="sr-only" for="user-email">Email</label>
										<input type="email" data-validation-required-message="Please enter your email address." required class="lineField robotoLight" id="user-email" placeholder="Email *">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group full-width pull-left">
										<label class="sr-only" for="user-message">Message</label>
										<textarea data-validation-required-message="Please enter a message." required class="lineField robotoLight" id="user-message" placeholder="Message"></textarea>
										<p class="help-block text-danger"></p>
									</div>
									<button type="submit" class="ellipseSubmitBtn whiteTxtColor smallBtn robotoMedium customBgColor hvr-pop pull-left clear">Send</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="skew_prepended graySection"></div>
		</section>		
		<footer id="footer" class="pageRow skew skew-top darkFooter">
			<a id="scrollTop" href="#" class="goToTop whiteTxtColor"><i class="fa fa-angle-up"></i></a>
			<div class="pageRow">
				<div class="wrapper">
					<div class="footerV2Box row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInLeft" data-wow-delay="0.3s">
							<a href=".html" class="logo footerLogo pull-left clear"></a>
							<div class="footer-desc robotoLight grayTxtColor pull-left clear">Lorem ipsum dolor amet consecte adipisicing elit sed do eiusmod tempor incididunt ut labore  dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco.</div>
							<div class="footer-desc robotoLight grayTxtColor pull-left clear">Laboris nisi dut aliquip ex ea commodo. conse quat. Duis aute irure dolor reprehenderit.</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-delay="0.3s">
							<h4 class="footer-title customColor ralewayBold">Latest From Blog</h4>
							<div class="footer_blog-item">
								<div class="footer_blog-item_img">
									<a href="blog-details.html" class="footer_blog-item_link"><img src="<?= base_url(); ?>/template3/media/70x65/1.jpg" alt="Blog Item"></a>
								</div>
								<div class="footer_blog-item_text robotoLight grayTxtColor">Dolore magna aliqua. Ut enimad minim veniam quis nostrud</div>
								<div class="footer_blog-item_date robotoLight">March 30, 2015</div>
							</div>
							<div class="footer_blog-item">
								<div class="footer_blog-item_img">
									<a href="blog-details.html" class="footer_blog-item_link"><img src="<?= base_url(); ?>/template3/media/70x65/2.jpg" alt="Blog Item"></a>
								</div>
								<div class="footer_blog-item_text robotoLight grayTxtColor">Aboris nisi dut aliquip commodo conse quat. Duis aute irure.</div>
								<div class="footer_blog-item_date robotoLight">March 30, 2015</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-delay="0.3s">
							<h4 class="footer-title customColor ralewayBold">Popular Tags</h4>
							<ul class="tags pageRow">
								<li><a href="blog-details.html" class="robotoLight text-center grayTxtColor hvr-rectangle-in">AppBox</a></li>
								<li><a href="blog-details.html" class="robotoLight text-center grayTxtColor hvr-rectangle-in">Android</a></li>
								<li><a href="blog-details.html" class="robotoLight text-center grayTxtColor hvr-rectangle-in">Games</a></li>
								<li><a href="blog-details.html" class="robotoLight text-center grayTxtColor hvr-rectangle-in">Themeforest</a></li>
								<li><a href="blog-details.html" class="robotoLight text-center grayTxtColor hvr-rectangle-in">App Showcase</a></li>
								<li><a href="blog-details.html" class="robotoLight text-center grayTxtColor hvr-rectangle-in">Mobile</a></li>
								<li><a href="blog-details.html" class="robotoLight text-center grayTxtColor hvr-rectangle-in">Free Apps</a></li>
								<li><a href="blog-details.html" class="robotoLight text-center grayTxtColor hvr-rectangle-in">Apps theme</a></li>
								<li><a href="blog-details.html" class="robotoLight text-center grayTxtColor hvr-rectangle-in">Modern Apps</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInRight" data-wow-delay="0.3s">
							<h4 class="footer-title customColor ralewayBold">Flickr Widget</h4>
							<ul class="widgets pageRow">
								<li>
									<a href="blog.html">
										<img src="<?= base_url(); ?>/template3/media/75x75/1.jpg" alt="Widget">
									</a>
								</li>
								<li>
									<a href="blog.html">
										<img src="<?= base_url(); ?>/template3/media/75x75/2.jpg" alt="Widget">
									</a>
								</li>
								<li>
									<a href="blog.html">
										<img src="<?= base_url(); ?>/template3/media/75x75/3.jpg" alt="Widget">
									</a>
								</li>
								<li>
									<a href="blog.html">
										<img src="<?= base_url(); ?>/template3/media/75x75/4.jpg" alt="Widget">
									</a>
								</li>
								<li>
									<a href="blog.html">
										<img src="<?= base_url(); ?>/template3/media/75x75/5.jpg" alt="Widget">
									</a>
								</li>
								<li>
									<a href="blog.html">
										<img src="<?= base_url(); ?>/template3/media/75x75/6.jpg" alt="Widget">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="pageRow footerBottom">
				<div class="wrapper">
					<div class="footerV2Box row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
							<div class="copyrightV2Txt robotoLight whiteTxtColor wow bounceIn pull-left" data-wow-delay="0.3s">Copyright &copy; 2015. Designed by Templines</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
							<ul class="socialmenu wow bounceIn pull-right" data-wow-delay="0.5s">
								<li><a href="#" target="_blank" class="hvr-pop"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank" class="hvr-pop"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank" class="hvr-pop"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" target="_blank" class="hvr-pop"><i class="fa fa-pinterest-p"></i></a></li>
								<li><a href="#" target="_blank" class="hvr-pop"><i class="fa fa-behance"></i></a></li>
								<li><a href="#" target="_blank" class="hvr-pop"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="skew_prepended whiteSection"></div>
		</footer>
		</div>
		
		<script src="<?= base_url(); ?>/template3/js/jquery.placeholder.min.js"></script>
		<script src="<?= base_url(); ?>/template3/js/jquery-ui.min.js"></script>
		<script src="<?= base_url(); ?>/template3/js/smoothscroll.min.js"></script>
		<!-- Loader -->
		<script src="<?= base_url(); ?>/template3/plugins/loader/js/classie.js"></script>
		<script src="<?= base_url(); ?>/template3/plugins/loader/js/pathLoader.js"></script>
		<script src="<?= base_url(); ?>/template3/plugins/loader/js/main.js"></script>
		<script src="<?= base_url(); ?>/template3/js/classie.js"></script>
		<!--Owl Carousel-->
	    <script src="<?= base_url(); ?>/template3/plugins/owl-carousel/owl.carousel.min.js"></script>
        <!--Contact form--> 
        <script src="<?= base_url(); ?>/template3/plugins/contact/jqBootstrapValidation.js"></script> 
        <script src="<?= base_url(); ?>/template3/plugins/contact/contact_me.js"></script>
		<!--THEME--> 
		<script src="<?= base_url(); ?>/template3/js/wow.min.js"></script>
		<script src="<?= base_url(); ?>/template3/js/cssua.min.js"></script>
        <script src="<?= base_url(); ?>/template3/js/func.js"></script> 
	</body>

<!-- Mirrored from html.templines.com/sokolcov/appbox/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2016 17:52:45 GMT -->
</html>