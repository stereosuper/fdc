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
                    <img src='img/visuel-home.jpg'>
                </div>
            </div>

            <div class='container-small'>
                <div class='field field-sale'>
                    <header class='field-header'>
                        <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                            <li property='itemListElement' typeof='ListItem'>
                                <a property='item' typeof='WebPage' href='./'>
                                    <span property='name'>Accueil</span>
                                </a>
                            </li>
                        </ul>
                        <h1>Vente de boulangerie - pâtisserie - salon de thé</h1>
                        <div class='rect'></div>
                    </header>
                </div>

                <div class='content-tabs content-tabs-sale'>
                    <ul class='nav-tabs nav-tabs-indicator'>
                        <li class='active'>
                            1<span>. Bienvenue</span>
                        </li><li>
                            <a href='#'>
                                2<span>. Connexion</span>
                            </a>
                        </li><li>
                            <a href='#'>
                                3<span>. Mon annonce</span>
                            </a>
                        </li><li>
                            <a href='#'>
                                4<span>. Paiement</span>
                            </a>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <div class='tab-content-title'>
                            <h2 class='h1'>Déposer une annonce</h2>
                        </div>
                        <p>
                            Vous souhaitez trouver rapidement un acquéreur pour votre bar brasserie ?<br>
                            Vous êtes au bon endroit !
                        </p>
                        <ul>
                            <li>Diffusion pendant <strong>6 mois</strong></li>
                            <li><strong>Modifiez votre annonce</strong> quand vous le souhaitez</li>
                            <li>Profitez de <strong>statistiques</strong> de consultation</li>
                        </ul>
                        <a href='#' class='btn-block huge right'>Déposer mon annonce</a>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
