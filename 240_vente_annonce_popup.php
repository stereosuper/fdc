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
                            <p class="right-head"><i>Plusieurs annonces à publier&nbsp;?</i> <a href="#" class='btn-arrow small lb-credits open-lighbox'>Acheter des crédits</a></p>
                        </header>

                        <div class='paiement-block'>
                            <ul class='paiement-list'>
                                <li>
                                    <div class='recap'>
                                        <strong class='title-simple'>Publication d'une annonce</strong>
                                        <p>Boulangerie - Pâtisserie - Salon de thé  •  6 mois  •  modifications illimités</p>
                                        <span class='right alerts-price'>40 €</span>
                                    </div>
                                </li>
                                <li>
                                    <div class='recap'>
                                        <strong class='title-simple'>Option <span class='orange-txt uppercase has-border'><span class='icon-flash'></span>&nbsp;Pole&nbsp;position</span> activée</strong>
                                        <span class='btn-cancel'>désactiver</span>
                                        <p>Votre annonce apparaîtra en tête des résultats de recherche</p>
                                        <span class='right alerts-price'>40 €</span>
                                    </div>
                                </li>
                            </ul>
                            <div class='total'>
                                <ul>
                                    <li>
                                    <div class='recap'>
                                        <span>TVA</span>
                                        <span class='right'>16 €</span>
                                    </div>
                                    </li>
                                    <li class='border-top'>
                                    <div class='recap'>
                                        <span class='big-txt'>Total TTC</span>
                                        <span class='big-txt right alerts-price'>96 €</span>
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
                        <button type='submit' class='btn-block btn-orange-sale huge btn-align-right'><span class='border'></span><span class='txt-btn'>Payer</span></button>
                    </div>
                </div>
            </div>
        </main>
        <div id="lb" class="on">
            <div class="black-mask"></div>
            <button class="close-btn icon-cross"></button>
            <div class="lightbox-content">
                <div class="wrapper">
                    <div class='field field-sale'>
                        <header>
                            <h1>Sélectionner un pack de crédits</h1>
                        </header>
                    </div>
                    <div class='field-content'>
                        <table class='table-offres-tarifs'>
                            <tr>
                                <td rowspan='2' class='super-border dark-red big-pricing'>
                                    <a href='#'>
                                        <p class='super-huge'>1</p>
                                        <span class='undercover'>crédit</span>
                                        <p class='h1'>40&nbsp;€ HT</p>
                                        <p>Diffusion pendant <strong>6 mois</strong></p>
                                        <p>Modifiez votre annonce à tout moment</p>
                                        <p>Profitez de <strong>statistiques</strong> de consultation</p>
                                        <span class="btn-arrow plain">Acheter</span>
                                    </a>
                                </td>
                                <td colspan='3' class='no-border'>
                                    <p class='h1'>1 crédit = 1 annonce</p>
                                    <p>Vous souhaitez déposer un grand nombre d'annonces ?</p>
                                    <p><a href="#">Contactez nous</a> pour bénéficier de notre offre «no limit»</p>
                                </td>
                            </tr>
                            <tr>
                                <td class='super-border red'>
                                    <a href='#'>
                                        <p class='super-huge'>5</p>
                                        <span class='undercover'>crédits</span>
                                        <p class='h1'>100&nbsp;€ HT</p>
                                        <p>(20€/annonce)</p>
                                        <span class="btn-arrow plain">Acheter</span>
                                    </a>
                                </td>
                                <td class='super-border orange'>
                                    <a href='#'>
                                        <p class='super-huge'>10</p>
                                        <span class='undercover'>crédits</span>
                                        <p class='h1'>150&nbsp;€ HT</p>
                                        <p>(15€/annonce)</p>
                                        <span class="btn-arrow plain">Acheter</span>
                                    </a>
                                </td>
                                <td class='super-border orange-light'>
                                    <a href='#'>
                                        <p class='super-huge'>20</p>
                                        <span class='undercover'>crédits</span>
                                        <p class='h1'>250&nbsp;€ HT</p>
                                        <p>(10€/annonce)</p>
                                        <span class="btn-arrow plain">Acheter</span>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
