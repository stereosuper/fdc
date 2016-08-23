<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

	<head>
		<title>Forum des Commerces</title>
	  	<?php include_once('includes/head.html'); ?>
	</head>

	<body class='cercle'>
		<?php include_once('includes/header_cercle.php'); ?>

		<main id='main' role='main'>
			<div class='container'>
				<div class='wrapper-alignment presentation-cercle'>
					<div class='content-align-top desc-cercle'>
						<img src='./layoutImg/cercle/cercle.png' width='198' alt='Le Cercle MyForum'>
						<h1>Vous recherchez des entrepreneurs
						à assister dans leurs projets ?</h1>
						<p><strong>Devenez partenaire et entrez dans le Cercle FDC.</strong><br/> 
						Venez consolider les projets de commerçants qui n’attendent que vous pour bien commencer, et développer votre business.</p>
						<a href='#' class='btn-block btn-yellow huge has-shadow'><span class='border'></span><span class='txt-btn'>Rejoignez le cercle !</span></a>
					</div>
					<div class='content-align-top login-cercle'>
						<div class='content-login-cercle'>
							<div class='login-infos'>
								<div>Déjà membre ?</div>
								Connectez-vous :
							</div>
                            <form action='#' method='post'>
                                <fieldset class='required no-asterisk'>
                                    <label for='cercle-account-login' class='block'>Identifiant</label>
                                    <input type='text' name='cercle-account-login' id='cercle-account-login' required>
                                </fieldset>
                                <fieldset class='required no-asterisk'>
                                    <label for='cercle-account-password' class='block'>Mot de passe</label>
                                    <div class='wrapper-input-btn'>
                                        <div class='wrapper-input big'>
                                            <input type='password' name='cercle-account-password' id='cercle-account-password' required>
                                            <button type='submit' class='btn-block medium'><span class='border'></span><span class='txt-btn'>Ok</span></button>
                                        </div>
                                    </div>
                                    <div class='center-align info-form'>
                                        <a href='#' class='btn-simple'>Mot de passe oublié&nbsp;?</a>
                                    </div>
                                </fieldset>
                            </form>
						</div>
					</div>
				</div>
				
			</div>
		</main>

	  	<?php include_once('includes/footer_cercle.html'); ?>

	</body>

</html>
