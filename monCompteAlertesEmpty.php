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
                        <a property='item' typeof='WebPage' href='./'>
                            <span property='name'>Accueil</span>
                        </a>
                    </li>
                </ul>

                <h1>Mon compte</h1>
                <div class='content-tabs'>
                    <ul class='nav-tabs'>
                        <li>
                            <a href='#'>Tableau de bord</a>
                        </li><li>
                            <a href='#'>Mes informations</a>
                        </li><li class='active'>
                            <span>Alertes</span>
                        </li><li>
                            <a href='#'>Ventes</a>
                        </li><li>
                            <a href='#'>Correspondances</a>
                        </li><li class='tab-right tab-orange'>
                            <a href='#'>Ma sélection</a>
                            <span class='notif'>1</span>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <header class='tab-content-title has-btn'>
                            <h2 class='h1'>Mes alertes</h2>
                        </header>
                        <a href='alerteEdition.php' class='btn-block btn-plus'>Créer une nouvelle alerte</a>
                        <div class='alerts-block'>
                            <p><i class='text-grey'>Vous n'avez pas encore crée d'alertes.</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
