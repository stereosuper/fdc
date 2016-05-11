<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Mon compte - Alertes Edition</title>
        <?php include_once('includes/head.html'); ?>
    </head>

    <body>
        <?php include_once('includes/header.html'); ?>

        <main id='main' role='main'>
            <div class='container-small'>
                <ul class='breadcrumb'>
                    <li><a href='./'>Accueil</a></li>
                </ul>

                <h1>Mon compte</h1>
                <div class='content-tabs'>
                    <ul class='nav-tabs'>
                        <li>
                            <a href='#'>Tableau de bord</a>
                        </li><li>
                            <a href='#'>Mes informations</a>
                        </li><li>
                            <a href='#'>Alertes</a>
                            <span class='notif'>1</span>
                        </li><li class='active'>
                            <a href='#'>Ventes</a>
                        </li><li>
                            <a href='#'>Correspondances</a>
                        </li><li class='tab-right tab-orange'>
                            <a href='#'>Ma sélection</a>
                            <span class='notif'>1</span>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <div class='tab-content-title'>
                            <h2 class='h1'>Mes ventes</h2>
                        </div>
                        <ul class='sales-list'>
                            <li>
                                <a href='#'>
                                    <span class='img'><img src='img/sandwicherie.jpg' alt=''></span>
                                    <strong class='title-simple'>Terminal de cuisson, sandwicherie</strong>
                                    <span href='#' class='btn-arrow small'>Voir</span>
                                    <span class='p'>Dans ensemble commercial, à 20 min de SAINT NAZAIRE. Parking</span>
                                    <span class='right'>
                                        <span class='sales-views'><b>174</b> <span>vues</span></span>
                                        <button class='btn-pen btn-no-text'>Modifier cette vente</button>
                                        <button class='btn-delete btn-no-text'>Supprimer cette vente</button>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <span class='img no-img'></span>
                                    <strong class='title-simple'>Boulangerie pâtisserie confiserie</strong>
                                    <span class='btn-arrow small'>Voir</span>
                                    <span class='p'>BOULANGERIE PATISSERIE PROCHE LITTORAL VENDEE Situé à quinze minutes des catacombes</span>
                                    <span class='right'>
                                        <span class='sales-views'><b>90</b> <span>vues</span></span>
                                        <button class='btn-pen btn-no-text'>Modifier cette vente</button>
                                        <button class='btn-delete btn-no-text'>Supprimer cette vente</button>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <span class='img no-img'></span>
                                    <strong class='title-simple'>Boulangerie pâtisserie confiserie</strong>
                                    <span class='btn-arrow small'>Voir</span>
                                    <span class='p'>BOULANGERIE PATISSERIE PROCHE LITTORAL VENDEE Situé à quinze minutes des catacombes</span>
                                    <span class='right'>
                                        <span class='sales-views'><b>1</b> <span>vue</span></span>
                                        <button class='btn-pen btn-no-text'>Modifier cette vente</button>
                                        <button class='btn-delete btn-no-text'>Supprimer cette vente</button>
                                    </span>
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