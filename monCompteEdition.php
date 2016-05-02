<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Mon compte - Infos</title>
        <?php include_once('includes/head.html'); ?>
    </head>

    <body>
        <?php include_once('includes/header.html'); ?>

        <main id='main' role='main'>
            <div class='container-small'>
                <ul class='breadcrumb'>
                    <li><a href='./'>Accueil</a></li>
                </ul>

                <h1>Mon compte</h1>
                <div class='content-tabs'>
                    <ul class='nav-tabs'>
                        <li>
                            <a href='creationCompte.php'>Tableau de bord</a>
                        </li><li class='active'>
                            <span>Mes informations</span>
                        </li><li>
                            <span>Alertes</span>
                            <span class='notif'>5</span>
                        </li><li>
                            <span>Ventes</span>
                        </li><li>
                            <span>Correspondances</span>
                        </li><li>
                            <span>Ma sélection</span>
                            <span class='notif'>1</span>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <div class='tab-content-title'>
                            <h2 class='h1'>Mes informations personnelles</h2>
                            <button class='btn-cancel small'>Annuler les modifications</button>
                        </div>
                        <form action='#' method='post'>
                            <fieldset class='required'>
                                <legend class='legend-next-fieldset'>Civilités</legend><fieldset class='inline-b'>
                                    <input type='radio' name='civilites' value='mme' id='mme'><label for='mme' class='has-margin'>Mme</label>
                                    <input type='radio' name='civilites' value='mr' id='mr' checked><label for='mr'>Mr</label>
                                </fieldset>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='nom'>
                                    Nom
                                </label><input type='text' name='nom' id='nom' value='Dus' required>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='prenom'>
                                    Prénom
                                </label><input type='text' name='prenom' id='prenom' value='Jean-Claude' required>
                            </fieldset>
                            <fieldset>
                                <label for='societe'>
                                    Société
                                </label><input type='text' name='societe' id='societe' class='big'>
                                <span class='hidden'>non renseigné</span>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='tel'>
                                    Téléphone
                                </label><input type='tel' name='tel' id='tel' value='06 78 67 56 90' required pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
                            </fieldset>
                            <fieldset class='required'>
                                <label for='email'>
                                    Email
                                </label><input type='email' name='email' id='email' value='jc.dus@caramail.fr' required pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?">
                            </fieldset>
                            <fieldset class='required block-pwd'>
                                <fieldset>
                                    <label for='mdp1'>
                                        Mot de passe
                                    </label><input type='password' name='mdp1' id='mdp1' value='motdepasse' disabled required>
                                    <button class='btn-pen small'>Changer de mot de passe</button>
                                </fieldset>
                                <fieldset class='hidden'>
                                    <label for='mdp2'>
                                        Confirmer ce mot de passe
                                    </label><input type='password' name='mdp2' id='mdp2' value='motdepasse' disabled required>
                                </fieldset>
                            </fieldset>
                            <fieldset>
                                <label for='adresse'>
                                    Adresse
                                </label><input type='text' name='adresse' id='adresse' class='huge'>
                                <span class='hidden'>non renseigné</span>
                            </fieldset>
                            <fieldset>
                                <label for='adresse2'>
                                    Compl. adresse
                                </label><input type='text' name='adresse2' id='adresse2' class='huge'>
                                <span class='hidden'>non renseigné</span>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='code'>
                                    Code postal
                                </label><input type='number' name='code' id='code' value='75000' min='0' max='99999' required>
                            </fieldset>
                            <fieldset>
                                <label for='ville'>
                                    Ville
                                </label><input type='text' name='ville' id='ville' class='big'>
                                <span class='hidden'>non renseigné</span>
                                <fieldset class='block-right'>
                                    <input type='checkbox' name='adresse-facturation' id='adresse-facturation' value='1' checked><label for='adresse-facturation'>Adresse de facturation identique</label>
                                </fieldset>
                            </fieldset>
                            <fieldset class='block-sub-fields block-right'>
                                <legend>Accompagnement</legend>
                                <input type='checkbox' name='equipe' id='equipe' value='1' checked><label for='equipe'>
                                    <b>Je souhaite complêter mon équipe d'expert. Pour m'accompagner&nbsp;:</b>
                                </label>
                                <div>
                                    <fieldset>
                                        <input type='checkbox' name='accompagnement[]' id='vente' value='vente' checked><label for='vente'>
                                            dans la vente de mon bar-tabac
                                        </label>
                                    </fieldset>
                                    <fieldset>
                                        <input type='checkbox' name='accompagnement[]' id='placement' value='placement' checked><label for='placement'>
                                            dans le placement du fruit de la vente de mon bar-tabac
                                        </label>
                                    </fieldset>
                                    <fieldset>
                                        <input type='checkbox' name='accompagnement[]' id='achat' value='achat'><label for='achat'>
                                            dans l'achat de mon futur bien
                                        </label>
                                    </fieldset>
                                    <fieldset>
                                        <input type='checkbox' name='accompagnement[]' id='autre' value='autre' checked><label for='autre' class='has-margin'>
                                            autre&nbsp;:
                                        </label><input type='text' name='autre-texte' class='small' value='que-sais-je'>
                                    </fieldset>
                                </div>
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
