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
                <div class='field field-job no-margin-bottom'>
                    <header class='field-header'>
                        <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                            <li property='itemListElement' typeof='ListItem'>
                                <h6><a property='item' typeof='WebPage' href='./'>
                                    <span property='name'>Accueil</span>
                                </a></h6>
                            </li>
                        </ul>
                        <h1>Personnel</h1>
                        <div class='rect'></div>
                    </header>
                </div>

                <div class='content-tabs content-tabs-job'>
                    <ul class='nav-tabs nav-tabs-indicator'>
                        <li >
                            <a href='#'>
                            <span>Demande</span>
                            </a>
                        </li><li class='active'>
                            <span>Critères</span>
                        </li>
                    </ul>
                    <div class='tab-content'>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Indiquez vos critères</h2>
                        </header>
                        <form action='#' method='post' id='formToEdit' class='sale-form'>
                            <fieldset class='required'>
                                <label for='poste'>
                                    Poste
                                </label><input type='text' name='poste' id='poste' value='' required >
                            </fieldset>
                            <fieldset>
                                <label for='ville'>
                                    Ville
                                </label><input type='text' name='ville' id='ville' >
                            </fieldset>
                            <fieldset>
                                <label for='mobilite'>
                                    Mobilité
                                </label>
                                <div class='huge objet select'>
                                    <select name='mobilite' id='mobilite'>
                                        <option value='indifferent' selected>Indifférent</option>
                                        <option value='option-2'>Option 2</option>
                                        <option value='option-3'>Option 3</option>
                                    </select>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class='legend-next-fieldset'>Type de contrat</legend><fieldset class='inline-b'>
                                    <input type='checkbox' name='type-contrat' id='cdi' value='cdi'><label class='has-margin-around' for='cdi'>CDI</label>
                                    <input type='checkbox' name='type-contrat' id='cdd' value='cdd'><label class='has-margin-around' for='cdd'>CDD</label>
                                    <input type='checkbox' name='type-contrat' id='apprentissage' value='apprentissage'><label class='has-margin-around' for='apprentissage'>Apprentissage</label>
                                    <input type='checkbox' name='type-contrat' id='interim' value='interim'><label class='has-margin-around' for='interim'>Intérim</label>
                                    <input type='checkbox' name='type-contrat' id='stage' value='stage'><label class='has-margin-around' for='stage'>Stage</label>
                                </fieldset>
                            </fieldset>
                            <fieldset>
                                <label for='disponibilite'>
                                    Disponibilité de
                                </label>
                                <div class='huge objet select'>
                                    <select name='disponibilite' id='disponibilite'>
                                        <option value='1-semaine' selected>1 semaine</option>
                                        <option value='option-2'>Option 2</option>
                                        <option value='option-3'>Option 3</option>
                                    </select>
                                </div>
                            </fieldset>
                            <button type='submit' class='btn-block huge btn-orange-job'><span class='border'></span><span class='txt-btn'>Lancer la recherche</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
