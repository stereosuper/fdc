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
                            1<span>. Bienvenue</span>
                            </a>
                        </li><li class='active'>
                                2<span>. Connexion</span>
                        </li><li>
                            <a href='#'>
                                3<span>. Mon annonce</span>
                            </a>
                        </li><li>
                            <a href='#'>
                                4<span>. Paiement</span>
                            </a>
                        </li>
                    </ul>
                    <div class='content-sale-log'>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Vos informations </h2>
                            <button class='btn-arrow small' >Déjà inscrit ?</button>
                        </header>
                        <form action='#' method='post' id='formToEdit' class='sale-form'>
                            <fieldset class='required'>
                                <legend class='legend-next-fieldset'>Civilités</legend><fieldset class='inline-b'>
                                    <input type='radio' name='civilites' value='mme' id='mme' ><label for='mme' class='has-margin'>Mme</label>
                                    <input type='radio' name='civilites' value='mr' id='mr' checked ><label for='mr'>Mr</label>
                                </fieldset>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='nom'>
                                    Nom
                                </label><input type='text' name='nom' id='nom' value='Dus' required >
                            </fieldset>
                            <fieldset class='required'>
                                <label for='prenom'>
                                    Prénom
                                </label><input type='text' name='prenom' id='prenom' value='Jean-Claude' required >
                            </fieldset>
                            <fieldset>
                                <label for='societe'>
                                    Société
                                </label><input type='text' name='societe' id='societe' class='big' >
                                <span class='not-filled'>non renseigné</span>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='tel'>
                                    Téléphone
                                </label><input type='tel' name='tel' id='tel' value='0678675690' required pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" >
                            </fieldset>
                            <fieldset class='required'>
                                <label for='email'>
                                    Email
                                </label><input type='email' name='email' id='email' value='jc.dus@caramail.fr' required pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" >
                            </fieldset>
                            <fieldset>
                                <label for='adresse'>
                                    Adresse
                                </label><input type='text' name='adresse' id='adresse' class='bigger' >
                                <span class='not-filled'>non renseigné</span>
                            </fieldset>
                            <fieldset>
                                <label for='adresse2'>
                                    Compl. adresse
                                </label><input type='text' name='adresse2' id='adresse2' class='bigger' >
                                <span class='not-filled'>non renseigné</span>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='code'>
                                    Code postal
                                </label><input type='number' name='code' id='code' value='75000' min='0' max='99999' required >
                            </fieldset>
                            <fieldset>
                                <label for='ville'>
                                    Ville
                                </label><input type='text' name='ville' id='ville' class='big' >
                                <span class='not-filled'>non renseigné</span>
                                <fieldset class='block-right'>
                                    <input type='checkbox' name='adresse-facturation' id='adresse-facturation' value='1' checked ><label for='adresse-facturation'>Adresse de facturation identique <i>(pour les vendeurs)</i></label>
                                </fieldset>
                            </fieldset>
                            <fieldset class='block-optionnal block-optionnal-border hidden' data-name='adresse-facturation'>
                                <legend class='big-legend'>Adresse de facturation</legend>
                                <fieldset class='required'>
                                    <label for='nom-facturation'>
                                        Nom
                                    </label><input type='text' name='nom-facturation' id='nom-facturation' value='Dus' required disabled>
                                </fieldset>
                                <fieldset class='required'>
                                    <label for='prenom-facturation'>
                                        Prénom
                                    </label><input type='text' name='prenom-facturation' id='prenom-facturation' value='Jean-Claude' required disabled>
                                </fieldset>
                                <fieldset>
                                    <label for='societe-facturation'>
                                        Société
                                    </label><input type='text' name='societe-facturation' id='societe-facturation' class='big' disabled>
                                    <span class='not-filled'>non renseigné</span>
                                </fieldset>
                                <fieldset>
                                    <label for='adresse-facturation'>
                                        Adresse
                                    </label><input type='text' name='adresse-facturation' id='adresse-facturation' class='bigger' disabled>
                                    <span class='not-filled'>non renseigné</span>
                                </fieldset>
                                <fieldset>
                                    <label for='adresse2-facturation'>
                                        Compl. adresse
                                    </label><input type='text' name='adresse2-facturation' id='adresse2-facturation' class='bigger' disabled>
                                    <span class='not-filled'>non renseigné</span>
                                </fieldset>
                                <fieldset class='required'>
                                    <label for='code-facturation'>
                                        Code postal
                                    </label><input type='number' name='code-facturation' id='code-facturation' value='75000' min='0' max='99999' required disabled>
                                </fieldset>
                                <fieldset>
                                    <label for='ville'>
                                        Ville
                                    </label><input type='text' name='ville' id='ville' class='big' disabled>
                                    <span class='not-filled'>non renseigné</span>
                                </fieldset>
                            </fieldset>
                            <fieldset class='required block-pwd'>
                                <fieldset>
                                    <label for='mdp1'>
                                        Mot de passe
                                    </label><input type='password' name='mdp1' id='mdp1' value='motdepasse' required >
                                    <button class='btn-pen small hidden' id='editPwd' data-edit='Changer de mot de passe' data-cancel='Ne pas changer de mot de passe'>Changer de mot de passe</button>
                                </fieldset>
                                <fieldset class='block-pwd2'>
                                    <label for='mdp2'>
                                        Confirmer ce mot de passe
                                    </label><input type='password' name='mdp2' id='mdp2' value='motdepasse' required >
                                </fieldset>
                            </fieldset>
                            <button type='submit' class='btn-block huge '>Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
