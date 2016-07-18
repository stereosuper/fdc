<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Mon compte - Ventes</title>
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
                            <a href='#'>Mes informations</a>
                        </li><li>
                            <a href='#'>Accompagnement <span class='notif notif-nav'>nouveau</span></a>
                        </li><li>
                            <a href='#'>Alertes</a>
                            <span class='notif'>1</span>
                        </li><li class='active'>
                            <span>Ventes</span>
                        </li><li>
                            <a href='#'>Correspondance</a>
                        </li><li class='tab-right tab-orange'>
                            <a href='#'>Ma sélection</a>
                            <span class='notif'>1</span>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Mes ventes</h2>
                            <span class='right'><span>Vous disposez de <b>2 crédits</b> pour poster vos annonces.</span><a href='#' class='btn-arrow'>Acheter des crédits</a></span>
                        </header>
                        <ul class='sales-list'>
                            <li>
                                <a href='#'>
                                    <span class='img'><img src='img/sandwicherie.jpg' alt=''></span>
                                    <strong class='title-simple'>Terminal de cuisson, sandwicherie</strong>
                                    <span href='#' class='btn-arrow small'>Voir</span>
                                    <span class='p'>Dans ensemble commercial, à 20 min de SAINT NAZAIRE. Parking</span>
                                    <span class='right'>
                                        <span class='sales-views'><b>174</b> <span>vues</span></span>
                                        <button class='btn-pen btn-no-text'>Modifier cette vente</button>
                                        <button class='btn-delete btn-no-text'>Supprimer cette vente</button>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <span class='img'></span>
                                    <strong class='title-simple'>Boulangerie pâtisserie confiserie</strong>
                                    <span class='btn-arrow small'>Voir</span>
                                    <span class='p'>BOULANGERIE PATISSERIE PROCHE LITTORAL VENDEE Situé à quinze minutes des catacombes</span>
                                    <span class='right'>
                                        <span class='sales-views'><b>90</b> <span>vues</span></span>
                                        <button class='btn-pen btn-no-text'>Modifier cette vente</button>
                                        <button class='btn-delete btn-no-text'>Supprimer cette vente</button>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <span class='img'></span>
                                    <strong class='title-simple'>Boulangerie pâtisserie confiserie</strong>
                                    <span class='btn-arrow small'>Voir</span>
                                    <span class='p'>BOULANGERIE PATISSERIE PROCHE LITTORAL VENDEE Situé à quinze minutes des catacombes</span>
                                    <span class='right'>
                                        <span class='sales-views'><b>1</b> <span>vue</span></span>
                                        <button class='btn-pen btn-no-text'>Modifier cette vente</button>
                                        <button class='btn-delete btn-no-text'>Supprimer cette vente</button>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <footer class='tab-content-footer'>
                            <form action='#' method='POST'>
                                <label for='secteur' class='label-select'>Poster une nouvelle annonce dans le secteur :</label><div class='select'>
                                    <select name='secteur' id='secteur'>
                                        <option selected value=''>— Sélectionner le secteur</option>
                                        <option value='1'>Bar Tabac / PMU</option>
                                        <option value='2'>Bar / Brasserie</option>
                                        <option value='3'>Boucherie / Charcuterie / Traiteur</option>
                                        <option value='4'>Boulangerie / Pâtisserie / Salon de thé</option>
                                        <option value='5'>Boutique et Magasins</option>
                                        <option value='6'>Bureaux Locaux / Entrepôts</option>
                                        <option value='7'>Coiffure / Esthétique / Parfumerie</option>
                                        <option value='8'>Commerce / Alimentation</option>
                                        <option value='9'>Crêperie / Pizzeria</option>
                                        <option value='10'>Entreprise du Bâtiment</option>
                                        <option value='11'>Hôtel / Bureau</option>
                                        <option value='12'>Hôtel / Restaurant</option>
                                        <option value='13'>Murs Commerciaux</option>
                                        <option value='14'>Restaurant</option>
                                        <option value='15'>Restauration rapide</option>
                                        <option value='16'>Salon de thé</option>
                                        <option value='17'>Tabac Loto / Presse</option>
                                    </select>
                                </div>
                                <button type='submit' class='btn-block'><span class='border'></span><span class='txt-btn'>Ok</span></button>
                            </form>
                        </footer>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
