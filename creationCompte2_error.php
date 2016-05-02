<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Créer mon compte - Infos</title>
        <?php include_once('includes/head.html'); ?>
    </head>

    <body>
        <?php include_once('includes/header.html'); ?>

        <main id='main' role='main'>
            <div class='container-small'>
                <ul class='breadcrumb'>
                    <li><a href='./'>Accueil</a></li>
                </ul>

                <h1>Créer mon compte</h1>
                <div class='content-tabs'>
                    <ul class='nav-tabs nav-tabs-indicator'>
                        <li>
                            <a href='creationCompte.php'>1<span>. Bienvenue !</span></a>
                        </li><li class='active'>
                            2<span>. Mes informations</span>
                        </li><li>
                            3<span>. Je recherche...</span>
                        </li><li>
                            4<span>. Mes besoins</span>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <div class='tab-content-title'>
                            <h2 class='h1'>Mes informations</h2>
                            <a href='#' class='btn-arrow small'>Déja inscrit ?</a>
                        </div>
                        <form action='#' method='post'>
                            <p class='p-error'>Le formulaire comporte des erreurs et n'a pas pu être envoyé.</p>
                            <fieldset class='required error'>
                                <legend class='legend-next-fieldset'>Civilités</legend><fieldset class='inline-b'>
                                    <input type='radio' name='civilites' id='mme'><label for='mme'>Mme</label>
                                    <input type='radio' name='civilites' id='mr'><label for='mr'>Mr</label>
                                </fieldset>
                                <p class='label-error'>Merci de sélectionner un choix.</p>
                            </fieldset>
                            <fieldset class='required error'>
                                <label for='nom'>
                                    Nom
                                </label><input type='text' name='nom' id='nom' required>
                                <p class='label-error'>Merci de compléter ce champ.</p>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='prenom'>
                                    Prénom
                                </label><input type='text' name='prenom' id='prenom' required value='Eli'>
                            </fieldset>
                            <fieldset>
                                <label for='societe'>
                                    Société
                                </label><input type='text' name='societe' id='societe' class='big' value='Stereosuper'>
                            </fieldset>
                            <fieldset class='required error'>
                                <label for='tel'>
                                    Téléphone
                                </label><input type='tel' name='tel' id='tel' required pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
                                <p class='label-error'>Le numéro de téléphone est invalide.</p>
                            </fieldset>
                            <fieldset class='required error'>
                                <label for='email'>
                                    Email
                                </label><input type='email' name='email' id='email' required pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?">
                                <p class='label-error'>L'adresse email est invalide.</p>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='code'>
                                    Code postal
                                </label><input type='number' name='code' id='code' min='0' max='99999' required value='44000'>
                            </fieldset>
                            <fieldset class='required block-pwd'>
                                <fieldset class='error'>
                                    <label for='mdp1'>
                                        Mot de passe
                                    </label><input type='password' name='mdp1' id='mdp1' required>
                                    <p class='label-error'>Merci de compléter ce champ.</p>
                                </fieldset>
                                <fieldset class='error'>
                                    <label for='mdp2'>
                                        Confirmer ce mot de passe
                                    </label><input type='password' name='mdp2' id='mdp2' required>
                                    <p class='label-error'>Merci de compléter ce champ.</p>
                                </fieldset>
                            </fieldset>
                            <button type='submit' class='btn-block huge'>Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
