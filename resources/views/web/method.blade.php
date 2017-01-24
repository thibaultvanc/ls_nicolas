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
							<li class="active">Méthode</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="span12">
						<h2>Méthodes & Valeurs</h2>
					</div>
				</div>
			</div>
		</section>

		<div class="container">

			<h2>Votre<strong>créateur</strong> de Projet</h2>

			<div class="row">
				<div class="span12">
					<p class="lead">
						Nous avons les <span class="alternative-font">qualités</span> pour mériter votre confiance.
					</p>
				</div>
			</div>

			<!--
			<h3 class="short"><strong>Four</strong> Plans</h3>
			<p>Vos petits et GRANDS projets "sur mesure" ,"clef en main" et avec le sourire !!</p>
			-->
			<div class="row">

				<div class="pricing-table">
					<div class="span3">
						<div class="plan ">
							<h3>Proximité<span><i class="icon-eur" style="font-size:xx-large; color:#0088CC"></i></span></h3>
							<!--<a class="btn btn-large btn-primary" href="#">Sign up</a>-->
							<ul>
								<li>Notre agence web s’intéresse toujours à l’activité de ses clients en restant à leur écoute et en apportant des réponses rapides et adaptées. Nos références pourront vous le confirmer.</li>

							</ul>
						</div>
					</div>
					<div class="span3 center">
						<div class="plan">

							<h3>Efficacité<span><i class="icon-gear" style="font-size:xx-large; color:#0088CC"></i></span></h3>
							<!--<a class="btn btn-large btn-primary" href="#">Sign up</a>-->
							<ul>
								<li>Etre les meilleurs au meilleur prix, grâce à nos méthodes de travail débouchant sur des gains de productivité dont nous vous faisons bénéficier !</li>


							</ul>
						</div>
					</div>
					<div class="span3">
						<div class="plan  most-popular" data-appear-animation="bounceIn">
							<div class="plan-ribbon-wrapper"><div class="plan-ribbon" ><!--popular--></div></div>
							<h3>Qualité / Prix<span><i class="icon-comments-alt" style="font-size:xx-large; color:#0088CC"></i></span></h3>
							<!--<a class="btn btn-large btn-primary" href="#">Sign up</a>-->
							<ul>
								<li>Notre objectif, vous proposer le meilleur du web grâce à une veille permanente dans tous nos cœurs de métier et une formation experte et continue de nos équipes.</li>
								<a href="{{ route('contact') }}" class="btn btn-large btn-primary">Demandez un devis</a><br>
							</ul>
						</div>
					</div>
					<div class="span3">
						<div class="plan">
							<h3>Sérieux<span><i class="icon-star" style="font-size:xx-large; color:#0088CC"></i></span></h3>
							<!--<a class="btn btn-large btn-primary" href="#">Sign up</a>-->
							<ul>
								<li>Parce qu’on trouve de tout sur le marché du web, nous faisons de cette valeur une priorité. Quoi de plus désagréable de rencontrer des personnes désinvoltes, intéressées ou incompétentes lorsque vous recherchez un prestataire ?</li>

							</ul>
						</div>
					</div>
				</div>

			</div>

			<h2>Notre Méthode</h2>

			<div class="row">
				<div class="span12">
					<p class="lead">
						Chaque étape ci-dessous constitue un livrable du projet. qualités pour mériter votre confiance.<br>
						Chaque &eacute;tape num&eacute;rot&eacute;e ci-dessous constitue un <span class="alternative-font">livrable du projet</span>. <br><u>Chaque &eacute;tape doit &ecirc;tre valid&eacute;e par le porteur du projet avant de commencer une nouvelle &eacute;tape.</u></em><
					</p>
				</div>
			</div>



					<p>
								<em>Chaque &eacute;tape num&eacute;rot&eacute;e ci-dessous constitue un livrable du projet. <u>Chaque &eacute;tape doit &ecirc;tre valid&eacute;e par le porteur du projet avant de commencer une nouvelle &eacute;tape.</u></em></p>
							<p>
								&nbsp;</p>
							<ol>
								<li>
									<strong>Pr&eacute;paration au r&eacute;f&eacute;rencement (</strong>Pr&eacute;paration des URL Dynamiques &amp; Analyse des mots clefs)</li>
							</ol>
							<ol>
								<li value="2">
									<strong>Analyse des besoins</strong> de chaque interface utilisateur &agrave; d&eacute;velopper</li>
								<li value="3">
									<strong>Cr&eacute;ation graphique et fonctionnelle</strong> des pages</li>
								<li value="4">
									<strong>Elaboration des diagrammes des processus</strong> </li>
								<li value="5">
									<strong>Cr&eacute;ation textuelle et graphique </strong> des pages d&eacute;coulant de l&rsquo;&eacute;tape 4 (en tenant compte des optimisations SEO)</li>
							</ol>
							<ol>
								<li value="6">
									<strong>Programmation</strong>dynamique (PHP)</li>
								<li value="7">
									<strong>Actions correctives </strong>(D&eacute;bogage)</li>
								<li value="8">
									<strong>Pr&eacute;paration du serveur </strong></li>
								<li value="9">
									<strong>Mise en ligne</strong></li>
								<li value="10">
									<strong>Correctifs </strong>de bugs apr&egrave;s lancement</li>
							</ol>





		</div>

	</div>
@endsection
