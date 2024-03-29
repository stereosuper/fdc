<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Mon compte - Alertes Edition</title>
        <?php include_once('includes/head.html'); ?>
    </head>

    <body>
        <?php include_once('includes/header.php'); ?>

        <main id='main' role='main'>
            <div class='container-small'>
                <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                    <li property='itemListElement' typeof='ListItem'>
                        <h6><a property='item' typeof='WebPage' href='./'>
                            <span property='name'>Accueil</span>
                        </a></h6>
                    </li>
                </ul>

                <h1>Mon compte</h1>
                <div class='content-tabs'>
                    <ul class='nav-tabs'>
                        <li>
                            <a href='#' class='btn-home'>Tableau de bord</a>
                        </li><li>
                            <a href='#'>Mes informations</a>
                        </li><li>
                            <a href='#'>Accompagnement <span class='notif notif-nav'>nouveau</span></a>
                        </li><li class='active'>
                            <span>Alertes</span>
                        </li><li>
                            <a href='#'>Ventes</a>
                        </li><li>
                            <a href='#'>Correspondance</a>
                        </li><li class='tab-right tab-orange'>
                            <a href='#'>Ma sélection</a>
                            <span class='notif'>1</span>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <header class='tab-content-title has-btn'>
                            <h2 class='h1'>Mes alertes <span class='notif'>5</span></h2>
                        </header>
                        <a href='alerteEdition.php' class='btn-block btn-alert'><span class='border'></span><span class='txt-btn'>Créer une nouvelle alerte</span></a>
                        <div class='alerts-block'>
                            <div class='alerts-header'>
                                <time datetime='2014-10-12'>12/10/2014</time>
                                <h3 class='title-grey h3'>Boulangerie / Patisserie / Salon de thé<span class='notif'>3</span></h3>
                                <span class='alerts-place'>Loire Atlantique, max 400 000 €</span>
                            </div>
                            <div class='alerts-block-btn'>
                                <a href='#' class='btn-pen btn-no-text'>Modifier cette alerte</a>
                                <a href='#' class='btn-delete btn-no-text'>Supprimer cette alerte</a>
                            </div>
                            <ul class='alerts-list'>
                                <li>
                                    <a href='#'>
                                        <span class='img'><img src='img/sandwicherie.jpg' alt=''></span>
                                        <strong class='title-simple'>Terminal de cuisson, sandwicherie</strong>
                                        <span href='#' class='btn-arrow small'>Voir</span>
                                        <span class='p'>Dans ensemble commercial, à 20 min de SAINT NAZAIRE. Parking</span>
                                        <span class='right alerts-price'>235 000 € FAI</span>
                                    </a>
                                </li>
                                <li>
                                    <a href='#'>
                                        <span class='img'></span>
                                        <strong class='title-simple'>Boulangerie pâtisserie confiserie</strong>
                                        <span class='btn-arrow small'>Voir</span>
                                        <span class='p'>BOULANGERIE PATISSERIE PROCHE LITTORAL VENDEE Situé à quinze minutes des catacombes</span>
                                        <span class='right alerts-price'>140 000 € FAI</span>
                                    </a>
                                </li>
                                <li>
                                    <a href='#'>
                                        <span class='img'></span>
                                        <strong class='title-simple'>Boulangerie pâtisserie confiserie</strong>
                                        <span class='btn-arrow small'>Voir</span>
                                        <span class='p'>BOULANGERIE PATISSERIE PROCHE LITTORAL VENDEE Situé à quinze minutes des catacombes</span>
                                        <span class='right alerts-price'>140 000 € FAI</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class='alerts-block'>
                            <div class='alerts-header'>
                                <time datetime='2014-10-12'>12/10/2014</time>
                                <h3 class='title-grey h3'>Bar / Tabac / PMU<span class='notif'>2</span></h3>
                                <span class='alerts-place'>Loire Atlantique et voisins, entre 300 000 et 900 000 €</span>
                            </div>
                            <div class='alerts-block-btn'>
                                <a href='#' class='btn-pen btn-no-text'>Modifier cette alerte</a>
                                <a href='#' class='btn-delete btn-no-text'>Supprimer cette alerte</a>
                            </div>
                            <ul class='alerts-list'>
                                <li>
                                    <a href='#'>
                                        <span class='img'><img src='img/sandwicherie.jpg' alt=''></span>
                                        <strong class='title-simple'>Terminal de cuisson, sandwicherie</strong>
                                        <span class='btn-arrow small'>Voir</span>
                                        <span class='p'>Dans ensemble commercial, à 20 min de SAINT NAZAIRE. Parking</span>
                                        <span class='right alerts-price'>235 000 € FAI</span>
                                    </a>
                                </li>
                                <li>
                                    <a href='#'>
                                        <span class='img'></span>
                                        <strong class='title-simple'>Boulangerie pâtisserie confiserie</strong>
                                        <span class='btn-arrow small'>Voir</span>
                                        <span class='p'>BOULANGERIE PATISSERIE PROCHE LITTORAL VENDEE Situé à quinze minutes des catacombes</span>
                                        <span class='right alerts-price'>140 000 € FAI</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
