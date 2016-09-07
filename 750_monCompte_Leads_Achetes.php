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
				        </li><li class='active'>
				            <span>Les leads achetés</span>
				        </li><li>
				            <a href='#'>Votre entreprise</a>
				        </li><li>
				            <a href='#'>Correspondance</a>
				        </li>
				    </ul>
				    <div class='tab-content'>
				        <header class='tab-content-title'>
				            <h2 class='h1'>Vos leads
				                <span class='notif'>1</span>
				            </h2>
				        </header>
				        <div class='tab-leads'>
				            <ul class='leads-title'>
				                <li class='reference'>Références</li>
				                <li class='date'>Date</li>
				                <li class='activite'>Activité de l'acheteur/vendeur</li>
				                <li class='ville'>Ville</li>
				                <li class='apport'>Apport</li>
				            </ul>
				            <ul class='messages-list leads-list'>
				                <li class='new'>
				                    <a href='#'>
				                        <span class='reference'>25548</span>
				                        <time datetime='2016-04-05'>05/04/16</time>
				                        <span class='activite'>
				                            <span>Boucherie-charcuterie-traiteur</span>
				                            <span class='btn-arrow'>Voir</span>
				                        </span>
				                        <span class='ville'>Nantes</span>
				                        <span class='price'>200&nbsp;000&nbsp;€</span>
				                    </a>
				                    <div class='bloc-overlay fixed-right'>
				                        <button class='btn-delete btn-no-text'>Supprimer ce lead</button>
				                    </div>
				                </li>
				                <li>
				                    <a href='#'>
				                        <span class='reference'>156165</span>
				                        <time datetime='2016-03-10'>10/03/16</time>
				                        <span class='activite'>
				                            <span>Boucherie-charcuterie-traiteur</span>
				                            <span class='btn-arrow small'>Voir</span>
				                        </span> 
				                        <span class='ville'>Rezé</span>
				                        <span class='price'>150&nbsp;000&nbsp;€</span>
				                    </a>
				                    <div class='bloc-overlay fixed-right'>
				                        <button class='btn-delete btn-no-text'>Supprimer ce lead</button>
				                    </div>
				                </li>
				                <li>
				                    <a href='#'>
				                        <span class='reference'>155</span>
				                        <time datetime='2016-03-10'>10/03/16</time>
				                        <span class='activite'>
				                            <span>Boulangerie-patiserie-salon de thé</span>
				                            <span class='btn-arrow small'>Voir</span>
				                        </span>
				                        <span class='ville'>Sablé-sur-sarthe</span>
				                        <span class='price'>20&nbsp;000&nbsp;€</span>
				                    </a>
				                    <div class='bloc-overlay fixed-right'>
				                        <button class='btn-delete btn-no-text'>Supprimer ce lead</button>
				                    </div>
				                </li>
				            </ul>
				        </div>
				    </div>
				</div>
			</div>
		</main>

	  	<?php include_once('includes/footer_cercle.html'); ?>

	</body>

</html>
