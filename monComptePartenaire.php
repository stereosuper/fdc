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

                <h1>Votre compte</h1>
                <div class='content-tabs'>
                    <ul class='nav-tabs'>
                        <li class='active'>
                            <a href='#'>Vos informations</a>
                        </li><li>
                            <span>Les leads proposés</span>
                        </li><li>
                            <a href='#'>Les leads achetés</a>
                            <span class='notif'>5</span>
                        </li><li>
                            <a href='#'>Votre entreprise</a>
                        </li><li>
                            <a href='#'>Correspondances</a>
                        <!-- </li><li class='tab-right tab-orange'>
                            <a href='#'>Ma sélection</a>
                            <span class='notif'>1</span>
                        </li> -->
                    </ul>
                    <div class='tab-content content-tabs-partner'>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Vos informations personnelles</h2>
                            <button class='btn-pen small' id='editForm' data-cancel='Annuler les modifications' data-edit='Modifier'>Modifier</button>
                        </header>
                        <form action='#' method='post' class='form-disabled' id='formToEdit'>
                            <fieldset class='required'>
                                <legend class='legend-next-fieldset'>Civilités</legend><fieldset class='inline-b'>
                                    <input type='radio' name='civilites' value='mme' id='mme' disabled><label for='mme' class='has-margin'>Mme</label>
                                    <input type='radio' name='civilites' value='mr' id='mr' checked disabled><label for='mr'>Mr</label>
                                </fieldset>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='nom'>
                                    Nom
                                </label><input type='text' name='nom' id='nom' value='Dus' required disabled>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='prenom'>
                                    Prénom
                                </label><input type='text' name='prenom' id='prenom' value='Jean-Claude' required disabled>
                            </fieldset>
                            <fieldset>
                                <label for='societe'>
                                    Société
                                </label><input type='text' name='societe' id='societe' class='big' disabled>
                                <span class='not-filled'>non renseigné</span>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='tel'>
                                    Téléphone
                                </label><input type='tel' name='tel' id='tel' value='0678675690' required pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" disabled>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='email'>
                                    Email
                                </label><input type='email' name='email' id='email' value='jc.dus@caramail.fr' required pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" disabled>
                            </fieldset>
                            <fieldset class='required block-pwd hidden'>
                                <fieldset>
                                    <label for='mdp1'>
                                        Mot de passe
                                    </label><input type='password' name='mdp1' id='mdp1' value='motdepasse' required disabled>
                                    <button class='btn-pen small hidden' id='editPwd' data-edit='Changer de mot de passe' data-cancel='Ne pas changer de mot de passe'>Changer de mot de passe</button>
                                </fieldset>
                                <fieldset class='block-pwd2'>
                                    <label for='mdp2'>
                                        Confirmer ce mot de passe
                                    </label><input type='password' name='mdp2' id='mdp2' value='motdepasse' required disabled>
                                </fieldset>
                            </fieldset>
                            <fieldset>
                                <legend class='big-legend'>Société</legend>
                                <fieldset>
                                    <label for='societe'>
                                        Société
                                    </label><input type='text' name='societe' id='societe' class='huge' disabled>
                                    <span class='not-filled'>non renseigné</span>
                                </fieldset>
                                <fieldset>
                                    <label for='adresse'>
                                        Adresse
                                    </label><input type='text' name='adresse' id='adresse' class='huge' disabled>
                                    <span class='not-filled'>non renseigné</span>
                                </fieldset>
                                <fieldset>
                                    <label for='adresse2'>
                                        Compl. adresse
                                    </label><input type='text' name='adresse2' id='adresse2' class='huge' disabled>
                                    <span class='not-filled'>non renseigné</span>
                                </fieldset>
                                <fieldset class='required'>
                                    <label for='code'>
                                        Code postal
                                    </label><input type='number' name='code' id='code' value='75000' min='0' max='99999' required disabled>
                                </fieldset>
                                <fieldset>
                                    <label for='ville'>
                                        Ville
                                    </label><input type='text' name='ville' id='ville' class='big' disabled>
                                    <span class='not-filled'>non renseigné</span>
                                    <fieldset class='block-right'>
                                        <input type='checkbox' name='adresse-facturation' id='adresse-facturation' value='1' checked disabled><label for='adresse-facturation'>Adresse de facturation identique <i>(pour les vendeurs)</i></label>
                                    </fieldset>
                                </fieldset>
                            </fieldset>
                            <fieldset class='block-optionnal hidden' data-name='adresse-facturation'>
                                <legend class='big-legend'>Facturation</legend>
                                <fieldset>
                                    <label for='societe'>
                                        Société
                                    </label><input type='text' name='societe' id='societe' class='huge' disabled>
                                    <span class='not-filled'>non renseigné</span>
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
                                    </label><input type='text' name='adresse-facturation' id='adresse-facturation' class='huge' disabled>
                                    <span class='not-filled'>non renseigné</span>
                                </fieldset>
                                <fieldset>
                                    <label for='adresse2-facturation'>
                                        Compl. adresse
                                    </label><input type='text' name='adresse2-facturation' id='adresse2-facturation' class='huge' disabled>
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
                                <fieldset class='required'>
                                    <label for='tel'>
                                        Téléphone
                                    </label><input type='tel' name='tel' id='tel' value='0678675690' required pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" disabled>
                                </fieldset>
                                <fieldset class='required'>
                                    <label for='email'>
                                        Email
                                    </label><input type='email' name='email' id='email' value='jc.dus@caramail.fr' required pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" disabled>
                                </fieldset>
                            </fieldset>
                            <button type='submit' class='btn-block huge hidden'><span class='border'></span><span class='txt-btn'>Valider</span></button>
                        </form>
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
