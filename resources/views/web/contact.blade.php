
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
									<ul class="breadcrumb">
										<li>Accueil<span class="divider">/</span></li>
										<li class="active">Contact</li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="span12">
									<h2>Contactez nous pour nous en dire +</h2>
								</div>
							</div>
						</div>
		</section>


					<!-- Google Maps -->
		<!--<div id="googlemaps" class="google-map hidden-phone"></div>-->

					<div class="container">

						<div class="row">
							<div class="span6">
								@if(\Session::has('contact_success'))
									<div class="alert alert-success" id="contactSuccess">
										<strong>Merci de nous avoir contacté</strong><br> Vous recevre une réponse dans les 24/48h
									</div>
								@endif





	<!--							<h2 class="short"><strong>Contact</strong> Us</h2>-->
								<form action="" id="contactForm" method="post">
									{{Form::token()}}

											<div class="row controls" >
												<div class="control-group @if ($errors->has('name')) has-error  @endif span6">
												    <label for="name">Votre Nom <i class="text-danger">*</i> :</label>
												    <input type="text" name="name" value="{{Input::old('name')}}" class="form-control" id="name" placeholder="Votre Nom">
												    <p class="help-block text-danger">@if ($errors->has('name')) {{ $errors->first('name') }} @endif</p>
												</div>

												<div class="control-group @if ($errors->has('email')) has-error  @endif span6">
												    <label for="email">Votre Email <i class="text-danger">*</i> :</label>
												    <input type="email" name="email" value="{{Input::old('email')}}" class="form-control" id="email" placeholder="Saisissez ici votre edresse email">
												    <p class="help-block text-danger">@if ($errors->has('email')) {{ $errors->first('email') }} @endif</p>
												</div>
											</div>





									<div class="row controls">
										<div class="control-group @if ($errors->has('subject')) has-error  @endif span6">
														    <label for="subject">Sujet du message <i class="text-danger">*</i> :</label>
														    <input type="text" name="subject" value="{{Input::old('subject')}}" class="form-control span6" id="subject" placeholder="Objet">
														    <p class="help-block text-danger">@if ($errors->has('subject')) {{ $errors->first('subject') }} @endif</p>
										</div>

										<!--
										<div class="span6 control-group">
											<label>Objet</label>
											<input type="text" value="" data-msg-required="Veuillez saisir un sujet" maxlength="100" class="span6" name="subject" id="subject">
										</div>-->
									</div>
									<div class="row controls">
										<div class="span6 control-group @if ($errors->has('message')) has-error  @endif">
											<label>Message <span class="text-danger">*</i></span></label>
											<textarea maxlength="5000" data-msg-required="Saissez votre message." rows="10" class="span6" name="message" id="message">{{Input::old('message')}}</textarea>
											<p class="help-block text-danger">@if ($errors->has('message')) {{ $errors->first('message') }} @endif</p>
										</div>
									</div>
	                                                            <center>
	                                                            <div class="btn-toolbar" >
										<input type="submit" value="Envoyer Message" class="btn btn-primary btn-large" data-loading-text="Loading...">
									</div>
	                                                            </center>
								</form>
							</div>
							<div class="span6">


	                                                        <p>Nous sommes à votre disposition pour pour étudier votre projet. <span style="font-weight: bold">DEVIS GRATUIT</span></p>


								<hr />

								<h4>L'<strong>agence</strong></h4>
								<ul class="unstyled">
									<li><i class="icon-map-marker"></i> <strong>Adresse:</strong> 31, route de Saint Mathieu, 06130 Grasse, France</li>
									<li><i class="icon-phone"></i> <strong>Téléphone:</strong> 07 86 38 02 85</li>
									<li><i class="icon-phone"></i> <strong>Téléphone:</strong> 04 93 66 56 97</li>
									<li><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:info@organit.fr">info@organit.fr</a></li>
									<li><i class="icon-skype"></i> <strong>Skype:</strong> <b>thibaultvanc</b></li>
								</ul>

								<hr />
								<h4><strong>QR Code à votre disposition</strong></h4>
										<img class="img-polaroid" alt="obj3"src="/img/slides/flashcode_contact.png">
	<!--							<h4>Business <strong>Hours</strong></h4>
								<ul class="unstyled">
									<li><i class="icon-time"></i> Monday - Friday 9am to 5pm</li>
									<li><i class="icon-time"></i> Saturday - 9am to 2pm</li>
									<li><i class="icon-time"></i> Sunday - Closed</li>
								</ul>-->

							</div>

						</div>

					</div>

				</div>

@endsection
