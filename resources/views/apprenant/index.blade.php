@extends('layouts.layout.layouts')
@section('content')
 <!-- Intro -->
<div class="container text-center">
		<br> <br>
		<h2 class="thin">Description de l'Application - Gestion d'Accès à la Fabrique</h2>
		<p class="text-muted">
        L'application de gestion d'accès à la fabrique est une plateforme innovante conçue pour répondre <br>
         aux défis posés par les mesures sanitaires actuelles, tout en offrant une solution efficace <br>
          pour la gestion des inscriptions et de l'accès à une fabrique ou un espace de formation spécifique.
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">D'Accès à la Fabrique</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Sécurité et Confidentialité</h4></div>
					<div class="h-body text-center">
						<p>La sécurité des données et la confidentialité des utilisateurs sont des priorités essentielles. L'application met en place des mesures de sécurité <br>
                         robustes pour protéger les informations des utilisateurs et se conforme aux règlements sur la confidentialité des données.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Fonctionnalités pour les Apprenants</h4></div>
					<div class="h-body text-center">
						<p>Les apprenants bénéficient également d'un ensemble de fonctionnalités conviviales. Ils peuvent utiliser l'application pour réserver des créneaux d'accès à la fabrique en dehors des heures de formation régulières, ce qui leur offre une flexibilité précieuse.  </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Respect des Mesures Sanitaires</h4></div>
					<div class="h-body text-center">
						<p> En limitant le nombre d'apprenants autorisés à accéder à la fabrique pendant des heures spécifiques, elle contribue à maintenir une capacité d'accueil adaptée à la distanciation sociale</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Support et Assistance</h4></div>
					<div class="h-body text-center">
						<p>Enfin, l'application offre un support et une assistance dédiés pour aider les utilisateurs en cas de questions, de problèmes techniques ou de besoins d'assistance. </p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Objectifs de la Formation</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Objectifs de la Formation Professionnelle</h3>
				<p>La formation professionnelle <a href="http://www.sublimetext.com/">Formation</a> vise généralement à préparer les individus à des emplois spécifiques.</p>
			</div>
			<div class="col-sm-6">
				<h3>Types de Formation </h3>
				<p>
                Formation formelle : Cela peut inclure des programmes universitaires,
                 des cours en ligne, des formations en entreprise, etc.: <a href="http://unsplash.com">Telecharger.com</a> 
                 </p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>Avantages de la Formation</h3>
                <ul>
                <li>Amélioration des compétences et de la connaissance</li>
                <li>Meilleures perspectives d'emploi et possibilités de carrière</li>
                 <li>Adaptation aux évolutions technologiques et aux besoins du marché du travail.</li>
                </ul>

			</div>
			<div class="col-sm-6">
				<h3>Domaines de Formation</h3>
				<p>La formation professionnelle peut couvrir une large gamme de domaines,
                     tels que la santé, la technologie, l'artisanat, le commerce, l'éducation, etc.</p>
			</div>
		</div> <!-- /row -->

		<div class="jumbotron top-space">
			<h4>De nombreuses formations professionnelles débouchent sur des certifications reconnues par l'industrie, ce qui peut être un atout lors de la recherche d'emploi.</h4>
     		<p class="text-right"><a class="btn btn-primary btn-large">Suivant»</a></p>
  		</div>

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->
@endsection