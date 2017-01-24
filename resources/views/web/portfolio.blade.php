@extends('layouts.default')

@section('menu')
	@include('web._menu')
@endsection


@section('content')

	<section class="page-top custom-product">
		<div class="container">
			<div class="row">
				<div class="span7">
					<h1>Notre <strong>Portfolio</strong>.</h1>
					<p class="lead">Nous construisons une relation "long terme" avec chacun de nos clients</p>
					<a href="{{ route('contact') }}" class="btn btn-large pull-bottom  btn-success">Vous avez un projet, Contactez nous !</a> <span class="arrow hl hidden-phone " style="top: 10px;"></span>
				</div>
				<div class="span5">
					<img class="pull-right responsive hidden-phone" alt="" src="img/custom-header.png">
				</div>
			</div>
		</div>
	</section>


						<hr>
							<div class="container">
							<img src="{{ asset('img/teaser.png')}}">
						</div>

						<hr>


	<div class="container">

	<p class="featured lead"><b>Nous sommes le partenaire officiel de la <a target="_blank" href="http://cfjjb.com/">Confédération Française de Ju-Jistsu Brésien</a> depuis plus de 2 ans.</b> Après la conception totale du site la gestion des licences, gestion des compétitions, nous continuons une relation long terme avec une maintenance</p>

						<hr>	<br>
	<div class="row">
			<ul class="portfolio-list sort-destination" data-sort-id="portfolio">
				@foreach (\App\Creation::orderby('idcreation','desc')->get() as $creation)
					<li class="span4 isotope-item {{ $creation->url_name }}">
						<div class="portfolio-item thumbnail">
							<a href="{{ route('portfolio_item', $creation->idcreation) }}" class="thumb-info">
								<img  alt="" src="{{ asset($creation->img_1) }}" style="height:200px">
								<span class="thumb-info-title">
									<span class="thumb-info-inner">{{ $creation->nom_client_simple }}</span>
									<span class="thumb-info-type">{{ $creation->name }}</span>
								</span>
								<span class="thumb-info-action">
									<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon-link"></i></span>
								</span>
							</a>
						</div>
					</li>
				@endforeach

			</ul>
		</div>

	</div>




@endsection
