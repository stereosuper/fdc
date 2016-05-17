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
                <ul class='breadcrumb'>
                    <li><a href='./'>Accueil</a></li>
                </ul>

                <h1>Mon compte</h1>
                <div class='content-tabs'>
                    <ul class='nav-tabs'>
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

                <div class='dashboard-block'>
                    <h2>2 ventes</h2>
                    <a href='#' class='btn-arrow small'>Voir</a>
                    <ul class='alerts-list'>
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
                                <span class='img no-img'></span>
                                <strong class='title-simple'>Boulangerie pâtisserie confiserie</strong>
                                <span class='btn-arrow small btn-no-text'>Voir</span>
                                <span class='p'>90 vues</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
