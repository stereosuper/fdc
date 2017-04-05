<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title></title>
        <?php include_once('includes/head_autocomplete.html'); ?>
    </head>

    <body class='dashboard'>
        <?php include_once('includes/header.php'); ?>

        <main id='main' role='main'>
            <div class='container-small'>
                <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                    <li property='itemListElement' typeof='ListItem'>
                        <h6><a property='item' typeof='WebPage' href='#'>
                            <span property='name'>Accueil</span>
                        </a></h6>
                    </li><li property='itemListElement' typeof='ListItem'>
                        <h6><a property='item' typeof='WebPage' href='./'>
                            <span property='name'>Boulangerie patisserie</span>
                        </a></h6>
                    </li>
                </ul>
                <h1>150 Candidats</h1>
                <div class='wrapper-jobs'>
                    <header class='header-jobs'>
                        <ul class='filters-team'>
                            <li>
                                Poste : <strong>Boulanger / Patissier</strong>
                            </li>
                            <li>
                                Ville : <strong>Nantes (44000)</strong>
                            </li>
                            <li>
                                Mobilité : <strong>Indifférent</strong>
                            </li>
                            <li>
                                Disponibilité : <strong>1 semaine</strong>
                            </li>
                            <li>
                                <a href='#' class='btn-txt showHideFilters' id='btn-filters'>Modifier</a>
                                <a href='#' class='btn-txt showHideFilters' id='btn-valid-filters'>Ok</a>
                            </li>
                        </ul>
                        <div class='wrapper-form-jobs'>
                            <form action='#' method='post' class='applicant-form'>
                                <fieldset class='size1'>
                                    <label class='size1' for='poste'>
                                        Poste
                                    </label><input type='text' name='poste' id='poste' placeholder='Boulanger' class='med autocomplete jobs' value='' required>
                                </fieldset>
                                <fieldset class='size1'>
                                    <label class='size3' for='ville'>
                                        Ville
                                    </label><input type='text' name='ville' placeholder='Nantes (44000)' class='autocomplete cities' id='ville' >
                                </fieldset>
                                <fieldset class='small-margin'>
                                    <legend class='legend-next-fieldset size1'>Type de contrat</legend><fieldset class='inline-b'>
                                        <input type='checkbox' name='type-contrat' id='cdi' value='cdi'><label class='has-margin-around' for='cdi'>CDI</label>
                                        <input type='checkbox' name='type-contrat' id='cdd' value='cdd'><label class='has-margin-around' for='cdd'>CDD</label>
                                        <input type='checkbox' name='type-contrat' id='apprentissage' value='apprentissage'><label class='has-margin-around' for='apprentissage'>Apprentissage</label>
                                        <input type='checkbox' name='type-contrat' id='interim' value='interim'><label class='has-margin-around' for='interim'>Intérim</label>
                                        <input type='checkbox' name='type-contrat' id='stage' value='stage'><label class='has-margin-around' for='stage'>Stage</label>
                                    </fieldset>
                                </fieldset>
                                <fieldset>
                                    <label class='size2' for='disponibilite'>
                                        Disponibilité
                                    </label><div class='select small'>
                                        <select name='disponibilite' id='disponibilite'>
                                            <option value='1-semaine' selected>1 semaine</option>
                                            <option value='option-2'>Option 2</option>
                                            <option value='option-3'>Option 3</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <label class='size3' for='mobilite'>
                                        Mobilité
                                    </label><div class='select small'>
                                        <select name='mobilite' id='mobilite'>
                                            <option value='indifferent' selected>Indifférent</option>
                                            <option value='option-2'>Option 2</option>
                                            <option value='option-3'>Option 3</option>
                                        </select>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </header>
                    <div class='content-jobs'>
                        <ul class='list-cards'>
                            <li class='card'>
                                <a href='#' class='cancel-invalid icon-cross-big'></a>
                                <header>
                                    <span class='diamond d-1'></span><span class='diamond d-2'></span><span class='diamond d-3'></span>
                                    <div class='img-applicant' style='background: url("../img/applicant.jpg");'></div>
                                    <a class='btn-applicant btn-cv' href='#'><span class='icon-download'></span>Télécharger le CV</a>
                                </header>
                                <div class='content-card'>
                                    <div class='wrapper-name-distance'>
                                        <h2 class='name'>
                                            Pierre T.
                                        </h2>
                                        <span class='distance'>
                                            <span class='icon-pin'></span>1 km
                                        </span>
                                    </div>
                                    <a class='btn-applicant btn-memo' href='#'><span class='icon-pin2'></span>1 mémo(s)</a>
                                    <h3 class='applicant-job'>
                                        Chef Boulanger - Patissier
                                    </h3>
                                    <p class='applicant-desc'>5 ans d’expérience aux cotés de Vincent Guerlais</p>
                                </div>
                                <footer>
                                    <div class='wrapper-tel-applicant'>
                                        <div class='tel-applicant'>Tel : <span class='tel-number'>06 94 32 16 83</span></div>
                                    </div>
                                    <div class='wrapper-mail-applicant'>
                                        <a class='mail-applicant' href='#'>pierre.tromelin2@gmail.com</a>
                                    </div>
                                    <div class='wrapper-btn-applicant'>
                                        <a class='btn-invalid-applicant icon-cross-big' href='#'></a>
                                        <a class='btn-valid-applicant icon-checkmark-big' href='#'></a>
                                        <div class='invalid-txt'>Non retenu</div>
                                    </div>
                                </footer>
                            </li>
                            <li class='card'>
                                <a href='#' class='cancel-invalid icon-cross-big'></a>
                                <header>
                                    <span class='diamond d-1'></span><span class='diamond d-2'></span><span class='diamond d-3'></span>
                                    <div class='img-applicant' style='background: url("../img/applicant.jpg");'></div>
                                    <a class='btn-applicant btn-cv' href='#'><span class='icon-download'></span>Télécharger le CV</a>
                                </header>
                                <div class='content-card'>
                                    <div class='wrapper-name-distance'>
                                        <h2 class='name'>
                                            Pierre T.
                                        </h2>
                                        <span class='distance'>
                                            <span class='icon-pin'></span>1 km
                                        </span>
                                    </div>
                                    <a class='btn-applicant btn-memo' href='#'><span class='icon-pin2'></span>1 mémo(s)</a>
                                    <h3 class='applicant-job'>
                                        Chef Boulanger - Patissier
                                    </h3>
                                    <p class='applicant-desc'>5 ans d’expérience aux cotés de Vincent Guerlais</p>
                                </div>
                                <footer>
                                    <div class='wrapper-tel-applicant'>
                                        <div class='tel-applicant'>Tel : <span class='tel-number'>06 94 32 16 83</span></div>
                                    </div>
                                    <div class='wrapper-mail-applicant'>
                                        <a class='mail-applicant' href='#'>pierre.tromelin2@gmail.com</a>
                                    </div>
                                    <div class='wrapper-btn-applicant'>
                                        <a class='btn-invalid-applicant icon-cross-big' href='#'></a>
                                        <a class='btn-valid-applicant icon-checkmark-big' href='#'></a>
                                        <div class='invalid-txt'>Non retenu</div>
                                    </div>
                                </footer>
                            </li>
                            <li class='card'>
                                <a href='#' class='cancel-invalid icon-cross-big'></a>
                                <header>
                                    <span class='diamond d-1'></span><span class='diamond d-2'></span><span class='diamond d-3'></span>
                                    <div class='img-applicant no-photo'></div>
                                    <a class='btn-applicant btn-cv' href='#'><span class='icon-download'></span>Télécharger le CV</a>
                                </header>
                                <div class='content-card'>
                                    <div class='wrapper-name-distance'>
                                        <h2 class='name'>
                                            Pierre T.
                                        </h2>
                                        <span class='distance'>
                                            <span class='icon-pin'></span>1 km
                                        </span>
                                    </div>
                                    <a class='btn-applicant btn-memo' href='#'><span class='icon-pin2'></span>1 mémo(s)</a>
                                    <h3 class='applicant-job'>
                                        Chef Boulanger - Patissier
                                    </h3>
                                    <p class='applicant-desc'>5 ans d’expérience aux cotés de Vincent Guerlais</p>
                                </div>
                                <footer>
                                    <div class='wrapper-tel-applicant'>
                                        <div class='tel-applicant'>Tel : <span class='tel-number'>06 94 32 16 83</span></div>
                                    </div>
                                    <div class='wrapper-mail-applicant'>
                                        <a class='mail-applicant' href='#'>pierre.tromelin2@gmail.com</a>
                                    </div>
                                    <div class='wrapper-btn-applicant'>
                                        <a class='btn-invalid-applicant icon-cross-big' href='#'></a>
                                        <a class='btn-valid-applicant icon-checkmark-big' href='#'></a>
                                        <div class='invalid-txt'>Non retenu</div>
                                    </div>
                                </footer>
                            </li>
                            <li class='card'>
                                <a href='#' class='cancel-invalid icon-cross-big'></a>
                                <header>
                                    <span class='diamond d-1'></span><span class='diamond d-2'></span><span class='diamond d-3'></span>
                                    <div class='img-applicant' style='background: url("../img/applicant.jpg");'></div>
                                    <a class='btn-applicant btn-cv' href='#'><span class='icon-download'></span>Télécharger le CV</a>
                                </header>
                                <div class='content-card'>
                                    <div class='wrapper-name-distance'>
                                        <h2 class='name'>
                                            Pierre T.
                                        </h2>
                                        <span class='distance'>
                                            <span class='icon-pin'></span>1 km
                                        </span>
                                    </div>
                                    <a class='btn-applicant btn-memo' href='#'><span class='icon-pin2'></span>1 mémo(s)</a>
                                    <h3 class='applicant-job'>
                                        Chef Boulanger - Patissier
                                    </h3>
                                    <p class='applicant-desc'>5 ans d’expérience aux cotés de Vincent Guerlais</p>
                                </div>
                                <footer>
                                    <div class='wrapper-tel-applicant'>
                                        <div class='tel-applicant'>Tel : <span class='tel-number'>06 94 32 16 83</span></div>
                                    </div>
                                    <div class='wrapper-mail-applicant'>
                                        <a class='mail-applicant' href='#'>pierre.tromelin2@gmail.com</a>
                                    </div>
                                    <div class='wrapper-btn-applicant'>
                                        <a class='btn-invalid-applicant icon-cross-big' href='#'></a>
                                        <a class='btn-valid-applicant icon-checkmark-big' href='#'></a>
                                        <div class='invalid-txt'>Non retenu</div>
                                    </div>
                                </footer>
                            </li>
                            <li class='card'>
                                <a href='#' class='cancel-invalid icon-cross-big'></a>
                                <header>
                                    <span class='diamond d-1'></span><span class='diamond d-2'></span><span class='diamond d-3'></span>
                                    <div class='img-applicant' style='background: url("../img/applicant.jpg");'></div>
                                    <a class='btn-applicant btn-cv' href='#'><span class='icon-download'></span>Télécharger le CV</a>
                                </header>
                                <div class='content-card'>
                                    <div class='wrapper-name-distance'>
                                        <h2 class='name'>
                                            Pierre T.
                                        </h2>
                                        <span class='distance'>
                                            <span class='icon-pin'></span>1 km
                                        </span>
                                    </div>
                                    <a class='btn-applicant btn-memo' href='#'><span class='icon-pin2'></span>1 mémo(s)</a>
                                    <h3 class='applicant-job'>
                                        Chef Boulanger - Patissier
                                    </h3>
                                    <p class='applicant-desc'>5 ans d’expérience aux cotés de Vincent Guerlais</p>
                                </div>
                                <footer>
                                    <div class='wrapper-tel-applicant'>
                                        <div class='tel-applicant'>Tel : <span class='tel-number'>06 94 32 16 83</span></div>
                                    </div>
                                    <div class='wrapper-mail-applicant'>
                                        <a class='mail-applicant' href='#'>pierre.tromelin2@gmail.com</a>
                                    </div>
                                    <div class='wrapper-btn-applicant'>
                                        <a class='btn-invalid-applicant icon-cross-big' href='#'></a>
                                        <a class='btn-valid-applicant icon-checkmark-big' href='#'></a>
                                        <div class='invalid-txt'>Non retenu</div>
                                    </div>
                                </footer>
                            </li>
                            <li class='card'>
                                <a href='#' class='cancel-invalid icon-cross-big'></a>
                                <header>
                                    <span class='diamond d-1'></span><span class='diamond d-2'></span><span class='diamond d-3'></span>
                                    <div class='img-applicant' style='background: url("../img/applicant.jpg");'></div>
                                    <a class='btn-applicant btn-cv' href='#'><span class='icon-download'></span>Télécharger le CV</a>
                                </header>
                                <div class='content-card'>
                                    <div class='wrapper-name-distance'>
                                        <h2 class='name'>
                                            Pierre T.
                                        </h2>
                                        <span class='distance'>
                                            <span class='icon-pin'></span>1 km
                                        </span>
                                    </div>
                                    <a class='btn-applicant btn-memo' href='#'><span class='icon-pin2'></span>1 mémo(s)</a>
                                    <h3 class='applicant-job'>
                                        Chef Boulanger - Patissier
                                    </h3>
                                    <p class='applicant-desc'>5 ans d’expérience aux cotés de Vincent Guerlais</p>
                                </div>
                                <footer>
                                    <div class='wrapper-tel-applicant'>
                                        <div class='tel-applicant'>Tel : <span class='tel-number'>06 94 32 16 83</span></div>
                                    </div>
                                    <div class='wrapper-mail-applicant'>
                                        <a class='mail-applicant' href='#'>pierre.tromelin2@gmail.com</a>
                                    </div>
                                    <div class='wrapper-btn-applicant'>
                                        <a class='btn-invalid-applicant icon-cross-big' href='#'></a>
                                        <a class='btn-valid-applicant icon-checkmark-big' href='#'></a>
                                        <div class='invalid-txt'>Non retenu</div>
                                    </div>
                                </footer>
                            </li>
                        </ul>
                        <div class='wrapper-map-jobs'>
                            <div id='content-map-jobs'>
                                <div id='map-jobs'></div>
                                <div class='footer-map'>
                                    <a class='btn-block huge btn-orange-job disabled' href='#'><span class='border'></span><span class='txt-btn'>Poursuivre</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer_jobs.html'); ?>

    </body>

</html>
