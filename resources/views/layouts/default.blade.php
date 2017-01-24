<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html lang="fr"> <!--<![endif]-->
	<head>

		<!-- Basic -->
        <meta http-equiv="Content-Type" content="text/html; Charset iso-8859-1" charset="utf-8" />
		<title>OrganiT - Agence de création de site Web grasse &#9742; : 07.86.38.02.85 - 06, nice 06, sophia antipolis</title>
		<meta name="keywords" content="Programmation web, développement site internet, wordpress, laravel, référencement, cannes, grasse, nice, 06" />
		<meta name="description" content="Agence de développement web sur grasse, Cannes, Nice - 06 - Dévelopeur Laravel - wordpress">
		<meta name="author" content="organit.fr">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Libs CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('css/fonts/font-awesome/css/font-awesome.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/flexslider/flexslider.css') }}" media="screen" />
		<link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" media="screen" />
		<link rel="stylesheet" href="{{ asset('vendor/isotope/jquery.isotope.css') }}" media="screen" />



		<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:500italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lemon' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Marck+Script|Calligraffitti|Architects+Daughter' rel='stylesheet' type='text/css'>

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-animate.css') }}">

		<!-- Current Page Styles -->
		<link rel="stylesheet" href="{{ asset('vendor/revolution-slider/css/settings.css') }}" media="screen" />
		<link rel="stylesheet" href="{{ asset('vendor/revolution-slider/css/captions.css') }}" media="screen" />
		<link rel="stylesheet" href="{{ asset('vendor/circle-flip-slideshow/css/component.css') }}" media="screen" />

		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('css/skins/blue.css') }}">

		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/theme-responsive.css') }}" />

		<!-- Favicons -->
		<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
		<link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72.png') }}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114.png') }}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/apple-touch-icon-144x144.png') }}">

		<!-- Head Libs -->
		<script src="{{ asset('vendor/modernizr.js') }}"></script>
		<style type="text/css">#draggable{ cursor: col-resize !important ; }</style>

		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond.js"></script>
		<![endif]-->

		<!--Start of Zopim Live Chat Script-->
		<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
		$.src='//v2.zopim.com/?2S4M69HCfswh0qrDbbwlsGjVBa8MyQck';z.t=+new Date;$.
		type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
		</script>
		<!--End of Zopim Live Chat Script-->

	</head>
	<body>

		<div class="body">

			<div class="row-fluid ">
				<div class="span6">
					<a href="/admin" style="color:transparent">admin</a>
				</div>
				<div class="span6 text-center ">
					<a href="{{ route('contact') }}" class="label label-alert  " style="margin:5px">Agence Web Nice - Cannes -  Grasse ( 06 )</a>
					<a href="{{ route('contact') }}" class="label label-info  " style="margin:5px">10 ans d'expertise WEB à votre service</a>
					<a href="tel:0786380285" class="label label-success " style="margin:5px">&#9742; : 07.86.38.02.85</a>
					<!--<button href="?p=qsn" class="btn btn-mini btn-danger " type="button">10 ans d'expertise à votre service</button>-->
					<!--<button href="?p=qsn" class="btn btn-mini btn-warning " type="button">Vous avez un projet ?</button>-->
				</div>
			</div>


			<header class="single-menu flat-menu">
				<div class="container">
					<h1 class="logo">
						<a href="{{ route('home') }}">
							<img alt="Organit" src="{{ asset('img/logo_organit.png') }}">
						</a>
					</h1>
					<!--<div class="social-icons">
						<ul class="social-icons">
							<li class="facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
							<li class="twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
							<li class="linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
						</ul>
					</div>-->






                                    <!-- barre de navigation-->

                                    <nav>
						<ul class="nav nav-pills nav-main" id="mainMenu">

							@yield('menu')




						</ul>
					</nav>


				</div>
			</header>



@yield('content')




			<footer>
				<div class="container">
					<div class="row">
						<div class="footer-ribon" id="drag_x" data-appear-animation="fadeInRightBig">
							<span>Et si c'était par la fin que tout commençait ...</span>
						</div>
						<div class="span12 text-center">

						@if(Route::getCurrentRoute()->getName() == 'contact')
								<h4>Contactez nous <span class="alternative-font">Maintenant</span>  et commençons efficacement et méthodiquement.</h4>
								<img src="/img/slides/slide-concept-2-5.png">
														<!--<h4>Follow Us</h4>-->
								<div class="spacer"></div>

								<div class="spacer"></div>
								<div class="spacer"></div>
						@else

							<div class="contact-details">
								<h4>Vous avez un projet ?</h4>
								<span class="white_arrow hlb hidden-phone" data-appear-animation="rotateInUpRight" data-appear-animation-delay="800"></span>
								<a href="{{ route('contact') }}"><button class="btn btn-success btn-large"  type="button">Parlons-en librement !</button></a>

							</div>

						@endif


							<!--<h4>Follow Us</h4>-->
							<div class="spacer"></div>

							<div class="spacer"></div>
							<div class="spacer"></div>
						</div>

					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">

							<div class="span12 text-center">
								<a href="{{ route('home') }}" class="logo">
									<img alt="OrganiT - Votre partenaire Web. Tout simplement" src="/img/logo-footer.png">
								</a>
								<a href="{{ route('mentions-legales') }}">Mentions légales</a>
							</div>


						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Libs -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="vendor/jquery.js"><\/script>')</script>
		 <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
		<script src="{{ asset('vendor/jquery.easing.js') }}"></script>
		<script src="{{ asset('vendor/jquery.appear.js') }}"></script>
		<script src="{{ asset('vendor/jquery.cookie.js') }}"></script>
		<!-- <script src="master/style-switcher/style.switcher.js"></script> Style Switcher -->
		<script src="{{ asset('vendor/bootstrap.js') }}"></script>
		<script src="{{ asset('vendor/selectnav.js') }}"></script>
		<script src="{{ asset('vendor/twitterjs/twitter.js') }}"></script>
		<script src="{{ asset('vendor/revolution-slider/js/jquery.themepunch.plugins.js') }}"></script>
		<script src="{{ asset('vendor/revolution-slider/js/jquery.themepunch.revolution.js') }}"></script>
		<script src="{{ asset('vendor/flexslider/jquery.flexslider.js') }}"></script>
		<script src="{{ asset('vendor/circle-flip-slideshow/js/jquery.flipshow.js') }}"></script>
		<script src="{{ asset('vendor/magnific-popup/magnific-popup.js') }}"></script>
		<script src="{{ asset('vendor/jquery.validate.js') }}"></script>
		<script src="{{ asset('vendor/stickybar.js') }}"></script>
		<script src="{{ asset('vendor/jquery.scrollTo.js') }}"></script>
		<script src="{{ asset('vendor/isotope/jquery.isotope.js') }}"></script>



		<script src="{{ asset('js/plugins.js') }}"></script>

		<!-- Current Page Scripts -->
		<script src="{{ asset('js/views/view.home.js') }}"></script>

		<!-- Theme Initializer -->
		<script src="{{ asset('js/theme.js') }}"></script>

		<!-- Custom JS -->
		<script src="{{ asset('js/custom.js') }}"></script>

		@yield('footer_scripts')

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to https://www.google.com/analytics/ for more information. -->
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-53997753-1', 'auto');
			  ga('send', 'pageview');

			</script>
		<!-- Google Analytics:-->

	</body>
</html>



<script type="text/javascript">


$('#drag_x').draggable({ axis: "x" });




</script>
