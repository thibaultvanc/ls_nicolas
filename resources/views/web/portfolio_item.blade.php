@extends('layouts.default')

@section('menu')
	@include('web._menu')
@endsection


@section('content')


	<div role="main" class="main">

					<section class="page-top">
						<div class="container">

							<div class="row">
								<div class="span12">
									<h2>{{$creation->nom_client}}</h2>
								</div>
							</div>
						</div>
					</section>

					<div class="container">



						<div class="row">
							<div class="span7">

								<div class="flexslider flexslider-center-mobile" data-plugin-options='{"animation":"slide", "animationLoop": true, "maxVisibleItems": 1}'>
									<ul class="slides">
										<li>
											<img alt="" src="{{ asset($creation->img_1) }}">
										</li>
										<li>
											<img alt="" src="{{ asset($creation->img_2) }}">
										</li>
										<li>
											<img alt="" src="{{ asset($creation->img_3) }}">
										</li>
									</ul>
								</div>

							</div>
							<div class="span1"></div>
							<div class="span4">

								<a href="{{ $creation->url_site }}" target="_blank" class="btn btn-primary btn-large">Visiter</a> <span class="arrow hlb hidden-phone" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>

								<h4 class="pull-top">Missions réalisées sur ce projet :</h4>

								<ul class="list icons unstyled">

								@foreach ($creation->missions as $mission)
									<li><i class="icon-ok"></i> {{$mission->nom_mission}}</li>
								@endforeach

								</ul>

							</div>
						</div>


						<hr class="tall" />



					</div>

				</div>


@endsection
