<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title><?php echo "Vthrone 2" . $this->uri->segment(2)   ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="<?php echo themes_url('red_top') ?>/css/style.css" >
	<link rel="stylesheet" href="<?php echo themes_url('red_top') ?>/css/ico-moon.css">
	<link rel="stylesheet" href="<?php echo themes_url('red_top') ?>/fancybox/jquery.fancybox-1.3.4.css" >
	<link rel="stylesheet" href="<?php echo themes_url('red_top') ?>/css/flexslider.css" >

	<!--[if lt IE 9]>
		<script src="<?php echo themes_url('red_top') ?>/../../../html5shim.googlecode.com/svn/trunk/html5.js" tppabs="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" href="<?php echo themes_url('red_top') ?>/css/ie.css" >
		<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
</head>
<body class="home">
	<!-- Header
	================================================== -->
	<?php if (!$this->uri->segment(1)): ?>
	<header>
		<div id="sequence">
			<div class="pre"></div>
			<img class="sequence-prev" src="<?php echo themes_url('red_top') ?>/img/bt-prev.png" tppabs="http://www.ksdesigning.com/themes/new_wave/img/bt-prev.png" alt="Previous Frame" />
			<img class="sequence-next" src="<?php echo themes_url('red_top') ?>/img/bt-next.png" tppabs="http://www.ksdesigning.com/themes/new_wave/img/bt-next.png" alt="Next Frame" />
			<ul class="sequence-canvas">
				<li>
					<h2 class="title">Built Using Skeleton Grid</h2>
					<p class="subtitle">Maecenas bibendum hendrerit tortor quis laoreet. Morbi vel ipsum nisl, in gravida quam. Suspendisse metus tellus, pretium eget porttitor vitae, posuere tincidunt libero. Praesent felis ipsum, posuere id dignissim a, eleifend sed nisl. Cras tempus enim placerat lacus lacinia vel eleifend urna tincidunt.</p>
					<img class="model" src="<?php echo themes_url('red_top') ?>/img/model1.png" tppabs="http://www.ksdesigning.com/themes/new_wave/img/model1.png" alt="Model 1" />
				</li>
				<li>
					<h2 class="title">Creative Control</h2>
					<p class="subtitle">Maecenas bibendum hendrerit tortor quis laoreet. Morbi vel ipsum nisl, in gravida quam. Suspendisse metus tellus, pretium eget porttitor vitae, posuere tincidunt libero. Praesent felis ipsum, posuere id dignissim a, eleifend sed nisl. Cras tempus enim placerat lacus lacinia vel eleifend urna tincidunt.</p>
					<img class="model second" src="<?php echo themes_url('red_top') ?>/img/model2.png" tppabs="http://www.ksdesigning.com/themes/new_wave/img/model2.png" alt="Model 2" />
				</li>
			</ul>
		</div>
	</header>
	<?php endif ?>
	<div class="banner">
		<div class="container">
			<div class="logo">
				<a href="#">Vthrone V2</a>
			</div>
			<div class="nav-bar">
				<nav>
					<ul id="nav-bar">
						<li class="<?php echo (!$this->uri->segment(2)) ? "active" : ' '?>"><a href="<?php echo base_url() ?>" tppabs="http://www.ksdesigning.com/themes/new_wave/index.html">Home</a></li>
						<li class="<?php echo ($this->uri->segment(2) == "blog") ? "active" : ' '?>">
							<a href="<?php echo site_url('product'); ?>">Product</a>
						</li>
						<?php foreach ($smenu as $menu): ?>
						<li><a href="<?php echo "http://".$menu['uri'] ?>"><?php echo $menu['title'] ?></a></li>
					<?php endforeach ?>

					<li class="<?php echo ($this->uri->segment(2) == "contact") ? "active" : ' '?>">
						<a href="<?php echo site_url('main/contact'); ?>">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>

	<!-- Body
	================================================== -->
	<?php echo widget_view($this->_view,$this->_var); ?>

	
	<!-- Footer
	================================================== -->
	<footer>
		<div class="cta">
			<div class="container">
				<span>Let's Go Join With Us !! </span><a href="#" class="button medium">Join Now</a>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="eleven columns">
					<h5>Twitter <i class="icon-twitter"></i></h5>
					<div class="tweet-footer"></div>
				</div>
				<div class="five columns">
					<h5>Follow Us</h5>
					<ul class="social">
						<li><a href="https://twitter.com/"><i class="icon-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/"><i class="icon-facebook"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="sixteen columns">
					<div class="copy">
						<span>Copyright &copy; 2013 TOPGAN DRIFT TEAM</span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="clearfix"></div>

	<!-- Javascript/jQuery
	================================================== -->
	<script src="<?php echo themes_url('default') ?>/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo themes_url('red_top') ?>/js/jquery.sequence-min.js" tppabs="http://www.ksdesigning.com/themes/new_wave/js/jquery.sequence-min.js"></script>
	<script src="<?php echo themes_url('red_top') ?>/js/jquery.isotope.min.js" tppabs="http://www.ksdesigning.com/themes/new_wave/js/jquery.isotope.min.js"></script>
	<script src="<?php echo themes_url('red_top') ?>/js/jquery.fitvids.js" tppabs="http://www.ksdesigning.com/themes/new_wave/js/jquery.fitvids.js"></script>
	<script src="<?php echo themes_url('red_top') ?>/js/jquery.flexslider-min.js" tppabs="http://www.ksdesigning.com/themes/new_wave/js/jquery.flexslider-min.js"></script>
	<script src="<?php echo themes_url('red_top') ?>/js/jflickrfeed.min.js" tppabs="http://www.ksdesigning.com/themes/new_wave/js/jflickrfeed.min.js"></script>
	<script src="<?php echo themes_url('red_top') ?>/js/selectnav.min.js" tppabs="http://www.ksdesigning.com/themes/new_wave/js/selectnav.min.js"></script>
	<script src="<?php echo themes_url('red_top') ?>/js/gmap3.min.js" tppabs="http://www.ksdesigning.com/themes/new_wave/js/gmap3.min.js"></script>
	<script src="<?php echo themes_url('red_top') ?>/js/scripts.js" tppabs="http://www.ksdesigning.com/themes/new_wave/js/scripts.js"></script>


<!-- End Document
	================================================== -->
</body>
</html>