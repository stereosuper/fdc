<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Mon compte - Correspondance</title>
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
                           <a href='#'>Alertes<span class='notif'>5</span></a>
                        </li><li>
                            <a href='#'>Ventes</a>
                        </li><li class='active'>
                            <span>Correspondance</span>
                        </li><li class='tab-right tab-orange'>
                            <a href='#'>Ma sélection</a>
                            <span class='notif'>1</span>
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
                                </a>
                                <div class='bloc-overlay fixed-right'>
                                    <button class='btn-delete btn-no-text'>Supprimer ce message</button>
                                </div>
                            </li>
                            <li>
                                <a href='#'>
                                    <time datetime='2016-03-10'>10/03/16</time>
                                    <b>Emailing Février 2015</b>
                                    <span class='btn-arrow small'>Voir</span>
                                </a>
                                <div class='bloc-overlay fixed-right'>
                                    <button class='btn-delete btn-no-text'>Supprimer ce message</button>
                                </div>
                            </li>
                            <li>
                                <a href='#'>
                                    <time datetime='2016-03-10'>10/03/16</time>
                                    <b>Emailing Février 2015</b>
                                    <span class='btn-arrow small'>Voir</span>
                                </a>
                                <div class='bloc-overlay fixed-right'>
                                    <button class='btn-delete btn-no-text'>Supprimer ce message</button>
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
