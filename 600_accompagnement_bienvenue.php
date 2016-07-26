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

                <h1>Demande d'acccompagnement</h1>

                <div class='content-tabs cercleMyForum'>
                    <ul class='nav-tabs nav-tabs-indicator'>
                        <li class='active'>
                                <span>Bienvenue&nbsp;!</span>
                        </li><li>
                                <span>Vos besoins</span>
                        </li><li>
                                <span>Vos coordonnées</span>
                        </li>
                    </ul>
                    <div class='field-content'>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Faites-vous accompagner&nbsp;!</h2>
                        </header>
                        <style>
                            @media (min-width: 1079px){
                                .cercleMyForum ol.full-circle li:before {
                                    clip-path: url("#clipPolygon");
                                }
                            }
                            /* dirty for firefox */
                        </style>
                        <ol class="full-circle">
                            <li class="buy-step">Acheter</li><!--
                            --><li class="finance-step">Financer</li><!--
                            --><li class="ensure-step">Assurer</li><!--
                            --><li class="equip-step">Équiper</li><!--
                            --><li class="staff-step">Recruter</li><!--
                            --><li class="manage-step">Gérer</li><!--
                            --><li class="sell-step">Vendre</li>
                        </ol>
                        <svg width="0" height="0">
                            <defs>
                                <clipPath id="clipPolygon">
                                    <polygon points="68 0, 136 68, 68 136, 0 68" />
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="circle-text">
                            <img src="./layoutImg/cercle/cercle.png" width="198" alt="Le Cercle MyForum"/><!--
                            --><p>Pour réussir et vous simplifier la vie, quel que soit votre besoin d’accompagnement, un interlocuteur dédié du Cercle Forum des Commerces vous contacte, vous conseille et vous met en relation vers le bon expert.</p>
                            <a href="#" class='btn-block btn-yellow medium'><span class='border'></span><span class='txt-btn'>Me faire accompagner</span></a>
                        </div>
                    </div>
                    <div class="call-directly">
                        <p><b>Envie de vous simplifier la vie&nbsp;?</b><br />
                        Faites-vous rappeler directement par un expert !</p>
                        <form>
                            <input type="text" placeholder="Votre nom" />
                            <input type="tel" placeholder="Votre téléphone" />
                            <button type="submit" class='btn-block btn-yellow medium'><span class='border'></span><span class='txt-btn'>Ok</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
