<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta id="token" name="csrf-token" content="{{ csrf_token() }}" />
	<title>OrganiT Admin</title>
	<!-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->


	<link rel="stylesheet" href="{{asset('/css/app.css')}}">
	<link rel="stylesheet" href="{{asset('/css/custom_admin.css')}}">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/flatly/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
	@yield('header_scripts')


	<style>
		body {
			padding-top: 70px;
		}

		/* Sticky footer styles
		-------------------------------------------------- */
		html {
		  position: relative;
		  min-height: 100%;
		}
		body {
		  /* Margin bottom by footer height */
		  margin-bottom: 60px;
		}
		.footer {
		  position: absolute;
		  bottom: 0;
		  width: 100%;
		  /* Set the fixed height of the footer here */
		  height: 60px;
		  background-color: #f5f5f5;
		}




	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="/"><img src="{{asset('img/logo-footer.png')}}" style="height: 30px" ></a>
	        </div>

			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-left">
					@if(Auth::user()->id == 1)
						<li><a href="/admin/client">Clients</a></li>
						<!--<li><a href="/admin/project">projets</a></li>-->
						{{-- <li><a href="/admin/user">(users)Contacts</a></li> --}}
						{{-- <li><a href="/admin/client">Fournisseurs</a></li> --}}
						{{-- <li><a href="/admin/facture">Factures</a></li> --}}
						<li><a href="/admin/devis">Devis</a></li>
						{{-- <li><a href="{{route('programing_tools_home')}}">Tools</a></li>
						<li><a href="{{route('dev_cheatsheet_home')}}">Cheat sheet</a></li> --}}

						{{-- <li><a href="/admin/pointage">Pointage</a></li> --}}
						{{-- <li><a href="/admin/task">tasks</a></li> --}}
					@else
						<li><a href="/admin/devis">projet</a></li>
					@endif

						<!--<li><a href="/admin/table">tables</a></li>-->
						<!--<li><a href="/admin/field">champs</a></li>-->
						{{-- <li><a href="/admin/field">relations</a></li> --}}
						<!--<li><a href="/admin/field">PivotsExtrafields</a></li>-->
						{{-- <li><a href="/admin/process">process</a></li> --}}
				</ul><ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/login') }}">Login</a></li>
						<li><a href="{{ url('/register') }}">Register</a></li>
					@else
						<li><a href="#">{{ Auth::user()->first_name }}</a></li>
						<li><a href="{{ url('/logout') }}">Logout</a></li>
					@endif
				</ul>
			</div>

	    </div><!-- /.container-fluid -->
	</nav>
	{{--@include('flash::message')--}}



	{{-- <div class="container"> --}}
		@include('flash::message')
		@yield('content')
	{{-- </div> --}}

	<hr/>


	  <footer class="footer">
	      <div class="container">
	        <div class="row">
	        	<div class="col-md-3">
	        		<h3>cheatSheet</h3>
	        		<ul>
	        			<li><a href="{{route('dev_cheatsheet_laravel')}}"><i class="fa fa-code"></i> laravel</a></li>
	        			<li><a href="{{route('dev_cheatsheet_git')}}"><i class="fa fa-code-fork"></i> Git</a></li>
	        			<li><a href="{{route('dev_cheatsheet_javascript')}}"><i class="fa fa-codepen"></i> javascript</a></li>
	        			<li><a href="{{route('dev_cheatsheet_HTML_CSS')}}"><i class="fa fa-html5"></i>CSS</a></li>
	        			<li><a href="{{route('dev_cheatsheet_Vue')}}"><i class="fa fa-vimeo"></i> Vue</a></li>
	        		</ul>
	        	</div>
	        	<div class="col-md-3">
					<h3>Bootstrapping</h3>
					<li><a href="{{route('admin.devis_select')}}"><i class="fa fa-suitcase"></i>select Devis to Run </a></li>
					<li><a href="{{route('documentation_bootstrapping')}}"><i class="fa fa-book"></i> Documentation</a></li>


	        	</div>
	        	<div class="col-md-3">
					<h3>Todo</h3>
					<li><a href="/admin/todos">todos</a></li>
	        	</div>
	        </div>
	      </div>
    </footer>

	<!-- Scripts -->
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script> -->

	<script src="{{asset('js/vendor.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<script>
	    $('#flash-overlay-modal').modal();
	</script>
	{{-- {{Html::script('http://localhost:35729/livereload.js')}} --}}
	@yield('footer_scripts')
</body>
</html>
