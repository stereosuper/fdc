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
				        </li><li>
				            <a href='#'>Votre entreprise</a>
				        </li><li class='active'>
				            <span>Correspondance</span>
				        </li>
				    </ul>
				    <div class='tab-content'>
				        <header class='tab-content-title'>
				            <h2 class='h1'>Correspondance <span class='notif'>1</span></h2>
				        </header>
				        <ul class='messages-list'>
				            <li class='new'>
				                <a href='#'>
				                    <time datetime='2016-04-05'>05/04/16</time>
				                    <b>Audit Expert-Comptable</b>
				                    <span class='btn-arrow small'>Voir</span>
				                    <button class='btn-delete btn-no-text'>Supprimer ce message</button>
				                </a>
				            </li>
				            <li>
				                <a href='#'>
				                    <time datetime='2016-03-10'>10/03/16</time>
				                    <b>Emailing Février 2015</b>
				                    <span class='btn-arrow small'>Voir</span>
				                    <button class='btn-delete btn-no-text'>Supprimer ce message</button>
				                </a>
				            </li>
				            <li>
				                <a href='#'>
				                    <time datetime='2016-03-10'>10/03/16</time>
				                    <b>Emailing Février 2015</b>
				                    <span class='btn-arrow small'>Voir</span>
				                    <button class='btn-delete btn-no-text'>Supprimer ce message</button>
				                </a>
				            </li>
				        </ul>
				    </div>
				</div>
			</div>
		</main>

	  	<?php include_once('includes/footer_cercle.html'); ?>

	</body>

</html>
