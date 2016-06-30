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
                            <div class='credit'>
                                <span>Vous disposer de <span class='big-txt'>4 crédits</span> sur votre comtpe.</span>
                                <span class='btn-arrow small btn-blue'>Acheter des crédits</span>
                            </div>
                            <ul class='paiement-list'>
                                <li>
                                    <div class='recap'>
                                        <strong class='title-simple'>Publication d'une annonce</strong>
                                        <span class='p'>Boulangerie - Pâtisserie - Salon de thé  •  6 mois  •  modifications illimités</span>
                                        <span class='right alerts-price'>1 crédit</span>
                                    </div>
                                </li>
                                <li>
                                    <div class='recap'>
                                        <strong class='title-simple grey'>Option <span class='orange-txt uppercase border grey-border '><span class='icon-flash grey'></span>&nbsp;Pole&nbsp;position</span> activée</strong>
                                        <span class='btn-arrow small btn-blue txt-middle'>Activer - 1 crédit</span>
                                        <span class='p grey'>Cette option fait apparaitre votre annonce en tête des résultats de recherche</span>
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
<
</html>
