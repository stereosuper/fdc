<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Forum des Commerces - Vente</title>
        <?php include_once('includes/head.html'); ?>
    </head>

    <body>
        <?php
            global $field;
            $field = 'Boulangerie - Pâtisserie - Salon de thé';
            include_once('includes/header.php');
        ?>

        <main id='main' role='main'>
            <div class='bloc-top'>
                <div class='wrapper-img img-fit'>
                    <img src='img/visuel-home.jpg' alt=''>
                </div>
            </div>

            <div class='container-small'>
                <div class='field field-sale'>
                    <header class='field-header'>
                        <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                            <li property='itemListElement' typeof='ListItem'>
                                <h6><a property='item' typeof='WebPage' href='./'>
                                    <span property='name'>Accueil</span>
                                </a></h6>
                            </li>
                        </ul>
                        <h1>Vente de boulangerie - pâtisserie - salon de thé</h1>
                        <div class='rect'></div>
                    </header>
                </div>

                <div class='content-tabs content-tabs-sale'>
                    <ul class='nav-tabs nav-tabs-indicator'>
                        <li class='active'>
                            <span>1. Bienvenue</span>
                        </li><li>
                            <a href='#'>
                                <span>2. Connexion</span>
                            </a>
                        </li><li>
                            <a href='#'>
                                <span>3. Mon annonce</span>
                            </a>
                        </li><li>
                            <a href='#'>
                                <span>4. Paiement</span>
                            </a>
                        </li>
                    </ul>
                    <div class='field-content'>
                        <div class='wrapper-alignment container-depot-annonce'>
                            <div class='content-align-top wrapper-depot-annonce'>
                                <div class="tab-content-title">
                                    Déposer une annonce
                                </div>
                                <p>
                                    Vous souhaitez trouver rapidement un acquéreur pour votre bar brasserie&nbsp;?
                                </p>
                                <ul>
                                    <li>Diffusion pendant <strong>6 mois</strong></li>
                                    <li><strong>Modifiez votre annonce</strong> quand vous le souhaitez</li>
                                    <li>Profitez de <strong>statistiques</strong> de consultation</li>
                                </ul>
                                <a href="#" class="btn-block btn-orange-sale huge btn-price"><span class="border"></span><span class='price-btn'>40<span class='currency'>€ HT</span></span><span class="txt-btn">Déposer mon annonce</span></a>
                            </div>
                            <div class='content-align-top wrapper-pub-pack'>
                                <a href='#' class='pub-pack'>
                                    <span class='small-txt'>Plusieurs affaires à vendre&nbsp;?</span>
                                    <span class='big-txt'>Découvrez<br/> nos packs<br/> d'annonces<span class='icon-arrow'></span></span>
                                </a>
                                <a href='#' class='pub-pack transaction'>
                                    <span class='big-txt'>Professionnels<br /> de la transaction<span class='icon-arrow'></span></span>
                                    <span class='small-txt'>Contactez-nous pour bénéficier<br/> de notre offre <i>no limit&nbsp;!</i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
