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
                <div class='field field-sale'>
                    <header class='field-header'>
                        <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                            <li property='itemListElement' typeof='ListItem'>
                                <h6><a property='item' typeof='WebPage' href='./'>
                                   <span property='name'>Accueil</span>
                                </a></h6>
                            </li>
                        </ul>
                        <h1>Vente de boulangerie - pâtisserie - salon de thé</h1>
                        <div class='rect'></div>
                    </header>
                </div>

                <div class='content-tabs content-tabs-sale'>
                    <ul class='nav-tabs nav-tabs-indicator'>
                        <li >
                            <a href='#'>
                            <span>1. Bienvenue</span>
                            </a>
                        </li><li >
                                <a href='#'>
                                <span>2. Connexion</span>
                                </a>
                        </li><li>
                            <a href='#'>
                                <span>3. Mon annonce</span>
                            </a>
                        </li><li class='active'>
                                <span>4. Paiement</span>
                        </li>
                    </ul>
                    <div class='content-sale-paiement'>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Paiement </h2>
                        </header>

                        <div class='paiement-block'>
                            <div class='credit'>
                                <p>Vous disposer de <span class='big-txt'>4 crédits</span> sur votre comtpe.</p>
                                <a href='#' class='btn-arrow small'>Acheter des crédits</a>
                            </div>
                            <ul class='paiement-list'>
                                <li>
                                    <div class='recap'>
                                        <strong class='title-simple'>Publication d'une annonce</strong>
                                        <p>Boulangerie - Pâtisserie - Salon de thé  •  6 mois  •  modifications illimités</p>
                                        <span class='right alerts-price'>1 crédit</span>
                                    </div>
                                </li>
                                <li>
                                    <div class='recap'>
                                        <strong class='title-simple grey'>Option <span class='orange-txt uppercase has-border grey-border '><span class='icon-flash grey'></span>&nbsp;Pole&nbsp;position</span> activée</strong>
                                        <a href='#' class='btn-arrow small txt-middle'>Activer - 1 crédit</a>
                                        <p class='grey'>Cette option fait apparaitre votre annonce en tête des résultats de recherche</p>
                                        <span class='right alerts-price'>0 crédit</span>
                                    </div>
                                </li>
                            </ul>
                            <div class='total'>
                                <ul>
                                    <li class='border-top'>
                                    <div class='recap'>
                                        <span class='big-txt'>Total</span>
                                        <span class='big-txt right alerts-price'>1 crédit</span>
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
                        <div class='grey right-align wrapper-pay'>
                            <p>Il vous restera <span class='big-txt'>3 crédits</span> sur votre compte après la validation</p>
                            <button type='submit' class='btn-block btn-orange-sale huge btn-align-right'><span class='border'></span><span class='txt-btn'>Valider</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>
<
</html>
