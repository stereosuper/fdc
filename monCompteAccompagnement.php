<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Mon compte - Infos</title>
        <?php include_once('includes/head.html'); ?>
    </head>

    <body>
        <?php include_once('includes/header.php'); ?>

        <main id='main' role='main'>
            <div class='container-small'>
                <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                    <li property='itemListElement' typeof='ListItem'>
                        <h6><a property='item' typeof='WebPage' href='./'>
                            <span property='name'>Accueil</span>
                        </a></h6>
                    </li>
                </ul>

                <h1>Mon compte</h1>
                <div class='content-tabs'>
                    <ul class='nav-tabs'>
                        <li>
                            <a href='#' class='btn-home'>Tableau de bord</a>
                        </li><li>
                            <span>Mes informations</span>
                        </li><li class='active'>
                            <a href='#'>Accompagnement</a>
                        </li><li>
                            <a href='#'>Alertes</a>
                            <span class='notif'>5</span>
                        </li><li>
                            <a href='#'>Ventes</a>
                        </li><li>
                            <a href='#'>Correspondance</a>
                        </li><li class='tab-right tab-orange'>
                            <a href='#'>Ma sélection</a>
                            <span class='notif'>1</span>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Mes besoins d'accompagnement</h2>
                            <button class='btn-pen small btn-pen-orange' id='editForm' data-cancel='Annuler les modifications' data-edit='Modifier'>Modifier</button>
                        </header>
                       <div>
                           <p>Le cercle FDC, c'est une équipe à votre disposition avec un interlocuteur dédié qui vous contacte, vous conseille et vous oriente gratuitement. Ne vous en privez pas !</p>
                           <div>
                               <h5>Acheter ma future entrerprise</h3>
                               <ul>
                                   <li>Recherche de la cible</li>
                                   <li>Statuts de mon entrerpise</li>
                                   <li>Business plan</li>
                                   <li>Comptabilité</li>
                               </ul>
                               <ul>
                                   <li>Formalités de création</li>
                                   <li>Financement</li>
                                   <li>Assurances</li>
                                   <li>Autres</li>
                               </ul>
                           </div>
                           <ul>
                               <li>Financer mon entreprise</li>
                               <li>Gérer mon entreprise</li>
                               <li>Assurer mon entreprise</li>
                               <li>Équiper mon entreprise</li>
                               <li>Recruter pour mon entreprise</li>
                               <li>Venre mon entreprise</li>
                           </ul>
                       </div>
                        <div class='content-footer hidden'>
                            <p>Si vous ne voulez plus faire partie du Forum des Commerces, nous en sommes désolés! Pour supprimer votre compte, <a href="#" class="btn-arrow small">cliquez ici</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
