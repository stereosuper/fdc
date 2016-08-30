<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class='no-js lt-ie10'> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

	<head>
		<title>Forum des Commerces</title>
	  	<?php include_once('includes/head.html'); ?>
	</head>

	<body class='cercle compte'>
		<?php include_once('includes/header_cercle.php'); ?>

		<main id='main' role='main'>
			<div class='header-cercle small'>
				<div class='container position-relative'>
					<ul class='little-squares'><li></li><li></li><li></li><li></li><li></li></ul>
				</div>
			</div>
			<div class='container-small'>
				<ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
				    <li property='itemListElement' typeof='ListItem'>
				        <h6><a property='item' typeof='WebPage' href='./'>
				            <span property='name'>Accueil</span>
				        </a></h6>
				    </li>
				</ul>

				<h1>Votre compte</h1>
				<div class='content-tabs'>
				    <ul class='nav-tabs'>
				        <li>
				            <span>Mes informations</span>
				        </li><li>
				            <a href='#'>Les leads proposés</a>
				        </li><li>
				            <a href='#'>Les leads achetés</a>
				        </li><li class='active'>
				            <a href='#'>Votre entreprise</a>
				        </li><li>
				            <a href='#'>Correspondance</a>
				        </li>
				    </ul>
				    <div class='tab-content'>
				        <header class='tab-content-title'>
				            <h2 class='h1'>Entreprise</h2>
				            <button class='btn-pen small' id='editForm' data-cancel='Annuler les modifications' data-edit='Modifier'>Modifier</button>
				        </header>
				        <div class='wrapper-alignment'>
							<div class='content-align-top wrapper-partner-card'>
								<div class='content-partner-card'>
									Strego
								</div>
							</div>
							<div class='content-align-top wrapper-desc-partner'>
								<h3>Présentation</h3>
								<textarea>Strego se positionne comme une entreprise proche de ses clients grâce à une implantation forte sur toute la région Grand Ouest, de l’Essonne au Morbihan jusqu'en Charente-Maritime,  dans les villes de + 50 000 habitants comme dans les zones rurales.&#13;&#13;&#10;Il n'y a rien de tel pour bien se connaître !&#13;&#13;&#10;Afin de se tenir au plus près de la réalité des entreprises, nos équipes s'impliquent dans les chambres consulaires, les réseaux d'accompagnement à la création et à la transmission, les associations de dirigeants... Strego répond ainsi aux attentes croissantes des professionnels qui souhaitent disponibilité et réelle implication dans les affaires locales.&#13;&#13;&#10;Pour répondre au mieux aux besoins spécifiques qui sont les vôtres, nous avons développé une large palette de compétences dans de nombreux métiers : experts-comptables, commissaires aux comptes, spécialistes de la paie, spécialistes de la fiscalité et du droit, consultants en gestion sociale et ressources humaines, consultants en organisation, formation, conseil en financement, assurances, conseil en gestion de patrimoine...
								</textarea>
								
								<h3>Références</h3>
								<p></p>
							</div>
				        </div>
				    </div>
				</div>
			</div>
		</main>

	  	<?php include_once('includes/footer_cercle.html'); ?>

	</body>

</html>
