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
                            <span property='name'>Offres & tarifs</span>
                        </a>
                    </li>
                </ul>

                <h1>Acheter des crédits d'annonce</h1>
                
                <div class='content-tabs'>
                    <ul class='nav-tabs nav-tabs-indicator'>
                        <li class='active'>
                                <span>Identification</span>
                        </li><li>
                            <a href='#'>
                                <span>Récapitulatif</span>
                            </a>
                        </li><li>
                            <a href='#'>
                                <span>Paiement</span>
                            </a>
                        </li>
                    </ul>
                    <div class='field-content content-log'>
                        <div class='login-vente'>
                            <h3 class='title-simple-med'> Déjà inscrit ? Connectez vous :</h3>
                            <form action='#' method='post'>
                                <fieldset class='required no-asterisk'>
                                    <label for='account-login' class='block'>Identifiant</label>
                                    <input type='text' name='account-login' id='account-login' required>
                                </fieldset>
                                <fieldset class='required no-asterisk'>
                                    <label for='account-password' class='block'>Mot de passe</label>
                                    <input type='password' name='account-password' id='account-password' required>
                                    <div class='center-align info-form'>
                                        <a href='#' class='btn-simple'>Mot de passe oublié&nbsp;?</a>
                                    </div>
                                    <div class='wrapper-input-btn'>
                                        <button type='submit' class='btn-block medium'><span class='border'></span><span class='txt-btn'>Se connecter</span></button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class='sign-up'>
                            <h3 class='title-simple-med'>Pas encore inscrit ?</h3>
                            <p>Prix, alerte personnalisées, publication d’annonces... Chaque entrepreneur trouve son compte au Forum des Commerces !<br/><b>Rapide et gratuit, pas de spams.</b>
                            </p>
                            <div class='wrapper-input-btn'>
                                <button type='submit' class='btn-block medium'><span class='border'></span><span class='txt-btn'>Créer un compte</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
