
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta id="token" name="csrf-token" content="{{ csrf_token() }}" />
	<title>{{App\Devis::find(5)->app_name}} Admin</title>
	<!-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->

	<script>
	window.Laravel = @php echo json_encode([
		'csrfToken' => csrf_token(),
		'stripeKey' => config('services.stripe.key'),
		'lang' => App::getLocale(),
	]); @endphp
	</script>


	{!! \Html::style('/css/app.css') !!}
	{!! \Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}

	<link rel="stylesheet" href="{{asset('/css/custom_admin.css')}}">
	{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/flatly/bootstrap.min.css" rel="stylesheet"> --}}
	{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css"> --}}

	<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-default/index.css">
	{{-- <link rel="stylesheet" href="/css/unpkg.css"> --}}

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
<body >
	<div id="app">

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
	            <a class="navbar-brand" href="#">
								{{App\Devis::find(5)->app_name}}
								<img style="position:relative; top:-32px; left:-70px" height="40px" src="https://s-media-cache-ak0.pinimg.com/236x/7d/22/86/7d22867576ed545316407f08053368fd.jpg" alt=""></a>

	            {{-- <a class="navbar-brand" href="#">{{App\Devis::find(5)->app_name}}</a> --}}
	        </div>

			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-left">

				</ul>
				<form class="navbar-form navbar-right">
	        <div class="form-group">
					    {{-- <el-option
					      v-for="item in options"
								size="mini"
					      :label="item.label"
					      :value="item.value">
					    </el-option> --}}
							<select v-model="locale.lang" placeholder="select Language" class="form-control" @change="changeLang">
								<option v-for="lang in langs" :value="lang.slug" v-text="lang.name"></option>
							</select>
							<i class="fa fa-spin fa-spinner" v-show="locale.loading"></i>
	          {{-- <input type="text" class="form-control" placeholder="Search"> --}}
	        </div>
	        {{-- <button type="submit" class="btn btn-default">Submit</button> --}}
	      </form>
		<ul class="nav navbar-nav navbar-right">

  					@if (Auth::guest())
						<li><a href="{{ url('/login') }}">Login</a></li>
						<li><a href="{{ url('/register') }}">Register</a></li>
					@else
						<li><a href="#">{{ Auth::user()->first_name }}</a></li>
						<li><a href="#"><i class="fa fa-gear" @click="showSettingMenu=!showSettingMenu"></i></a></li>
						<li><a href="{{ url('/logout') }}"><i class="fa fa-power-off"></i></a></li>
					@endif
				</ul>
			</div>

	    </div><!-- /.container-fluid -->
	</nav>
	{{--@include('flash::message')--}}
	<div class=""><!--container-->

		@include('flash::message')
		<div class="row">
			<div class="col-md-3">
				<ul>
					@yield('menu')
				</ul>
			</div>
			<div class="col-md-9">


				{{-- <router-view></router-view> --}}

<!--
<ui-select
name="color" label="Favourite color" :options="colorStrings"
placeholder="Select a color"
></ui-select>
				<a href="https://design.google.com/icons/#ic_free_breakfast">lien vers les icons</a>


				<h1>UiSwitch</h1>
				<ui-switch :value.sync="true" label="qsdqsd" id="123"></ui-switch>

				<ui-icon-button icon="free_breakfast" tooltip="message tooltip" type="normal" color="default"></ui-icon-button>
				<ui-icon-button icon="free_breakfast" tooltip="message tooltip" type="normal" color="accent"></ui-icon-button>
				<ui-icon-button icon="free_breakfast" tooltip="message tooltip" type="normal" color="primary"></ui-icon-button>
				<ui-icon-button icon="free_breakfast" tooltip="message tooltip" type="normal" color="success"></ui-icon-button>
				<ui-icon-button icon="free_breakfast" tooltip="message tooltip" type="normal" color="warning"></ui-icon-button>

				<ui-progress-circular :show="true"></ui-progress-circular>
				<ui-button
				           color="primary"
				           icon="add"

				           hasPopover >

				            {{-- <div slot="popover">custom header</div> --}}
				            <div slot="popover">Hey there! <br>Popovers are nice for custom dropdowns.</div>

				</ui-button>
-->

				@yield('content')
			</div>
		</div>
	</div>

	<hr/>


	  <footer class="footer">
	      <div class="container well">
	        	By <a href="https://organit.fr">Organit</a> {{Carbon\Carbon::now()->format('d-m-Y')}}
	      </div>
    </footer>
	</div> {{-- #app --}}
	<!-- Scripts -->
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script> -->


	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script> --}}
	{{-- <script type="text/javascript">
	  $('select').select2();
	</script> --}}

	<script src="{{asset('js/vendor.js')}}"></script>
	{{-- {!! Html::script('/js/Middle_main.js') !!} --}}
	{{-- {!! Html::script('/js/Larastrap_main.js') !!} --}}

	{{-- {!! Html::script('/js/Arthes_main.js') !!} --}}
	{{-- {!! Html::script('/js/Zohotest_main.js') !!} --}}
{{-- {!! Html::script('/js/Colll_main.js') !!} --}}
{{-- {!! Html::script('/js/Mytest_main.js') !!} --}}
{{-- {!! Html::script('/js/Grosminet_main.js') !!} --}}
{{-- {!! Html::script('/js/Laluminette_main.js') !!} --}}
{{-- {!! Html::script('/js/Locale_main.js') !!} --}}
{{-- {!! Html::script('/js/Proutenlair_main.js') !!} --}}
{!! Html::script('/js/Picaflor_main.js') !!}
	{{-- {!! Html::script('/js/Playologie_main.js') !!} --}}
	{{-- {!! Html::script('/js/Play_main.js') !!} --}}
	{{-- {!! Html::script('/js/Picaflor_main.js') !!} --}}





	{{-- {{Html::script('http://localhost:35729/livereload.js')}} --}}
	@yield('footer_scripts')
</body>
</html>