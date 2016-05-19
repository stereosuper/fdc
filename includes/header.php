<div id='wrapper-page'>
        <header id='header' class='clearfix'>
            <div class='zone-left-header'>
                <a href='./' class='home-link'>
                    <?php echo isset($field) ? $field : 'Forum des Commerces'; ?>
                </a>
            </div>
            <nav role='navigation'>
                <button id="btn-close-nav-header" class="btn-close icon-cross"></button>
                <ul class='menu-header'>
                    <li>
                        <a href='#'>Qui sommes nous ?</a>
                    </li><!--
                    --><li>
                        <a href='#'>Achat</a>
                    </li><!--
                    --><li>
                        <a href='#'>Partenaires</a>
                    </li><!--
                    --><li>
                        <a href='#'>Matériel</a>
                    </li><!--
                    --><li>
                        <a href='#'>Personnel</a>
                    </li><!--
                    --><li>
                        <a href='#'>Vente</a>
                    </li>
                </ul><ul class='nav-header'>
                    <li>
                        <a href='#'><span class='icon-mail'></span><span class='txt-nav'>Contact</span></a>
                    </li><!--
                    --><li>
                        <button id='btn-tools'><span class='icon-bulb'></span><span class='txt-nav'>Paramètres</span></button>
                    </li><!--
                    --><li>
                        <button id='btn-account'><span class='icon-user'></span><span class='txt-nav'>S'identifier</span></button>
                    </li>
                </ul>
            </nav>
        </header>

        <div id='mask'></div>

        <button id='logo'>
            <span class='rect-logo'></span><span class='rect-logo'></span><span class='rect-logo'></span>
            <span id='burger'><span></span><span></span><span></span></span>
            <img src='img/logo.png' srcset='img/logo.png 1x, img/logo@2x.png 2x' alt='Forum des Commerces'>
        </button>

        <button id='btn-close-header-responsive' class='btn-close icon-cross'></button>

        <aside id='sidebar-links' class='sidebar'>
            <button id='btn-close-sidebar-links' class='btn-close icon-cross'></button>
            <p class='small'>16 sites d'annonces dédiés aux entrepreneurs et spécialisés dans leurs activités respectives&nbsp;:</p>
            <nav>
                <ul class='menu-sidebar'>
                    <li>
                        <a href='#'>Bar Tabac PMU</a>
                    </li><!--
                    --><li>
                        <a href='#'>Bar Brasserie</a>
                    </li><!--
                    --><li>
                        <a href='#'>Boucherie Charcuterie Traiteur</a>
                    </li><!--
                    --><li>
                        <a href='#'>Boulangerie Pâtisserie</a>
                    </li><!--
                    --><li>
                        <a href='#'>Boutique et Magasins</a>
                    </li><!--
                    --><li>
                        <a href='#'>Bureaux Locaux Entrepôts</a>
                    </li><!--
                    --><li>
                        <a href='#'>Coiffure Esthétique Parfumerie</a>
                    </li><!--
                    --><li>
                        <a href='#'>Commerce Alimentation</a>
                    </li><!--
                    --><li>
                        <a href='#'>Creperie Pizzeria</a>
                    </li><!--
                    --><li>
                        <a href='#'>Entreprise du bâtiment</a>
                    </li><!--
                    --><li>
                        <a href='#'>Hôtel Bureau</a>
                    </li><!--
                    --><li>
                        <a href='#'>Hôtel Restaurant</a>
                    </li><!--
                    --><li>
                        <a href='#'>Murs Commerciaux</a>
                    </li><!--
                    --><li>
                        <a href='#'>Restaurant</a>
                    </li><!--
                    --><li>
                        <a href='#'>Restauration rapide</a>
                    </li><!--
                    --><li>
                        <a href='#'>Salon de thé</a>
                    </li><!--
                    --><li>
                        <a href='#'>Tabac Loto Presse</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <aside id='sidebar-account' class='sidebar auth-off'>
            <button id='btn-close-sidebar-account' class='btn-close icon-cross'></button>
            <div class='title-sidebar'>Mon compte</div>
            <div class='wrapper-login'>
                <form action='#' method='post'>
                    <fieldset class='required'>
                        <label for='account-login' class='block'>Identifiant</label>
                        <input type='text' name='account-login' id='account-login' required>
                    </fieldset>
                    <fieldset class='required'>
                        <label for='account-password' class='block'>Mot de passe</label>
                        <div class='wrapper-input-btn'>
                            <div class='wrapper-input big'>
                                <input type='password' name='account-password' id='account-password' required>
                                <button type='submit' class='btn-block medium'>Ok</button>
                            </div>
                        </div>
                        <div class='center-align info-form'>
                            <a href='#' class='btn-simple'>Mot de passe oublié&nbsp;?</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </aside>

        <aside id='sidebar-tools' class='sidebar'>
            <button id='btn-close-sidebar-tools' class='btn-close icon-cross'></button>
            <div class='title-sidebar'>Outils</div>
            <nav>
                <ul class='menu-sidebar'>
                    <li>
                        <a href="#">FAQ</a>
                    </li><!--
                    --><li>
                        <a href="#">Liens utiles</a>
                    </li><!--
                    --><li>
                        <a href="#">Calculatrice taux d’intérêt</a>
                    </li><!--
                    --><li>
                        <a href="#">ABC du métier</a>
                    </li><!--
                    --><li>
                        <a href="#">Glossaire</a>
                    </li><!--
                    --><li>
                        <a href="#">Offres et Tarifs</a>
                    </li>
                </ul>
            </nav>
        </aside>
