@extends('layouts.default')

@section('menu')
	@include('web._menu')
@endsection

@section('content')

				<div role="main" class="main">
					<div id="content" class="content full">

						<div class="slider-container">
							<div class="slider" id="revolutionSlider">
								<ul>
									@include('web/slider.slide_organit')
									@include('web/slider.slide_application_sur_mesure')
									@include('web/slider.slide_dernieres_technologies')
									@include('web/slider.slide_laravel')
									@include('web/slider.slide_responsive')
									@include('web/slider.slide_html_css')
									@include('web/slider.slide_specialiste_web')
									@include('web/slider.slide_ecommerce')
									@include('web/slider.slide_webmarketing')
									@include('web/slider.slide_serveur')
									@include('web/slider.slide_contact')

								</ul>
							</div>
						</div>

						<div class="home-intro">
							<div class="container">

								<div class="row">
									<div class="span8">
										<p>
											Votre Agence Développement Digitale<em>Nouvelle Génération</em>
											<span>Notre mission : Créer ,booster votre digital business</span>
										</p>
									</div>
									<div class="span4">
										<div class="get-started">
											<center>
												<a href="{{ route('contact') }}" class="btn btn-large btn-primary">Vous avez un projet ? </a><br>

												<!--<div class="learn-more">Besoin d'en <a href="?p=faq" class="learn_more_link">savoir +</a></div>-->
											</center>
										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="container">
							<img src="img/teaser.png">
						</div>

						<hr>

						<div class="container">

							<div class="row center">
								<div class="span12">
									<h2 class="short">Nous sommes à votre écoute pour <strong class="">votre</strong> site internet</h2>
									<p class="featured lead">
									Spécialistes de la gestion de projet et du développement informatique, nous vous accompagnons pour mener à bien la mission que vous nous confiez. Vous trouverez avec <em>OrganiT</em> , un partenaire véritablement à l'écoute de vos besoins et une équipe de développement à la hauteur !
									<div class="spacer"></div>

									</p>
								</div>
							</div>

							</div>



							<section class="featured">
							<div class="row-fluid center">
								<div class="span4">
									<img class="img-circle" alt="obj1" style="width: 70px; height: 70px; " src="img/obj1.png">
									<i class="icon-screenshot icon_red" ></i>
									<div class="spacer"></div>
									<h4 class="short">Notre objectif</h4>
									<p>Notre objectif est de vous apporter des <big>SOLUTIONS</big>. Nous vous accompagnons pour mener à bien la mission que vous nous confiez. </p>
								</div>
								<div class="span4">
									<img class="img-circle" alt="obj2" style="width: 70px; height: 70px;" src="img/obj2.png">
									<i class="icon-ok icon_red" ></i>
									<div class="spacer"></div>
									<h4 class="short">Tout est clair</h4>
									<p>Décrivez-nous votre projet, notre mission consiste à le concrétiser. Nous réalisons un cahier des charges pour clarifier les étapes du développement.</p>
								</div>
								<div class="span4">
									<img class="img-circle" alt="obj3" style="width: 70px; height: 70px;"src="img/obj3.png">
									<i class="icon-thumbs-up icon_red" ></i>
									<div class="spacer"></div>
									<h4 class="short">Votre satisfaction</h4>
									<p>Vous apporter notre savoir-faire associé à notre désir d'excellence pour placer votre projet sur la voie du succès.</p>
								</div>
							</div>




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

							</section>


						<div class="spacer"></div>
						<div class="spacer"></div>
						<div class="spacer"></div>
						<div class="container">

							<div class="row center">
								<div class="span12">
									<h2 class="short">Faîtes confiance à une <strong class="">équipe professionnelle</strong> et c<em>réactive</em></h2>


																	<div class="row">

										<ul class="team-list">

											<li class="span6">
												<div class="team-item thumbnail">
													<a href="#" class="thumb-info team">
														<img alt="" src="img/team/thibault.png">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Thibault</span>
															<span class="thumb-info-type thumb-info-type_red">Chef de projet & Programmeur Web</span>
														</span>
													</a>
													<span class="thumb-info-caption">
														<i class="icon-quote-left"></i><p style="font-size:18px"><br/>Double Compétence Marketing (Diplômé de l'Ecole Supérieure de Commerce de Clermont-Ferrand en 2005), et Informatique (développement d'application web complexes et robustes). Je suis Spécialiste en ergonomie fonctionnelle, et Développeur web Sénior depuis plus de 10 ans. Je suis votre contact Unique pour mener à bien votre projet.</p><i class="icon-quote-right"></i>
														<span class="thumb-info-social-icons">
															<!--<a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="icon-facebook"></i><span>Facebook</span></a>
															<a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="icon-twitter"></i><span>Twitter</span></a>-->
															<a rel="tooltip" data-placement="bottom" href="http://fr.linkedin.com/pub/thibault-van-campenhoudt/a1/a97/747/" data-original-title="Linkedin"><i class="icon-linkedin"></i><span>Linkedin</span></a>
														</span>
													</span>
												</div>
											</li>

											<li class="span6">
												<div class="team-item thumbnail">
													<a href="#" class="thumb-info team">
														<img alt="" src="img/team/manuella.png">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Manuella</span>
															<span class="thumb-info-type">Web Design</span>
														</span>
													</a>
													<span class="thumb-info-caption">
														<i class="icon-quote-left"></i><p style="font-size:18px"><br/>Mon savoir faire ? Les créations graphiques et l'intégration de maquettes. Je suis passionnée de web design, je vous concocte des sites internet CSS3 et HTML5 à votre image. Selon vos besoin, nous choissisons ensemble une maquette que je personnalise à vos besoins, ou nous créons un PSD entièrement personnalisé.</p><i class="icon-quote-right"></i><br>
														<!--<span class="thumb-info-social-icons">
															<a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="icon-facebook"></i><span>Facebook</span></a>
															<a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="icon-twitter"></i><span>Twitter</span></a>
															<a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="icon-linkedin"></i><span>Linkedin</span></a>
														</span>-->
													</span>
													<br>
													<br>
													<br>

												</div>
											</li>
										</ul>

									</div>
									<div class="spacer"></div>
									<div class="spacer"></div>
									<div class="spacer"></div>
									<div class="spacer"></div>

									<p class="featured lead">
									<b>Nous prenons votre projet en main</b>. Nous anaysons vos besoins et nous vous proposons la conception, la création et le d éveloppement de vos projet Web. <b>Nous envisageons uniquement des relation long terme avec nos clients.</b> Le "one-shot" ne nous intéresse pas !
									</p>
									<div class="spacer"></div>
									<div class="spacer"></div>
									<div class="spacer"></div>
									<div class="spacer"></div>
								</div>
							</div>
						</div>







						<div class="home-concept">
							<div class="container">

								<div class="row center">
									<span class="sun"></span>
									<span class="cloud"></span>
									<div class="span2 offset1" data-appear-animation="bounceIn">
										<div class="process-image">

											<img src="/img/cahier-des-charges.jpg"  alt="" />
											<strong>Cahier des charges</strong>

										</div>
									</div>
									<div class="span2" data-appear-animation="bounceIn">
										<div class="process-image">
											<img src="/img/webdesign.jpg" alt="" />
											<strong>Maquette Web design</strong>
										</div>
									</div>
									<div class="span2" data-appear-animation="bounceIn">
										<div class="process-image">
											<img src="/img/home-concept-item-3.png" alt="" />
											<strong>Developpement Web</strong>
										</div>
									</div>

									<div class="span4 offset1">
										<div class="project-image">
											<div id="fcSlideshow" class="fc-slideshow">
												<ul class="fc-slides">
													<li><img src="/img/mel.jpg" /></li>
													<li><img src="/img/mel2.jpg" /></li>
												</ul>
											</div>


											<strong class="our-work">Mise en ligne</strong>
										</div>


									</div>
								</div>



							</div>
						</div>




	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="spacer"></div>
	<section style="background-image: url({{ asset('img/parallax.jpg') }});" data-stellar-background-ratio="0.1" class="parallax">
		<div class="container">
			<div class="row center">
				<div class="span12">
					<!--<i data-appear-animation="bounceIn" class="icon icon-featured icon-heart appear-animation bounceIn appear-animation-visible"></i>-->
					<img  class="responsive img-circle appear-animation" style='padding:20px' src="img/team/thibault.png" data-appear-animation="bounceIn" />
					<div data-appear-animation="fadeInUp" class="appear-animation fadeInUp appear-animation-visible">
						<h1 class="short text-shadow big white bold "><strong>Plus qu'un simple Prestataire !</strong></h1>
						<h3 class="lead white ">Ne nous considerez pas comme un prestataire, mais comme <span class="inverted">votre Partenaire</span></h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="spacer"></div>
	<div class="spacer"></div>
	<hr>




	<section class="">
							<div class="container">

								<div class="row">

									<div class="span6 pull-top">
										<img class="responsive" src="/img/services/developpeur_web.png" data-appear-animation="fadeInRight">
									</div>
									<div class="span6">
										<h2 class="pull-top">Programmeur <strong>web</strong></h2>
										<p class="lead">
											Utilisation des technologies les plus récentes & efficaces
										</p>
										<p class="tall">
											 Pour vous offir du prix et de la satisaction, nous devons coder vite et bien. Pour cela les meilleurs outils sont déployés
											 <ul>
											 	<li>Framework PHP Laravel : tous sinpelement <em>The BEST</em>, il offre la rapidité, la flexibilité et la sécurité. <b>Le code de Laravel a été conçu sur un code propre et lisible, un réel plaisir !!</b></li>
											 	<li>
											 		La lirairie Boostrap 3 qui n'est plus à présenter et que nous affectons tous particulièrement. <b>Les sites sont agréables, intuitifs, modernet et responsives. Que demander de plus ??</b>
											 	</li>
											 </ul>


										</p>
									</div>
								</div>
							</div>
						</section>

	<section class="featured">
							<div class="container">

								<div class="row">

									<div class="span6">
										<h2 class="pull-top">Automatisation <strong>des tâches</strong></h2>
										<p class="lead">
											Parce que le travail doit se faire toujours plus vite et toujours mieux !
										</p>
										<p class="tall">
											 La démarche est d'automatiser tout ce qui est possible. L'étude des diagrammes de processus et la mise en place de nouvelles procédures automatisées vont révolutionner votre manière de travailler et de collaborer.
											  <br />
											 Le workflow s'étudie en prenant tous les sénarios possibles. Une réponse clair est affectée, le proccess <i>is to be continued</i><Br/>
											 <div class="spacer"></div>
											 <strong>Nous suivons une démarche centrée sur vos méthodes de travail et vos aspirations en terme de productivié</strong>

										</p>
									</div>
									<div class="span6 pull-top">
										<img class="responsive" src="/img/services/workflow-automatisation-des-taches.png" data-appear-animation="fadeInRight">
									</div>
								</div>
							</div>
	</section>



	<section class="">
							<div class="container">

								<div class="row">

									<div class="span6 pull-top">
										<img class="responsive" src="/img/marketing-graph.jpg" data-appear-animation="fadeInRight">
									</div>
									<div class="span6">
										<h2 class="pull-top">Marketing <strong>digital</strong></h2>
										<p class="lead">
											Accès aux solutions d’adserving RTB
										</p>
										<p class="tall">
											 Pour pouvoir penser ergonomie web pour un site internet, il faut être capable de se mettre à la place
											  de son visiteur - ou futur(e) client(e). Pour réussir cette expérience, il faut réagir en
											  tant qu'"architecte de l'information". <br />
											 Il faut donc être capable d'organiser harmonieusement les informations autours des FONCTIONNALITéS du site.<Br/>
											 <div class="spacer"></div>
											 <strong>Nous suivons une démarche centrée sur l’utilisateur, en prenant en compte ses attentes. </strong>

										</p>
									</div>
								</div>
							</div>
						</section>

	<section class="featured">
							<div class="container">

								<div class="row">

									<div class="span6">
										<h2 class="pull-top">Ergonomie <strong>Fonctionnelle</strong></h2>
										<p class="lead">
											Parce qu'un site internet doit être Convivial, Facile et vendeur, nous réalisons une étude des fonctionnalités
										</p>
										<p class="tall">
											 Pour pouvoir penser ergonomie web pour un site internet, il faut être capable de se mettre à la place
											  de son visiteur - ou futur(e) client(e). Pour réussir cette expérience, il faut réagir en
											  tant qu'"architecte de l'information". <br />
											 Il faut donc être capable d'organiser harmonieusement les informations autours des FONCTIONNALITéS du site.<Br/>
											 <div class="spacer"></div>
											 <strong>Nous suivons une démarche centrée sur l’utilisateur, en prenant en compte ses attentes. </strong>

										</p>
									</div>
									<div class="span6 pull-top">
										<img class="responsive" src="img/zoom_ergonomie.jpg" data-appear-animation="fadeInRight">
									</div>
								</div>
							</div>
	</section>


						<section >
							<div class="container">

								<div class="row">
									<div class="span6 pull-top">
										<img class="responsive" src="img/referencement.png" data-appear-animation="fadeInRight">
									</div>
									<div class="span6">
										<h2 class="pull-top">Référencement <strong>SEO</strong></h2>
										<p class="lead">
											Votre site doit être visible et visité
										</p>
										<p class="tall">
											 Référencement naturel, Google Adwords, E-pub, développement d'outils de tracking, linking, affiliation, SMO... Nous savons comment faire venir vos nouveaux visiteurs.<br />
											  <div class="spacer"></div>
											   <div class="spacer"></div>
											 Dès la phase conception, nous fournissons une architecture de site favorable au référencement naturel. Pour cela, nous vous aidons à choisir les mots clefs les + pertinents. Nous articulons ainsi les pages du sites autour de ces mots clets en veillant à respecter les bonnes pratiques de référencement<Br/>


										</p>
									</div>

								</div>
							</div>
						</section>
						<section class="featured">
							<div class="container">

								<div class="row">

									<div class="span6">
										<h2 class="pull-top">Hebergement <strong>& Maintenance</strong></h2>
										<p class="lead">
											Hebergement Professionnel à partir de 10 € HT par mois (utilisation standard)
										</p>
										<div class="text-center">
											<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="DMAHKJHZMBG86">
											<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
											<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
											</form>
										</div>

										<p class="tall">
											 Nous fournissons une disponibilité SLA de 99,99% dans le réseau pour la puissance et la disponibilité des serveurs que nous administrons <br />
											 Une retauration de sauveguarde est assurée quotidiennement afin de ne pas perdre de données. Nous pouvons vous fournir et administrer votre nom de domaine afin de vous faciliter ces démarches informatiques.<Br/>
											 <div class="spacer"></div>
											 <strong>Notre démarche est basée sur la sécurité de vos données et la puissance du serveur</strong>

										</p>
									</div>
									<div class="span6 pull-top">
										<img class="responsive" src="img/hebergement.png" data-appear-animation="fadeInRight">
									</div>
								</div>
							</div>
						</section>
						<div class="spacer"></div>

						<div class="container">

							<div class="row center">
								<div class="span12">
									<h2 class="short">10 ans d'expérience pour <strong class="">vous</strong> servir et vous satisfaire</h2>
									<p class="featured lead">
									Un chef de projet (interlocuteur unique) sera affecté. Son rôle : <br>



									</p>
								</div>
							</div>
							<div class="spacer"></div>
							<div class="row">
								<div class="span6">
									<img src="/img/chef-projet-web-goals.jpg" alt="">
								</div>
								<div class="span6">
									<div class="arrow_box">
										<i class="icon-share-alt"></i> Recueillir et analyser les besoins (fonctionnalités à développer)<br>
										<i class="icon-share-alt"></i> Coordonner les différents intervenants au projet<br>
										<i class="icon-share-alt"></i> vous tenir au courant de l'évolution du projet <br>
										<i class="icon-share-alt"></i> Superviser les opérations <br>
										<i class="icon-share-alt"></i> <b>Garantir de votre satisfactions </b><br>
									</div>
								</div>


							</div>

						</div>




	<!--					<div class="container">

							<div class="row">
								<div class="span8">
									<h2>Our <strong>Features</strong></h2>
									<div class="row">
										<div class="span4">
											<div class="feature-box">
												<div class="feature-box-icon">
													<i class="icon-group"></i>
												</div>
												<div class="feature-box-info">
													<h4 class="shorter">Customer Support</h4>
													<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
												</div>
											</div>
											<div class="feature-box">
												<div class="feature-box-icon">
													<i class="icon-file"></i>
												</div>
												<div class="feature-box-info">
													<h4 class="shorter">HTML5 / CSS3 / JS</h4>
													<p class="tall">Lorem ipsum dolor sit amet, adip.</p>
												</div>
											</div>
											<div class="feature-box">
												<div class="feature-box-icon">
													<i class="icon-google-plus"></i>
												</div>
												<div class="feature-box-info">
													<h4 class="shorter">500+ Google Fonts</h4>
													<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
												</div>
											</div>
											<div class="feature-box">
												<div class="feature-box-icon">
													<i class="icon-adjust"></i>
												</div>
												<div class="feature-box-info">
													<h4 class="shorter">Colors</h4>
													<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
												</div>
											</div>
										</div>
										<div class="span4">
											<div class="feature-box">
												<div class="feature-box-icon">
													<i class="icon-film"></i>
												</div>
												<div class="feature-box-info">
													<h4 class="shorter">Sliders</h4>
													<p class="tall">Lorem ipsum dolor sit amet, consectetur.</p>
												</div>
											</div>
											<div class="feature-box">
												<div class="feature-box-icon">
													<i class="image-icon small user"></i>
												</div>
												<div class="feature-box-info">
													<h4 class="shorter">Icons</h4>
													<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
												</div>
											</div>
											<div class="feature-box">
												<div class="feature-box-icon">
													<i class="icon-reorder"></i>
												</div>
												<div class="feature-box-info">
													<h4 class="shorter">Buttons</h4>
													<p class="tall">Lorem ipsum dolor sit, consectetur adip.</p>
												</div>
											</div>
											<div class="feature-box">
												<div class="feature-box-icon">
													<i class="icon-desktop"></i>
												</div>
												<div class="feature-box-info">
													<h4 class="shorter">Lightbox</h4>
													<p class="tall">Lorem sit amet, consectetur adip.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="span4">
									<h2>and more...</h2>
									<div class="accordion" id="accordion">
										<div class="accordion-group">
											<div class="accordion-heading">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="icon-lightbulb"></i> Group Item #1</a>
											</div>
											<div id="collapseOne" class="accordion-body collapse in">
												<div class="accordion-inner">
													Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor odio vulputate eleifend in in tortorodio vulputate eleifend in in tortor.
												</div>
											</div>
										</div>
										<div class="accordion-group">
											<div class="accordion-heading">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="icon-bell-alt"></i> Group Item #2</a>
											</div>
											<div id="collapseTwo" class="accordion-body collapse">
												<div class="accordion-inner">
													Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
												</div>
											</div>
										</div>
										<div class="accordion-group">
											<div class="accordion-heading">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="icon-laptop"></i> Group Item #3</a>
											</div>
											<div id="collapseThree" class="accordion-body collapse">
												<div class="accordion-inner">
													Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<hr class="tall" />

							<div class="row center">
								<div class="span12">
									<h2 class="short">We're not the only ones <strong>excited</strong> about Porto Template...</h2>
									<h4 class="lead tall">5,500 customers in 100 countries use Porto Template. Meet our customers.</h4>
								</div>
							</div>
							<div class="row center">
								<div class="flexslider unstyled" data-plugin-options='{"directionNav":false, "animation":"slide", "slideshow": false, "maxVisibleItems": 6}'>
									<ul class="slides">
										<li>
											<div class="span2">
												<img class="mobile-max-width small" src="img/logo-client-1.jpg" alt="">
											</div>
										</li>
										<li>
											<div class="span2">
												<img class="mobile-max-width small" src="img/logo-client-2.jpg" alt="">
											</div>
										</li>
										<li>
											<div class="span2">
												<img class="mobile-max-width small" src="img/logo-client-3.jpg" alt="">
											</div>
										</li>
										<li>
											<div class="span2">
												<img class="mobile-max-width small" src="img/logo-client-4.jpg" alt="">
											</div>
										</li>
										<li>
											<div class="span2">
												<img class="mobile-max-width small" src="img/logo-client-5.jpg" alt="">
											</div>
										</li>
										<li>
											<div class="span2">
												<img class="mobile-max-width small" src="img/logo-client-6.jpg" alt="">
											</div>
										</li>
										<li>
											<div class="span2">
												<img class="mobile-max-width small" src="img/logo-client-4.jpg" alt="">
											</div>
										</li>
										<li>
											<div class="span2">
												<img class="mobile-max-width small" src="img/logo-client-2.jpg" alt="">
											</div>
										</li>
									</ul>
								</div>
							</div>

						</div>-->












						<!--
						<div class="map-section">
							<section class="featured footer map">
								<div class="container">
									<div class="row">
										<div class="span6">
											<div class="recent-posts">
												<h2>Dernières <strong>créations</strong> web</h2>
												<div class="row">
													<div class="flexslider unstyled" data-plugin-options='{"directionNav":false, "animation":"slide"}'>
														<ul class="slides">
															<li>
																<div class="span3">
																	<article>
																		<div class="date">
																			<span class="day">15</span>
																			<span class="month">Jan</span>
																		</div>
																		<h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
																	</article>
																</div>
																<div class="span3">
																	<article>
																		<div class="date">
																			<span class="day">15</span>
																			<span class="month">Jan</span>
																		</div>
																		<h4><a href="blog-post.html">Lorem ipsum dolor</a></h4>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
																	</article>
																</div>
															</li>
															<li>
																<div class="span3">
																	<article>
																		<div class="date">
																			<span class="day">12</span>
																			<span class="month">Jan</span>
																		</div>
																		<h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
																	</article>
																</div>
																<div class="span3">
																	<article>
																		<div class="date">
																			<span class="day">11</span>
																			<span class="month">Jan</span>
																		</div>
																		<h4><a href="blog-post.html">Lorem ipsum dolor</a></h4>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
																	</article>
																</div>
															</li>
															<li>
																<div class="span3">
																	<article>
																		<div class="date">
																			<span class="day">15</span>
																			<span class="month">Jan</span>
																		</div>
																		<h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
																	</article>
																</div>
																<div class="span3">
																	<article>
																		<div class="date">
																			<span class="day">15</span>
																			<span class="month">Jan</span>
																		</div>
																		<h4><a href="blog-post.html">Lorem ipsum dolor</a></h4>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
																	</article>
																</div>
															</li>
														</ul>
													</div>
													<div class="row">
														<div class="span6">
															<a class="btn btn-flat btn-mini btn-primary pull-right pull-bottom-phone" href="#">View All Posts <i class="icon-arrow-right"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="span6">
											<h2><strong>Témoignage</strong> Clients</h2>
											<div class="row">
												<div class="flexslider flexslider-top-title unstyled" data-plugin-options='{"controlNav":false, "slideshow": false, "animationLoop": true, "animation":"slide"}'>
													<ul class="slides">
														<li>
															<div class="span6">
																<blockquote class="testimonial">
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
																</blockquote>
																<div class="testimonial-arrow-down"></div>
																<div class="testimonial-author">
																	<div class="thumbnail thumbnail-small">
																		<img src="img/clients/client-1.jpg" alt="">
																	</div>
																	<p><strong>John Smith</strong><span>CEO & Founder - Red Wine</span></p>
																</div>
															</div>
														</li>
														<li>
															<div class="span6">
																<blockquote class="testimonial">
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																</blockquote>
																<div class="testimonial-arrow-down"></div>
																<div class="testimonial-author">
																	<div class="thumbnail thumbnail-small">
																		<img src="img/clients/client-1.jpg" alt="">
																	</div>
																	<p><strong>John Smith</strong><span>CEO & Founder - Crivos</span></p>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>-->
					</div>
				</div>



				<!-- Modal -->
				<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Offre Spéciale !</h4>
				      </div>
				      <div class="modal-body">
				      	<img src="{{asset('img/popup/special_offer.jpg')}}" alt="Offre spéciale" style="height:100px">
				        <p>Pour le lancement de votre projet <em>WEB</em>, <b>OrganiT vous offre:</b></p>
				        <ul>
				        	<li>
				        		<h3 style="margin: 0px"><i class="fa-flag "></i> Votre site <u>multilingue</u> <div class="label label-warning">offert</div></h3>
				        		Intégration multinlingue offerte pour les projets <i>from scratch</i><br>
				        		<i>Les textes et traductions sont fournies par le client</i>
				        		<br><br>
				        	</li>
				        	<li>
								<h3 style="margin: 0px">Votre site en <u>https</u> <div class="label label-warning">offert</div></h3>
								Organit vous offre l'installation du protocole sécurisé SSL<br>
								<i>Offre valable pour les sites hébergés par Organit</i>
								<br><br>
				        	</li>
				        </ul>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok, Merci</button>
				      </div>
				    </div>
				  </div>
				</div>



@endsection

@section('footer_scripts')
	<script type="text/javascript">
		$(function(){
			$('#popup').modal('show')
		})
	</script>
@endsection
