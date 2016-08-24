<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class='no-js lt-ie10'> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

	<head>
		<title>Forum des Commerces</title>
	  	<?php include_once('includes/head.html'); ?>
	</head>

	<body class='cercle'>
		<?php include_once('includes/header_cercle.php'); ?>

		<main id='main' role='main'>
			<div class='header-cercle'>
				<div class='container position-relative'>
					<ul class='little-squares'><li></li><li></li><li></li><li></li><li></li></ul>
				</div>
			</div>
			<div class='container'>
				<div class='container-small'>
				    <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
				        <li property='itemListElement' typeof='ListItem'>
				            <a property='item' typeof='WebPage' href='./'>
				                <span property='name'>Accueil</span>
				            </a>
				        </li>
				    </ul>

				    <h1>Rejoignez le cercle</h1>
				    <p class='gutter-left no-margin-top'><strong>Vous souhaitez faire partie du Cercle FDC ?</strong> Nous sommes toujours à la recherche de partenaires de confiance pour accompagner les entrepreneurs dans leur spécialité et leur région. Merci de remplir le formulaire suivant, nous vous recontacterons rapidement.</p>
				    <div class='wrapper-alignment'>
						<div class='content-align-top'>
							<div class='content-tabs'>
							    <div class='tab-content form-contact'>
							        <form action='#' method='post' id='formToEdit'>
							            <fieldset class='required'>
							                <legend class='legend-next-fieldset'>Civilités</legend><fieldset class='inline-b'>
							                    <input type='radio' name='civilites' value='mme' id='mme' ><label for='mme' class='has-margin'>Mme</label>
							                    <input type='radio' name='civilites' value='mr' id='mr' checked ><label for='mr'>Mr</label>
							                </fieldset>
							            </fieldset>
							            <fieldset class='required'>
							                <label for='nom'>
							                    Nom
							                </label><input type='text' name='nom' id='nom' value='Dus' >
							            </fieldset>
							            <fieldset class='required'>
							                <label for='prenom'>
							                    Prénom
							                </label><input type='text' name='prenom' id='prenom' value='Jean-Claude' required >
							            </fieldset>
							            <fieldset>
							                <label for='societe'>
							                    Société
							                </label><input type='text' name='societe' id='societe' class='big' >

							            </fieldset>
							            <fieldset class='required'>
							                <label for='code' >
							                    Code postal
							                </label><input type='number' name='code' id='code' value='75000' min='0' max='99999' required >
							            </fieldset>
							            <fieldset class='required'>
							                <label for='tel'>
							                    Téléphone
							                </label><input type='tel' name='tel' id='tel' value='0678675690' required pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" >
							            </fieldset>
							            <fieldset class='required'>
							                <label for='email'>
							                    Email
							                </label><input type='email' name='email' id='email' value='jc.dus@caramail.fr'  pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?">
							            </fieldset>
							            <fieldset class='required'>
							                <label for='objet'>
							                    Objet
							                </label>
							                <div class=' huge objet select'>
							                    <select name="objet">
							                        <option>Contact
							                        <option>Demande d'accompagnement
							                        <option>Demande de renseignement
							                    </select>
							                </div>
							            </fieldset>
							            <fieldset>
							                <label for='message'>
							                    Message
							                </label><textarea id="message"></textarea>
							            </fieldset>

							            <button type='submit' class='btn-block huge btn-orange-cercle'>Valider</button>
							        </form>
							    </div>
							</div>
						</div>
						<div class='content-align-top wrapper-rappel'>
							<div class='content-rappel'>
								<div class='header-rappel'>
									<h2>Je préfère<br /> que vous<br /> m'appeliez !</h2>
								</div>
								<form action='#' method='post'>
	                                <fieldset class='required no-asterisk'>
	                                    <label for='name-rappel' class='block'>Nom</label>
	                                    <input type='text' name='name-rappel' id='name-rappel' required>
	                                </fieldset>
									<fieldset class='required no-asterisk'>
									    <label for='tel-rappel' class='block'>Téléphone</label>
									    <input type='tel' name='tel-rappel' id='tel-rappel' value='' required pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
									</fieldset>
	                                <fieldset class='required no-asterisk'>
	                                    <label for='creneau-rappel' class='block'>Créneau de préférence</label>
	                                </fieldset>
	                                <button type='submit' class='btn-block btn-orange-cercle'>Envoyer</button>
	                            </form>
							</div>
						</div>
				    </div>
				</div>
			</div>
		</main>

	  	<?php include_once('includes/footer_cercle.html'); ?>

	</body>

</html>
