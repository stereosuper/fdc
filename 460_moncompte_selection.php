<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Mon compte - Sélection</title>
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
                        </li><li>
                            <a href='#'>Alertes</a>
                            <span class='notif'>1</span>
                        </li><li>
                            <a href='#'>Ventes</a>
                        </li><li>
                            <a href='#'>Correspondance</a>
                        </li><li class='tab-right tab-orange active'>
                            <span>Ma sélection</span>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Ma sélection <span class='notif orange'>3</span></h2>
                        </header>
                        <ul class='sales-list'>
                            <li>
                                <a href='#'>
                                    <span class='img'><img src='img/sandwicherie.jpg' alt=''></span>
                                    <strong class='title-simple'>Terminal de cuisson, sandwicherie</strong>
                                    <span href='#' class='btn-arrow small'>Voir</span>
                                    <span class='p'>Dans ensemble commercial, à 20 min de SAINT NAZAIRE. Parking</span>
                                </a>
                                <div class='bloc-overlay'>
                                    <button class='btn-delete btn-no-text'>Supprimer</button>
                                </div>
                            </li>
                            <li>
                                <a href='#'>
                                    <span class='img'></span>
                                    <strong class='title-simple'>Boulangerie pâtisserie confiserie</strong>
                                    <span class='btn-arrow small'>Voir</span>
                                    <span class='p'>BOULANGERIE PATISSERIE PROCHE LITTORAL VENDEE Situé à quinze minutes des catacombes</span>
                                </a>
                                <div class='bloc-overlay'>
                                    <button class='btn-delete btn-no-text'>Supprimer</button>
                                </div>
                            </li>
                            <li>
                                <a href='#'>
                                    <span class='img'></span>
                                    <strong class='title-simple'>Boulangerie pâtisserie confiserie</strong>
                                    <span class='btn-arrow small'>Voir</span>
                                    <span class='p'>BOULANGERIE PATISSERIE PROCHE LITTORAL VENDEE Situé à quinze minutes des catacombes</span>
                                </a>
                                <div class='bloc-overlay'>
                                    <button class='btn-delete btn-no-text'>Supprimer</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
