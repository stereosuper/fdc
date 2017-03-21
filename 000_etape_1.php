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
                    <img src='img/visuel-home.jpg' alt=''>
                </div>
            </div>

            <div class='container-small'>
                <div class='field field-job no-margin-bottom'>
                    <header class='field-header'>
                        <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                            <li property='itemListElement' typeof='ListItem'>
                                <h6><a property='item' typeof='WebPage' href='#'>
                                    <span property='name'>Accueil</span>
                                </a></h6>
                            </li><li property='itemListElement' typeof='ListItem'>
                                <h6><a property='item' typeof='WebPage' href='./'>
                                    <span property='name'>Boulangerie patisserie</span>
                                </a></h6>
                            </li>
                        </ul>
                        <h1>Personnel</h1>
                        <div class='rect'></div>
                    </header>
                </div>

                <div class='content-tabs content-tabs-job'>
                    <ul class='nav-tabs nav-tabs-indicator'>
                        <li class='active'>
                            <span>Demande</span>
                        </li><li>
                            <span>Critères</span>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <p>Bienvenue dans l’espace employeur/candidat de Radio Pétrin. Quelle est votre situation  ?</p>
                        <div class='wrapper-search'>
                            <div class='search'>
                                <header class='header-search'>
                                    <span class='step-search'>Je recherche un <span class='underline'>emploi</span></span>
                                </header>
                                <div class='content-search'>
                                    <div class='default'>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Curabitur turpis velit</strong>, rutrum eget lorem quis, rutrum consectetur metus. Cras eget facilisis nulla. Sed sollicitudin mauris laoreet, tempor orci nec, sollicitudin nunc. Fusce erat ante, elementum in lacus blandit, <strong>varius ultricies</strong> ligula. Aenean consequat nulla et.</p>
                                    </div>
                                    <div class='selected'>
                                        <p>Quelle est votre demande ?</p>
                                        <div class='container-btn-q-a'>
                                            <a href='#' class='btn-q-a'><span class='content-btn'>Consulter les <span class='underline'>offres</span></span></a>
                                            <a href='#' class='btn-q-a'><span class='content-btn'>Déposer une <span class='underline'>candidature</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='search'>
                                <header class='header-search'>
                                    <span class='step-search'>Je recherche un <span class='underline'>collaborateur</span></span>
                                </header>
                                <div class='content-search'>
                                    <div class='default'>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur turpis velit, rutrum eget lorem quis, rutrum consectetur metus. Cras eget facilisis nulla. Sed sollicitudin mauris laoreet, <strong>tempor orci nec</strong>, sollicitudin nunc. Fusce erat ante, elementum in lacus blandit, varius ultricies ligula. Aenean consequat nulla et elit ultricies suscipit. Sed lorem lorem, varius sed est vel, <strong>fringilla amet.</strong></p>
                                    </div>
                                    <div class='selected'>
                                        <p>Quelle est votre demande ?</p>
                                        <div class='container-btn-q-a'>
                                            <a href='#' class='btn-q-a'><span class='content-btn'>Consulter les <span class='underline'>candidatures</span></span></a>
                                            <a href='#' class='btn-q-a'><span class='content-btn'>Déposer une <span class='underline'>offre</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='wrapper-pub'>
                    <div class='pub'>
                        <div class='indic-pub'>— publicité —</div>
                        <img class='horizontale' src='img/pub-horizontale.jpg' srcset='img/pub-horizontale.jpg 1x, img/pub-horizontale@2x.jpg 2x' alt=''>
                        <img class='horizontale-small' src='img/pub-horizontale-small.jpg' srcset='img/pub-horizontale-small.jpg 1x, img/pub-horizontale-small@2x.jpg 2x' alt=''>
                    </div>
                </div>

                <div class='title-zone inline-b no-margin padding-grid'>À la une</div>
                <a href='#' class='btn-arrow small inline-b'>Toute l'actualité</a>
                <ul class='news'>
                    <li>
                        <article>
                            <a href='#'>
                                <span class='center-align article-date'>
                                    <span class='wrapper-alignment full-height'>
                                        <time class='content-align-middle' datetime='2016-03-25'><span class='day'>25</span> <span class='month'>mars</span> <span class='year'>2016</span></time>
                                    </span>
                                </span><!--
                                --><span class='article-desc'>
                                    <h4 class='small'>Actualité fiscale</h4>
                                    <h5>Crédit d’impôt : tout un art…</h5>
                                    <p>Une entreprise exerçant une activité de conseil en communication et en création publicitaire a sollicité le bénéfice… <span class='btn-arrow'>Lire la suite</span></p>
                                </span>
                            </a>
                        </article>
                    </li><!--
                    --><li>
                        <article>
                            <a href='#'>
                                <span class='center-align article-date'>
                                    <span class='wrapper-alignment full-height'>
                                        <time class='content-align-middle' datetime='2016-03-25'><span class='day'>25</span> <span class='month'>mars</span> <span class='year'>2016</span></time>
                                    </span>
                                </span><!--
                                --><span class='article-desc'>
                                    <h4 class='small'>Actualité sociale</h4>
                                    <h5>Des indemnités de préavis en cas de maladie&nbsp;?</h5>
                                    <p>Un employeur licencie un salarié pour motif économique. Cependant, ce salarié est en arrêt maladie… <span class='btn-arrow'>Lire la suite</span></p>
                                </span>
                            </a>
                        </article>
                    </li>
                </ul>
            </div>
        </main>
        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
