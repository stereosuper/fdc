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
                        <li><a href="#"><span>Bienvenue&nbsp;!</span></a>
                        </li><li>
                                <a href="#"><span>Vos besoins</span></a>
                        </li><li class='active'>
                                <span>Vos coordonnées</span>
                        </li>
                    </ul>
                    <div class='content-sale-log field-content'>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Vos informations </h2>
                            <button class='btn-arrow small align-top' >Déjà inscrit ?</button>
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
                                </label><input type='text' name='nom' id='nom' value='' required >
                            </fieldset>
                            <fieldset class='required'>
                                <label for='prenom'>
                                    Prénom
                                </label><input type='text' name='prenom' id='prenom' value='' required >
                            </fieldset>
                            <fieldset>
                                <label for='societe'>
                                    Société
                                </label><input type='text' name='societe' id='societe' class='big' >
                            </fieldset>
                            <fieldset class='required'>
                                <label for='tel'>
                                    Téléphone
                                </label><input type='tel' name='tel' id='tel' value='' required pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" >
                            </fieldset>
                            <fieldset class='required'>
                                <label for='email'>
                                    Email
                                </label><input type='email' name='email' id='email' value='' required pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" >
                            </fieldset>
                            <fieldset>
                                <label for='adresse'>
                                    Adresse
                                </label><input type='text' name='adresse' id='adresse' class='bigger' >
                            </fieldset>
                            <fieldset>
                                <label for='adresse2'>
                                    Compl. adresse
                                </label><input type='text' name='adresse2' id='adresse2' class='bigger' >
                            </fieldset>
                            <fieldset class='required'>
                                <label for='code'>
                                    Code postal
                                </label><input type='number' name='code' id='code' value='' min='0' max='99999' required >
                            </fieldset>
                            <fieldset>
                                <label for='ville'>
                                    Ville
                                </label><input type='text' name='ville' id='ville' class='big' >
                            </fieldset>
                            <fieldset class='required block-pwd'>
                                <fieldset>
                                    <label for='mdp1'>
                                        Mot de passe
                                    </label><input type='password' name='mdp1' id='mdp1' value='' required >
                                    <button class='btn-pen small hidden' id='editPwd' data-edit='Changer de mot de passe' data-cancel='Ne pas changer de mot de passe'>Changer de mot de passe</button>
                                </fieldset>
                                <fieldset class='block-pwd2'>
                                    <label for='mdp2'>
                                        Confirmer ce mot de passe
                                    </label><input type='password' name='mdp2' id='mdp2' value='' required >
                                </fieldset>
                            </fieldset>
                            <button type='submit' class='btn-block huge btn-orange-light'><span class='border'></span><span class='txt-btn'>Valider</span></button>
                        </form>
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
