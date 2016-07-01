<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Forum des Commerces - Achat</title>
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
                    <li property='itemListElement' typeof='ListItem'>
                        <a property='item' typeof='WebPage' href='./'>
                            <span property='name'>Offres & tarifs</span>
                        </a>
                    </li>
                </ul>

                <h1>Acheter des crédits d'annonce</h1>
                
                <div class='content-tabs'>
                    <ul class='nav-tabs nav-tabs-indicator'>
                        <li >
                            <a href='#'>
                                <span>Identification</span>
                            </a>
                        </li><li class='active'>
                                <span>Récapitulatif</span>
                        </li><li>
                            <a href='#'>
                                <span>Paiement</span>
                            </a>
                        </li>
                    </ul>
                    <div class='content-sale-paiement field-content'>
                        <header class='tab-content-title no-padding'>
                            <h2 class='h1'>Récapitulatif </h2>
                        </header>

                        <div class='paiement-block small-margin-bottom'>
                            <ul class='paiement-list'>
                                <li>
                                    <div class='recap'>
                                        <strong class='title-simple'>Pack de 5 crédits</strong>
                                        <p>Annonces diffusées 6 mois après leurs parution; modifications illimités, statistiques.</p>
                                        <p>Date de valeur illimitée.</p>
                                        <span class='right alerts-price'>100 €</span>
                                    </div>
                                </li>
                                
                            </ul>
                            <div class='total'>
                                <ul>
                                    <li>
                                    <div class='recap'>
                                        <span>TVA</span>
                                        <span class='right'>20 €</span>
                                    </div>
                                    </li>
                                    <li class='border-top'>
                                    <div class='recap'>
                                        <span class='big-txt'>Total TTC</span>
                                        <span class='big-txt right alerts-price'>120 €</span>
                                    </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <fieldset class='footer'>
                                <input type='checkbox' name='cgv' id='cgv' value='1'><label class='medium' for='cgv'>En cochant cette case j'accepte et je reconnais avoir pris connaissance des <a href='#' class='btn-underlined'>conditions générales de vente</a></label>
                            </fieldset>
                        </div>
                        <button type='submit' class='btn-block huge btn-align-right'><span class='border'></span><span class='txt-btn'>Commander & Payer</span></button>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
