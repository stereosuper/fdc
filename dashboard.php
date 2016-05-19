<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Mon compte - Dashboard</title>
        <?php include_once('includes/head.html'); ?>
    </head>

    <body class='dashboard'>
        <?php include_once('includes/header.php'); ?>

        <main id='main' role='main'>
            <div class='container-small'>
                <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                    <li property='itemListElement' typeof='ListItem'>
                        <a property='item' typeof='WebPage' href='./'>
                            <span property='name'>Accueil</span>
                        </a>
                    </li>
                </ul>

                <h1>Mon compte</h1>
                <div class='content-tabs'>
                    <ul class='nav-tabs no-border'>
                        <li class='active'>
                            <span>Tableau de bord</span>
                        </li><li>
                            <a href='#'>Mes informations</a>
                        </li><li>
                            <a href='#'>Accompagnement <span class='notif'>nouveau</span></a>
                        </li><li>
                            <a href='#'>Alertes</a>
                            <span class='notif'>1</span>
                        </li><li>
                            <a href='#'>Ventes</a>
                        </li><li>
                            <a href='#'>Correspondances</a>
                        </li><li class='tab-right tab-orange'>
                            <a href='#'>Ma sélection</a>
                            <span class='notif'>1</span>
                        </li>
                    </ul>
                </div>

                <div class='dashboard-block orange'>
                    <div>
                        <div class='dashboard-title'>
                            <h2><span>2</span> ventes</h2>
                            <a href='#' class='btn-arrow small'>Voir</a>
                        </div><ul class='alerts-list'>
                            <li>
                                <a href='#'>
                                    <span class='img'><img src='img/sandwicherie.jpg' alt=''></span>
                                    <strong class='title-simple'>Terminal de cuisson, sandwicherie</strong>
                                    <span class='btn-arrow small btn-no-text'>Voir</span>
                                    <span class='p'>174 vues</span>
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <span class='img'></span>
                                    <strong class='title-simple'>Boulangerie pâtisserie confiserie</strong>
                                    <span class='btn-arrow small btn-no-text'>Voir</span>
                                    <span class='p'>90 vues</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><div class='dashboard-block'>
                    <div>
                        <div class='dashboard-title'>
                            <h2><span>3</span> sélections</h2>
                            <a href='#' class='btn-arrow small'>Voir</a>
                        </div><ul class='alerts-list'>
                            <li>
                                <a href='#'>
                                    <span class='img'><img src='img/sandwicherie.jpg' alt=''></span>
                                    <strong class='title-simple'>Terminal de cuisson, sandwicherie</strong>
                                    <span class='btn-arrow small btn-no-text'>Voir</span>
                                    <span class='p'>Située au coeur d'une commune en rétropédalage</span>
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <span class='img'></span>
                                    <strong class='title-simple'>Boulangerie pâtisserie confiserie</strong>
                                    <span class='btn-arrow small btn-no-text'>Voir</span>
                                    <span class='p'>Dans ensemble commercial, à 20 minutes du centre</span>
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <span class='img'></span>
                                    <strong class='title-simple'>BOULANGERIE PATISSERIE en Vendée.</strong>
                                    <span class='btn-arrow small btn-no-text'>Voir</span>
                                    <span class='p'>BOULANGERIE PATISSERIE PROCHE CENTRE</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><div class='dashboard-block'>
                    <div>
                        <div class='dashboard-title'>
                            <h2><span>5</span> alertes</h2>
                            <a href='#' class='btn-arrow small'>Voir</a>
                        </div><ul class='alerts-list has-num'>
                            <li>
                                <a href='#'>
                                    <span class='num'>3</span>
                                    <strong class='title-simple'>Terminal de cuisson, sandwicherie</strong>
                                    <span class='btn-arrow small btn-no-text'>Voir</span>
                                    <span class='p'>Loire Atlantique, max. 400 000 €</span>
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <span class='num'>2</span>
                                    <strong class='title-simple'>Bar Tabac PMU</strong>
                                    <span class='btn-arrow small btn-no-text'>Voir</span>
                                    <span class='p'>Loire Atlantique et voisins, entre 300 000 €</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
