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
                        </li><li>
                                <span>4. Paiement</span>
                        </li>
                    </ul>
                    <div class='content-sale-paiement'>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Merci&nbsp;!</h2>
                        </header>

                        <div class='paiement-block'>
                            <p>Votre annonce a été publiéea <a class='btn-arrow small'>Voir l'annonce</a></p>
                        </div>
                    </div>
                    <div class='cercleMyForum adCercle'>
                             <div class='field-content'>
                                <ul class="littles-squares wave"><li></li><li></li><li></li><li></li><li></li><li></li></ul>
                                <header>
                                    <img src="./layoutImg/cercle/cercle.png" width="198" alt="Le Cercle MyForum"/>
                                    <h2 class='h1'>Facilitateur<br /> de tous vos projets</h2>
                                    <p>Pour réussir et vous simplifier la vie, faites-vous (bien) accompagner par un membre du Cercle&nbsp;!</p>
                                </header>
                                <ol class="full-circle wave">
                                    <li class="buy-step">Acheter</li><!--
                                    --><li class="finance-step">Financer</li><!--
                                    --><li class="ensure-step">Assurer</li><!--
                                    --><li class="equip-step">Équiper</li><!--
                                    --><li class="staff-step">Recruter</li><!--
                                    --><li class="manage-step">Gérer</li><!--
                                    --><li class="sell-step">Vendre</li>
                                </ol>
                                <div class="circle-text"><div>
                                    <p><img src="./layoutImg/cercle/serviceplus.png" width="104" alt="Service Gratuit" class="gratuit" /> Quel que soit votre besoin d'accompagnement, votre interlocuteur dédié du Cercle Forum des Commerces vous contacte, vous conseille et vous met en relation vers le bon expert. </p><a href="#" class='btn-block btn-yellow medium'><span class='border'></span><span class='txt-btn'>Me faire accompagner</span></a>
                                </div></div>
                            </div>
                        </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
