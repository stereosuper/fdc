<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Mon compte - Leads proposés</title>
        <?php include_once('includes/head.html'); ?>
    </head>
    
    <body>
        <div class='blur'>
            <?php include_once('includes/header.php'); ?>

            <main id='main' role='main'>
                <div class='container-small'>
                    <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                        <li property='itemListElement' typeof='ListItem'>
                            <a property='item' typeof='WebPage' href='./'>
                                <span property='name'>Accueil</span>
                            </a>
                        </li>
                    </ul>

                    <h1>Votre compte</h1>
                    <div class='content-tabs content-tabs-partner'>
                        <ul class='nav-tabs'>
                            <li>
                                <a href='#'>Vos informations</a>
                            </li><li class='active'>
                                <span>Les leads proposés</span>
                            </li><li>
                                <a href='#'>Les leads achetés</a>
                            </li><li>
                                <a href='#'>Votre entreprise</a>
                            </li><li>
                                <a href='#'>Correspondances</a>
                            <!-- </li><li class='tab-right tab-orange'>
                                <a href='#'>Ma sélection</a>
                                <span class='notif'>1</span>
                            </li> -->
                        </ul>
                        <div class='tab-content'>
                            <header class='tab-content-title'>
                                <h2 class='h1'>Vos leads
                                    <span class='notif'>1</span>
                                </h2>
                            </header>
                            <div class='tab-leads'>
                                <ul class='leads-title'>
                                    <li class='reference'>Références</li>
                                    <li class='date'>Date</li>
                                    <li class='activite'>Activité de l'acheteur/vendeur</li>
                                    <li class='ville'>Ville</li>
                                    <li class='apport'>Apport</li>
                                </ul>
                                <ul class='messages-list leads-list'>
                                    <li class='new'>
                                        <a href='#'>
                                            <span class='reference'>25548</span>
                                            <time datetime='2016-04-05'>05/04/16</time>
                                            <span class='activite'>
                                                <span>Boucherie-charcuterie-traiteur</span>
                                                <span class='btn-arrow'>Voir</span>
                                            </span>
                                            <span class='ville'>Nantes</span>
                                            <span class='price'>200&nbsp;000&nbsp;€</span>
                                            <button class='btn-delete btn-no-text'>Supprimer ce message</button>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='#'>
                                            <span class='reference'>156165</span>
                                            <time datetime='2016-03-10'>10/03/16</time>
                                            <span class='activite'>
                                                <span>Boucherie-charcuterie-traiteur</span>
                                                <span class='btn-arrow small'>Voir</span>
                                            </span> 
                                            <span class='ville'>Rezé</span>
                                            <span class='price'>150&nbsp;000&nbsp;€</span>
                                            <button class='btn-delete btn-no-text'>Supprimer ce message</button>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='#'>
                                            <span class='reference'>155</span>
                                            <time datetime='2016-03-10'>10/03/16</time>
                                            <span class='activite'>
                                                <span>Boulangerie-patiserie-salon de thé</span>
                                                <span class='btn-arrow small'>Voir</span>
                                            </span>
                                            <span class='ville'>Sablé-sur-sarthe</span>
                                            <span class='price'>20&nbsp;000&nbsp;€</span>
                                            <button class='btn-delete btn-no-text'>Supprimer ce message</button>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='#'>
                                            <span class='reference'>15615</span>
                                            <time datetime='2016-03-10'>10/03/16</time>
                                            <span class='activite'>
                                                <span>Boulangerie-patiserie-salon de thé</span>
                                                <span class='btn-arrow small'>Voir</span>
                                            </span>
                                            <span class='ville'>Le Croisic</span>
                                            <span class='price'>300&nbsp;000&nbsp;€</span>
                                            <button class='btn-delete btn-no-text'>Supprimer ce message</button>
                                        </a>
                                    </li>
                                </ul>
                                
                            </div>
                            <div class='leads-criteres'>
                                <h3 class='big-legend'>Vos critères</h3>
                                <div>
                                    <span>Zone géographique&nbsp;:</span><ul>
                                        <li>Loire-Atlantique</li>
                                        <li>Morbian</li>
                                        <li>Mayenne</li>
                                    </ul>
                                </div>
                                <div>
                                    <span>Activité&nbsp;:</span><ul>
                                        <li>Boucherie-charcuterie-traiteur</li>
                                        <li>Boulangerie-patisserie-salon de thé</li>
                                        <li>Boulangerie-patisserie-salon de thé</li>
                                    </ul>
                                </div>
                                <div>
                                    <span>Prix entre&nbsp;:</span><ul>
                                        <li>100&nbsp;000&nbsp;€</li>
                                        <li>500&nbsp;000&nbsp;€</li>
                                    </ul>
                                </div>
                            </div>
                            <div class='content-footer center-align'>
                                <p>Pour faire évoluer vos critères, merci de prendre contact avec Forum des Commerces au <b>02 40 85 18 17</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php include_once('includes/footer.html'); ?>
        </div>

        <div class='popup-content'>
            <div class='popup-container'>
                <div>
                    <h4 class='small'>Loire-Atlantique</h4>
                    <h2 class='h1'>Achat d'un Bar-brasserie</h2>
                    <p class='presentation-leads'>Vente de mon fond actuel, pour une nouvelle acquisition dans une zone similaire voir différente...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                </div>
                <ul class='eval-lead'>
                    <li>
                    <b>Maturité du projet</b>
                    <p>J'ai eu cette idée très récemment</p>
                    </li>
                    <li>
                    <b>Connaissance du metier</b>
                    <p>Je ne connais pas ou peu ce secteur d'activité</p>
                    </li>
                    <li>
                    <b>Connaissance du marcher</b>
                    <p>Je ne connais pas ou peu ce marché</p>
                    </li>
                    <li>
                    <b>Environnement personnel</b>
                    <p>Mes proches me déconseillent de me lancer dans mon projet</p>
                    </li>
                    <li>
                    <b>Parcours</b>
                    <p>Je n’ai ni diplômes ni expérience dans ce métier</p>
                    </li>
                    <li>
                    <b>Savoir faire</b>
                    <p>Je n'ai aucun de ces trois savoir faire</p>
                    </li>
                    <li>
                    <b>Revenus futurs</b>
                    <p>Praesent commodo cursus magna</p>
                    </li>
                </ul>
                <ul class='eval-lead'>
                    <li>
                    <b>Savoir être</b>
                    <p>Je manque de confiance en moi et je me décourage facilement</p>
                    </li>
                    <li>
                    <b>Ressources</b>
                    <p>Je n’ai pas de moyens  financiers</p>
                    </li>
                    <li>
                    <b>Moyens materiels</b>
                    <p>J’ai besoin d'un local mais je ne l'ai pas encore trouvé</p>
                    </li>
                    <li>
                    <b>Lancement de l’activité</b>
                    <p>Dans un an pas avant</p>
                    </li>
                    <li>
                    <b>Richesses humaines</b>
                    <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                    </li>
                </ul>
                <div class='content-footer marges'>
                    <b>Observations de Forum des Commerces</b>
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </p>
                </div>
                <a href="#" class='btn-block btn-orange'>Acheter ce lead</a>
                <a href="#" class='btn-delete'>Je ne suis pas interessé</a>
            </div>
        </div>

    </body>

</html>
