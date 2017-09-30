<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ $title->config_value }}</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Advocate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //custom-theme files-->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme files-->

<!-- font-awesome-icons -->
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
<!-- //font-awesome-icons -->

<!-- googlefonts -->
<!--<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Libre+Franklin:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">-->
<!-- //googlefonts -->

</head>
<body>
<!-- banner -->
<div class="banner">
	<div class="banner-layer">
	<div class="container">
		<div class="banner-logo">
			<a href="{{ url('/') }}">
				<img src="{{ asset('images/logo.png') }}" alt="Undip Maju"/>
			</a>
		</div>
				</div>
				<div class="agileits_w3layouts_menu">
					<div class="shy-menu">
						<a class="shy-menu-hamburger">
							<span class="layer top"></span>
							<span class="layer mid"></span>
							<span class="layer btm"></span>
						</a>
						<div class="shy-menu-panel">
							<nav class="menu menu--horatio link-effect-8" id="link-effect-8">
								<ul class="w3layouts_menu__list">
									<li class="active"><a href="index.html">Beranda</a></li>
									<li><a href="{{ url('/about') }}">Profil</a></li>
									<li class="dropdown"><a href="#">Unit Bisnis</a>
										<div class="dropdown-content">
											@foreach($unit as $a)
											<a href="{{ url('/' . $a->url) }}">{{ $a->nama }}</a>
											@endforeach
										</div>
									</li>
									<li><a href="{{ url('/blog') }}">Galeri</a></li>
									<li><a href="{{ url('/contact') }}">Hubungi Kami</a></li>
								</ul>
							</nav>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<div class="agile_banner_info">
				<div class="agile_banner_info1">
					<div id="typed-strings" class="agileits_w3layouts_strings">
						@yield('heading')
					</div>
					<span id="typed" style="white-space:pre;"></span>
				</div>
			</div>
			<div class="banner_agile_para">
				<p>
					@yield('tagline')
				</p>
			</div>
			<div class="w3_agile_social_icons">
				<ul class="agileinfo_social_icons">
					<li><a href="{{ $facebook->config_value }}" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="{{ $twitter->config_value }}" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="{{ $googleplus->config_value }}" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="thim-click-to-bottom">

					<a href="#services" class="scroll">
					<div class="rotate">
						<i class="fa  fa-chevron-down"></i>
					</div>
					</a>
		</div>
		</div>
	</div>
<!-- //banner -->

@yield('content')

<!-- footer -->
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-4 footer-grid address">
						<h3>Contact us</h3>
						<h4>{{ $kota->config_value }}</h4>
						<ul>
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> {{ $alamat->config_value }}</li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> {{ $telepon->config_value }}</li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">{{ $email->config_value }}</a></li>
							<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i> {{ $jamkerja->config_value }}</li>
						</ul>
					</div>

					<div class="col-md-4 col-md-offset-4 agile-footer-grid">
						<h3>Subscribe us</h3>
						<p>Subscribe to our newsletter to get daily updates</p>
						<div class="subscribe-grid">
							<form action="#" method="post">
								<input type="email" placeholder="Subscribe" name="Subscribe" required="">
								<button class="btn1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
							</form>
						</div>
						<div class="w3_agile_social_icons">
							<ul class="agileinfo_social_icons">
								<li><a href="{{ $facebook->config_value }}" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="{{ $twitter->config_value }}" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="{{ $googleplus->config_value }}" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agileinfo_pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- copyright -->
<div class="wthree_copy_right">
	<div class="banner-logo">
		<a href="{{ url('/') }}">
			<img src="{{ asset('images/logo.png') }}" alt="Undip Maju"/>
		</a>
	</div>
	<div class="container">
		<p>&copy; 2017 Undip Maju. All rights reserved | Developed by <a href="http://brcode.id/">BR|CODE</a></p>

	</div>
</div>
<!-- //copyright -->

<!-- js -->
	<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<!-- for bootstrap working -->
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<!-- //for bootstrap working -->
<!-- //js -->

<!-- banner-type-text -->
	<script src="{{ asset('js/typed.js') }}" type="text/javascript"></script>
    <script>
		$(function(){

			$("#typed").typed({
				// strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
				stringsElement: $('#typed-strings'),
				typeSpeed: 30,
				backDelay: 500,
				loop: false,
				contentType: 'html', // or text
				// defaults to false for infinite loop
				loopCount: false,
				callback: function(){ foo(); },
				resetCallback: function() { newTyped(); }
			});

			$(".reset").click(function(){
				$("#typed").typed('reset');
			});

		});

		function newTyped(){ /* A new typed object */ }

		function foo(){ console.log("Callback"); }
    </script>
<!-- //banner-type-text -->

<!-- menu -->
	<script>
		$(function() {

			initDropDowns($("div.shy-menu"));

		});

		function initDropDowns(allMenus) {

			allMenus.children(".shy-menu-hamburger").on("click", function() {

				var thisTrigger = jQuery(this),
					thisMenu = thisTrigger.parent(),
					thisPanel = thisTrigger.next();

				if (thisMenu.hasClass("is-open")) {

					thisMenu.removeClass("is-open");

				} else {

					allMenus.removeClass("is-open");
					thisMenu.addClass("is-open");
					thisPanel.on("click", function(e) {
						e.stopPropagation();
					});
				}

				return false;
			});
		}
	</script>
<!-- //menu -->

<!-- testimonials required-js-files-->
							<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
							    <script src="{{ asset('js/owl.carousel.js') }}"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
<!--// testimonials required-js-files-->

<!-- here starts scrolling icon -->
<script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //scrolling script -->

</body>
</html>
