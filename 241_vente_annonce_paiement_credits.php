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
                            <ul class='paiement-list'>
                            <li>
                                <div class='recap'>
                                    <strong class='title-simple'>Pack de 1 crédit</strong>
                                    <a href='#' class='btn-cancel txt-middle'>supprimer</a>
                                    <p>Prix par annonce : 20€ HT  •  Crédits utilisables sans limite de durée</p>
                                    <span class='right alerts-price'>100 €</span>
                                </div>
                            </li>
                                <li>
                                    <div class='recap'>
                                        <strong class='title-simple'>Publication d'une annonce</strong>
                                        <p>Boulangerie - Pâtisserie - Salon de thé  •  6 mois  •  modifications illimités</p>
                                        <span class='right alerts-price'>1 crédit</span>
                                    </div>
                                </li>
                                <li>
                                    <div class='recap'>
                                        <strong class='title-simple'>Option <span class='orange-txt uppercase has-border'><span class='icon-flash'></span>&nbsp;Pole&nbsp;position</span> activée</strong>
                                        <a href='#' class='btn-cancel txt-middle'>désactiver</a>
                                        <p>Votre annonce apparaîtra en tête des résultats de recherche</p>
                                        <span class='right alerts-price'>1 crédit</span>
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

                        <div class='paiement-option'>
                            <div class='option option-left'>
                                <div class='paiement-type'>
                                    <input type='radio' name='paiement-type' value='cb' class='invisible' id='radio-cb' checked>
                                    <label class='title-simple' for='radio-cb'>
                                        <span class='visu-type icon-cb'></span>
                                        <strong>Paiement par carte bancaire</strong>
                                        Sécurisé via le Crédit Mutuel
                                    </label>
                                </div>
                            </div><!--
                            --><div class='option option-right'>
                                <div class='paiement-type'>
                                    <input type='radio' name='paiement-type' value='cheque' class='invisible' id='radio-cheque'>
                                    <label class='title-simple' for='radio-cheque'>
                                        <span class='visu-type icon-chq'></span>
                                        <strong>Paiement par chèque</strong>
                                        Commande validé à la récéption
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <fieldset class='footer'>
                                <input type='checkbox' name='cgv' id='cgv' value='1'><label class='medium' for='cgv'>En cochant cette case j'accepte et je reconnais avoir pris connaissance des <a href='#' class='btn-underlined'>conditions générales de vente</a></label>
                            </fieldset>
                        </div>
                        <div class='grey right-align wrapper-pay'>
                            <p>Il vous restera <span class='big-txt'>3 crédits</span> sur votre compte après la validation</p>
                            <button type='submit' class='btn-block btn-orange-sale huge btn-align-right'><span class='border'></span><span class='txt-btn'>Payer</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
