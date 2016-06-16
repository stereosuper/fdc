<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Forum des Commerces - Achat résultats de recherche</title>
        <?php include_once('includes/head.html'); ?>

        <link rel='prev' href='/page1.html'>
        <link rel='next' href='/page2.html'>
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
                <div class='field field-buy'>
                    <header class='field-header'>
                        <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                            <li property='itemListElement' typeof='ListItem'>
                                <h6><a property='item' typeof='WebPage' href='./'>
                                    <span property='name'>Accueil</span>
                                </a></h6>
                            </li>
                            <li property='itemListElement' typeof='ListItem'>
                                <h6><a property='item' typeof='WebPage' href='#'>
                                    <span property='name'>Achat de boulangerie - pâtisserie - salon de thé</span>
                                </a></h6>
                            </li>
                        </ul>
                        <h1>0 résultats</h1>
                        <div class='rect'></div>
                    </header>
                    <div class='field-content'>
                        <span>Votre recherche :</span>
                        <h2 class='title-grey-small'>Loire-Atlantique et départements voisins, max 400&nbsp;000&nbsp;€</h2>
                        <a href='#' class='btn-arrow-back small'>Modifier</a>
                        <a href='#' class='btn-alert small right'>Créer une alerte</a>
                        <div class='search-list-empty'>
                            <p><em><strong>Il n'y a pas de bien à vendre pour le moment correspondant à vos critères de recherche.</strong></em></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
