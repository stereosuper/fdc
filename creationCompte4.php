<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class='no-js lt-ie10'> <![endif]-->
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
                        </li><li>
                            <a href='creationCompte2.php'>2<span>. Mes informations</span></a>
                        </li><li>
                            <a href='creationCompte3.php'>3<span>. Je recherche...</span></a>
                        </li><li class='active'>
                            4<span>. Mes besoins</span>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <div class='tab-content-title'>
                            <h2 class='h1'>Mes besoins</h2>
                        </div>
                        <p class='small'>La vente d’une entreprise est exercice complexe et non dénué de risque. Pour maximiser les chances de succès de son projet, il est crucial d’être bien accompagné dès le début. Forum des Commerces a sélectionné pour vous des spécialistes de bar-tabac !</p>
                        <form action='#' method='post'>
                            <fieldset class='block-sub-fields'>
                                <input type='checkbox' name='equipe' id='equipe' value='1'><label for='equipe'>
                                    <b>Je souhaite complêter mon équipe d'expert. Pour m'accompagner&nbsp;:</b>
                                </label>
                                <div>
                                    <fieldset>
                                        <input type='checkbox' name='accompagnement[]' id='vente' value='vente'><label for='vente'>
                                            dans la vente de mon bar-tabac
                                        </label>
                                    </fieldset>
                                    <fieldset>
                                        <input type='checkbox' name='accompagnement[]' id='placement' value='placement'><label for='placement'>
                                            dans le placement du fruit de la vente de mon bar-tabac
                                        </label>
                                    </fieldset>
                                    <fieldset>
                                        <input type='checkbox' name='accompagnement[]' id='achat' value='achat'><label for='achat'>
                                            dans l'achat de mon futur bien
                                        </label>
                                    </fieldset>
                                    <fieldset>
                                        <input type='checkbox' name='accompagnement[]' id='autre' value='autre'><label for='autre' class='has-margin'>
                                            autre&nbsp;:
                                        </label><input type='text' name='autre-texte' class='small'>
                                    </fieldset>
                                </div>
                            </fieldset>
                            <fieldset class='block-sub-fields'>
                                <input type='checkbox' name='premium' id='premium' value='1'><label for='premium'>
                                    <b>Je souhaite souscrire au <span class='uppercase'>service premium</span>&nbsp;</b>: confier ma recherche à un expert du Forum des Commerces
                                </label>
                                <div>
                                    <fieldset class='required'>
                                        <label for='ville'>
                                            Ville principale
                                        </label><input type='text' name='ville' id='ville'>
                                    </fieldset>
                                    <fieldset class='required'>
                                        <label for='apport'>
                                            Apport
                                        </label><input type='number' name='apport' id='apport' min='0' class='price'>
                                        <b>€</b>
                                    </fieldset>
                                    <fieldset>
                                        <label for='remarques'>
                                            Remarques
                                        </label><textarea name='remarques' id='remarques'></textarea>
                                    </fieldset>
                                </div>
                            </fieldset>
                            <button type='submit' class='btn-block huge no-margin'>Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
