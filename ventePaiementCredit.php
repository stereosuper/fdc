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
                         @           <span property='name'>Accueil</span>
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
                            1<span>. Bienvenue</span>
                            </a>
                        </li><li >
                                <a href='#'>
                                2<span>. Connexion</span>
                                </a>
                        </li><li>
                            <a href='#'>
                                3<span>. Mon annonce</span>
                            </a>
                        </li><li class='active'>
                                4<span>. Paiement</span>
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
                                    <span class='btn-plus small btn-blue txt-middle'>Pack de 5 crédits - 40&nbsp;€</span><span class='btn-plus small btn-blue txt-middle'>Pack de 10 crédits - 150&nbsp;€</span>
                                    <span class='p'>Prix par annonce : 20€ HT  •  Crédits utilisables sans limite de durée</span>
                                    <span class='right alerts-price'>100 €</span>
                                </div>
                            </li>
                                <li>
                                    <div class='recap'>
                                        <strong class='title-simple'>Publication d'une annonce</strong>
                                        <span class='p'>Boulangerie - Pâtisserie - Salon de thé  •  6 mois  •  modifications illimités</span>
                                        <span class='right alerts-price'>1 crédit</span>
                                    </div>
                                </li>
                                <li>
                                    <div class='recap'>
                                        <strong class='title-simple'>Option <span class='orange-txt uppercase has-border'><span class='icon-flash'></span>&nbsp;Pole&nbsp;position</span> activée</strong>
                                        <span class='btn-cancel btn-blue txt-middle'>désactiver</span>
                                        <span class='p'>Votre annonce apparaîtra en tête des résultats de recherche</span>
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
                            <div class='option option-left check'>
                                <div class='paiement-txt'>
                                    <input type="checkbox" id="checkbox" />
                                    <label class='title-simple'>Paiement par carte bancaire</label>
                                    <label class='p'>Sécurisé via le Crédit Mutuel</label>
                                    <span class='icon-cb'></span>
                                </div>
                            </div>
                            <div class='option option-right unchecked'>
                                <div class='paiement-txt'>
                                    <input type="checkbox" id="checkbox" />
                                    <label class='title-simple'>Paiement par chèque</label>
                                    <label class='p'>Commande validé à la récéption</label>
                                    <span class='icon-chq'></span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <fieldset>
                                <input type='checkbox' name='cgv' id='cgv' value='1' checked><label for='cgv'>En cochant cette case j'accepte et je reconnais avoir pris connaissance des <a>conditions générales de vente</a></label>

                            </fieldset>
                        </div>
                        <div class='grey'>
                            <span>Il vous restera <span class='big-txt'>3 crédits</span> sur votre compte après la validation</span>
                            <button type='submit' class='btn-block huge btn-align-right'>Valider</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
