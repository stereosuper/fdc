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
                        </li><li class='active'>
                                <span>2. Connexion</span>
                        </li><li>
                            <a href='#'>
                                <span>3. Mon annonce</span>
                            </a>
                        </li><li>
                            <a href='#'>
                                <span>4. Paiement</span>
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
                                        <button type='submit' class='btn-block btn-orange-light medium'><span class='border'></span><span class='txt-btn'>Se connecter</span></button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class='sign-up'>
                            <h3 class='title-simple-med'>Pas encore inscrit ?</h3>
                            <p>Prix, alerte personnalisées, publication d’annonces... Chaque entrepreneur trouve son compte au Forum des Commerces !<br/><b>Rapide et gratuit, pas de spams.</b>
                            </p>
                            <div class='wrapper-input-btn'>
                                <button type='submit' class='btn-block btn-orange-light medium'><span class='border'></span><span class='txt-btn'>Créer un compte</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
