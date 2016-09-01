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
				            <a href='#'>Mes informations</a>
				        </li><li>
				            <a href='#'>Les leads proposés</a>
				        </li><li>
				            <a href='#'>Les leads achetés</a>
				        </li><li class='active'>
				            <span>Votre entreprise</span>
				        </li><li>
				            <a href='#'>Correspondance</a>
				        </li>
				    </ul>
				    <div class='tab-content'>
				        <header class='tab-content-title'>
				            <h2 class='h1'>Entreprise</h2>
				            <button class='btn-cancel small' id='editForm' data-cancel='Annuler les modifications' data-edit='Modifier'>Annuler les modifications</button>
				        </header>
				        <form action='#' id='formToEdit' method='post'>
				        <div class='wrapper-alignment wrapper-cercle-entreprise'>
							<div class='content-align-top wrapper-partner-card'>
								<div class='content-partner-card'>
									<div class='bloc-logo no-img'>
										<img src='img/logo-no-img.png' srcset='img/logo-no-img.png 1x, img/logo-no-img@2x.png 2x' alt='Pas de logo'>
										<button class='btn-photo'>Ajouter un&nbsp;logo</button>
									</div>
									<div class='fieldset-groupe'>
									    <fieldset class='required no-asterisk'>
									        <label for='company-name' class='block'>Nom</label>
									        <input type='text' name='company-name' id='company-name' value='Strego' required>
									    </fieldset>
									    <fieldset class='required no-asterisk'>
									        <label for='interlocutor-name' class='block'>Interlocuteur</label>
									        <input type='text' name='interlocutor-name' id='interlocutor-name' value='Guillaume HOLLEVOET' required>
									    </fieldset>
									    <fieldset class='required no-asterisk'>
									        <label for='interlocutor-function' class='block'>Fonction de l'interlocuteur</label>
									        <input type='text' name='interlocutor-function' id='interlocutor-function' value='Avocat' required>
									    </fieldset>
								        <ul class='infos-static'>
								    		<li data-info='company-name' class='big'>
								    			Strego
								    		</li><!--
								    		--><li data-info='interlocutor-name'>
								    			Guillaume HOLLEVOET
								    		</li><!--
								    		--><li data-info='interlocutor-function'>
								    			Avocat
								    		</li>
								        </ul>
								    </div>
								    <h3>Specialités</h3>
								    <ul class='tags'>
								    	<li>
								    		<div class='tag'>Droit des affaires</div>
								    	</li><!--
								    	--><li>
								    		<div class='tag'>Conseils</div>
								    	</li><!--
								    	--><li>
								    		<div class='tag'>Litiges</div>
								    	</li>
								    </ul>
								    <div class='select'>
									    <select name='speciality'>
									        <option selected value=''>— Ajout d'une spécialité</option>
									        <option value='specialite-1'>specialite-1</option>
									    </select>
								    </div>
								</div>
							</div>
							<div class='content-align-top wrapper-desc-partner'>
								<h3>Présentation</h3>
								<textarea class='big'>Strego se positionne comme une entreprise proche de ses clients grâce à une implantation forte sur toute la région Grand Ouest, de l’Essonne au Morbihan jusqu'en Charente-Maritime,  dans les villes de + 50 000 habitants comme dans les zones rurales.&#13;&#13;&#10;Il n'y a rien de tel pour bien se connaître !&#13;&#13;&#10;Afin de se tenir au plus près de la réalité des entreprises, nos équipes s'impliquent dans les chambres consulaires, les réseaux d'accompagnement à la création et à la transmission, les associations de dirigeants... Strego répond ainsi aux attentes croissantes des professionnels qui souhaitent disponibilité et réelle implication dans les affaires locales.&#13;&#13; &#10;Pour répondre au mieux aux besoins spécifiques qui sont les vôtres, nous avons développé une large palette de compétences dans de nombreux métiers : experts-comptables, commissaires aux comptes, spécialistes de la paie, spécialistes de la fiscalité et du droit, consultants en gestion sociale et ressources humaines, consultants en organisation, formation, conseil en financement, assurances, conseil en gestion de patrimoine...
								</textarea>
								
								<h3>Références</h3>
								<div class='wrapper-company-refs'>
									<ul class='company-refs'>
										<li>
											<div class='wrapper-alignment'>
												<div class='content-align-middle img-company-ref'>
													<img src='img/briand.png'>
													<button class='btn-photo'>Supprimer / changer l'image</button>
												</div>
												<div class='content-align-middle txt-company-ref'>
													<textarea>Dany BRIAND gérante de la SARL BRIAND TP, travaux publics de terrassement, assainissement et d’aménagement divers, à Tiercé (49)</textarea>
												</div>
											</div>
										</li>
										<li>
											<div class='wrapper-alignment'>
												<div class='content-align-middle img-company-ref no-img'>
													<img src='img/logo-no-img-small.png' srcset='img/logo-no-img-small.png 1x, img/logo-no-img-small@2x.png 2x' alt='Pas de logo'>
													<button class='btn-photo'>Ajouter une&nbsp;image</button>
												</div>
												<div class='content-align-middle txt-company-ref'>
													<textarea>Marcel DA SILVA, dirigeant de la SARL TM BTP, entreprise de maçonnerie et terrassement, à Roinville (28)</textarea>
												</div>
											</div>
										</li>
									</ul>
									<button type='submit' class='btn-block btn-orange-cercle small'><span class='border'></span><span class='txt-btn'>Ajouter une référence</span></button>
								</div>

								<button type='submit' class='btn-block btn-orange-cercle huge'><span class='border'></span><span class='txt-btn'>Valider</span></button>
							</div>
				        </div>
				        </form>
				    </div>
				</div>
			</div>
		</main>

	  	<?php include_once('includes/footer_cercle.html'); ?>

	</body>

</html>
