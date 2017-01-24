@extends('layouts.default')

@section('menu')
	@include('web._menu')
@endsection


@section('content')

<ul class="ch-grid">

		@foreach ($knowledges as $i=>$knowledge)
			<li data-appear-animation="bounceIn">
				<div class='ch-item ch-img-{{ $knowledge->id }} '>
					<a href="{{ route('knowledge') }}#{{ $knowledge->id }}" class="{{ $knowledge->id }}">
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-{{ $knowledge->id }}"></div>
								<div class="ch-info-back">
									<h3>{{ $knowledge->titleSf }}</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
			</li>
		@endforeach
</ul>




<section class="page-top single-menu flat-menu">



						<div class="container">
							<div class="row">
								<div class="span12"><h2>Notre Passion <span style="color:orangered;font-size:1.4em">&</span> Compétences</h2></div>

							</div>

						</div>

</section>







<div class="container">

					<!--[if lt IE 10]>
					<div class="alert">
						<strong>Warning!</strong> Animations are not compatible with old Internet Explorer versions.
					</div>
					<![endif]-->



						<div class="row">

						<div class="span2 " >
							<div id="sidenav_sticky" >
								<ul  class="nav nav-list primary pull-bottom">

									@foreach ($knowledges as $i=>$knowledge)
											<li><a href="#{{ $knowledge->id }}" class="{{$knowledge->id}}">{{ ucfirst($knowledge->titleSf) }}</a></li>
									@endforeach

								</ul>

							</div>
						</div>




						<div class="span10">


							@foreach ($knowledges as $i=>$knowledge)
									<?php
					        			$rightOrLeft = $knowledge->rightLeft;

					        			$opposite_side = '';
						        		if ($rightOrLeft == 'left'){
						        			$opposite_side = 'right';
						        		}
						        		elseif ($rightOrLeft == 'right') {
						        			$opposite_side = 'left';
						        		}
									 ?>

									<div class="invisible" id="{{ $knowledge->id }}" style="height:50px" ></div>
									<img  class="responsive img-circle appear-animation pull-{{ $rightOrLeft }}" style='padding:20px' src="{{ asset('img/icons/'.$knowledge->img_catSf) }}" data-appear-animation="fadeIn" />
									<h4  class="title-section" >{{$knowledge->titleSf}}</h4>
									<hr />
									<span class='pull-right accroche' data-appear-animation="fadeInDown"><h5>"{{$knowledge->accroche}}"</h5></span>
									<br>
									<br>
									<p style="text-align: justify">{{$knowledge->paragraphe1}}</p>
									<p class="text-center"><img  src="{{ asset('img/icons/'.$knowledge->img_sscat) }}" /><p>
									<p >{{$knowledge->paragraphe2}}</p>

									<hr class="end-section" />
							@endforeach




						</div>
					</div>

</div>

@endsection
