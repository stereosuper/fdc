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
                            <span property='name'>Offres et tarifs</span>
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
                    <div class='content-sale-paiement content-log field-content'>
                        <header class='tab-content-title no-padding'>
                            <h2 class='h1'>Choix du mode de paiement</h2>
                        </header>

                        <div class='paiement-option big-margin-bottom'>
                        <p>Le montant total à payer sera de <strong>120&nbsp;€ TTC</strong></p>
                            <div class='option option-left'>
                                <div class='paiement-type'>
                                    <input type='radio' name='paiement-type' value='cb' class='invisible red' id='radio-cb' checked>
                                    <label class='title-simple' for='radio-cb'>
                                        <span class='visu-type icon-cb'></span>
                                        <strong>Paiement par carte bancaire</strong>
                                        Sécurisé via le Crédit Mutuel
                                    </label>
                                </div>
                            </div><!--
                            --><div class='option option-right'>
                                <div class='paiement-type'>
                                    <input type='radio' name='paiement-type' value='cheque' class='invisible red' id='radio-cheque'>
                                    <label class='title-simple' for='radio-cheque'>
                                        <span class='visu-type icon-chq'></span>
                                        <strong>Paiement par chèque</strong>
                                        Commande validé à la récéption
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button type='submit' class='btn-block huge btn-align-right'><span class='border'></span><span class='txt-btn'>Valider</span></button>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
