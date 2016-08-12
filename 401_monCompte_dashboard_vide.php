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
                        <h6><a property='item' typeof='WebPage' href='./'>
                            <span property='name'>Accueil</span>
                        </a></h6>
                    </li>
                </ul>

                <h1>Mon compte</h1>
                <div class='content-tabs'>
                    <ul class='nav-tabs no-border'>
                        <li class='active'>
                            <span class='btn-home'>Tableau de bord</span>
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
                            <a href='#'>Correspondances</a>
                        </li><li class='tab-right tab-orange'>
                            <a href='#'>Ma sélection</a>
                            <span class='notif'>1</span>
                        </li>
                    </ul>
                </div>

                <div class='dashboard-block'>
                    <div>
                        <div class='dashboard-title'>
                            <div class='wrapper-alignment'>
                                <div class='content-align-middle'>
                                    <h2><span>0</span> sélections</h2>
                                </div>
                            </div>
                        </div><div class='empty-list'>
                            <p>C'est ici que vos <a href='#'>sélections</a> apparaîtront</p>
                        </div>
                    </div>
                </div><div class='dashboard-block'>
                    <div>
                        <div class='dashboard-title'>
                            <div class='wrapper-alignment'>
                                <div class='content-align-middle'>
                                    <h2><span>0</span> alertes</h2>
                                </div>
                            </div>
                        </div><div class='empty-list'>
                            <p>C'est ici que vos <a href='#'>alertes</a> apparaîtront</p>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
