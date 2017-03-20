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
                        <li >
                            <a href='#'>
                            <span>Demande</span>
                            </a>
                        </li><li class='active'>
                            <span>Critères</span>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Indiquez vos critères</h2>
                        </header>
                        <form action='#' method='post' id='formToEdit' class='sale-form'>
                            <fieldset class='required'>
                                <label for='poste'>
                                    Poste
                                </label><input type='text' class='med' name='poste' id='poste' placeholder='Boulanger' value='' required>
                            </fieldset>
                            <fieldset>
                                <label for='ville'>
                                    Ville
                                </label><input type='text' name='ville' placeholder='Nantes (44000)' id='ville' >
                            </fieldset>
                            <fieldset>
                                <label for='mobilite'>
                                    Mobilité
                                </label><div class='select medium'>
                                    <select name='mobilite' id='mobilite'>
                                        <option value='indifferent' selected>Indifférent</option>
                                        <option value='option-2'>Option 2</option>
                                        <option value='option-3'>Option 3</option>
                                    </select>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class='legend-next-fieldset'>Type de contrat</legend><fieldset class='inline-b'>
                                    <input type='checkbox' name='type-contrat' id='cdi' value='cdi'><label class='has-margin-around' for='cdi'>CDI</label>
                                    <input type='checkbox' name='type-contrat' id='cdd' value='cdd'><label class='has-margin-around' for='cdd'>CDD</label>
                                    <input type='checkbox' name='type-contrat' id='apprentissage' value='apprentissage'><label class='has-margin-around' for='apprentissage'>Apprentissage</label>
                                    <input type='checkbox' name='type-contrat' id='interim' value='interim'><label class='has-margin-around' for='interim'>Intérim</label>
                                    <input type='checkbox' name='type-contrat' id='stage' value='stage'><label class='has-margin-around' for='stage'>Stage</label>
                                </fieldset>
                            </fieldset>
                            <fieldset>
                                <label for='disponibilite'>
                                    Disponibilité de
                                </label><div class='select small'>
                                    <select name='disponibilite' id='disponibilite'>
                                        <option value='1-semaine' selected>1 semaine</option>
                                        <option value='option-2'>Option 2</option>
                                        <option value='option-3'>Option 3</option>
                                    </select>
                                </div>
                            </fieldset>
                            <button type='submit' class='btn-block huge btn-orange-job big-margin-top'><span class='border'></span><span class='txt-btn'>Lancer la recherche</span></button>
                        </form>
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
        <div class='wrapper-pub floating-pub left-side'>
            <div class='pub'>
                <div class='indic-pub'>— publicité —</div>
                <a href='#'>
                    <img class='verticale' src='img/pub-verticale.jpg' srcset='img/pub-verticale.jpg 1x, img/pub-verticale@2x.jpg 2x' alt=''>
                    <img class='horizontale' src='img/pub-horizontale.jpg' srcset='img/pub-horizontale.jpg 1x, img/pub-horizontale@2x.jpg 2x' alt=''>
                    <img class='horizontale-small' src='img/pub-horizontale-small.jpg' srcset='img/pub-horizontale-small.jpg 1x, img/pub-horizontale-small@2x.jpg 2x' alt=''>
                </a>
            </div>
        </div>
        <div class='wrapper-pub floating-pub right-side'>
            <div class='pub'>
                <div class='indic-pub'>— publicité —</div>
                <a href='#'>
                    <img class='verticale' src='img/pub-verticale.jpg' srcset='img/pub-verticale.jpg 1x, img/pub-verticale@2x.jpg 2x' alt=''>
                    <img class='horizontale' src='img/pub-horizontale.jpg' srcset='img/pub-horizontale.jpg 1x, img/pub-horizontale@2x.jpg 2x' alt=''>
                    <img class='horizontale-small' src='img/pub-horizontale-small.jpg' srcset='img/pub-horizontale-small.jpg 1x, img/pub-horizontale-small@2x.jpg 2x' alt=''>
                </a>
            </div>
        </div>
        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
