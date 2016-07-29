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

                <h1>Mon compte</h1>
                <div class='content-tabs cercleMyForum'>
                    <ul class='nav-tabs'>
                        <li>
                            <a href='#' class='btn-home'>Tableau de bord</a>
                        </li><li>
                            <span>Mes informations</span>
                        </li><li class='active'>
                            <a href='#'>Accompagnement</a>
                        </li><li>
                            <a href='#'>Alertes</a>
                            <span class='notif'>5</span>
                        </li><li>
                            <a href='#'>Ventes</a>
                        </li><li>
                            <a href='#'>Correspondance</a>
                        </li><li class='tab-right tab-orange'>
                            <a href='#'>Ma sélection</a>
                            <span class='notif'>1</span>
                        </li>
                    </ul>
                    <div class='field-content'>
                        <ul class="littles-squares vertical"><li></li><li></li><li></li><li></li><li></li><li></li></ul>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Mes besoins d'accompagnement</h2>
                            <button class='btn-pen small' id='editForm' data-cancel='Annuler les modifications' data-edit='Modifier'>Modifier</button>
                        </header>
                        <div class="select-circle circle-text">
                            <div class="column">
                                <img src="./layoutImg/cercle/cercle.png" width="198" alt="Le Cercle MyForum"/>
                            </div>
                            <form class="column form-disabled" id="formToEdit">
                                <p>Le cercle FDC, c’est une équipe à votre disposition avec un interlocuteur dédié qui vous contacte, vous conseille et vous oriente gratuitement. Ne vous en privez pas&nbsp;!</p>
                                <ul class="circle-step">
                                    <li>
                                        <header class="buy-step">
                                            <input type="checkbox" disabled name='cercle-acheter' id='cercle-acheter' value='0'><label for="cercle-acheter">Acheter ma future entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-acheter1' id='cercle-acheter1' value='0' /><label for="cercle-acheter1">Recherche d'une entreprise à reprendre</label></li>
                                            <li><input type="checkbox" disabled name='cercle-acheter2' id='cercle-acheter2' value='0' /><label for="cercle-acheter2">Statut de mon entreprise</label></li>
                                            <li><input type="checkbox" disabled name='cercle-acheter3' id='cercle-acheter3' value='0' /><label for="cercle-acheter3">Business plan</label></li>
                                            <li><input type="checkbox" disabled name='cercle-acheter4' id='cercle-acheter4' value='0' /><label for="cercle-acheter4">Comptabilité</label></li>
                                            <li><input type="checkbox" disabled name='cercle-acheter5' id='cercle-acheter5' value='0' /><label for="cercle-acheter5">Formalités de création</label></li>
                                            <li><input type="checkbox" disabled name='cercle-acheter8' id='cercle-acheter8' value='0' /><label for="cercle-acheter8">Autre</label><input  disabled type="text" placeholder="Préciser" /></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <header class="finance-step">
                                            <input type="checkbox" disabled name='cercle-finance' id='cercle-finance' value='0' checked><label for="cercle-finance">Financer mon entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-finance1' id='cercle-finance1' value='0' checked /><label for="cercle-finance1">Compléter mon apport par un emprunt</label></li>
                                            <li><input type="checkbox" disabled name='cercle-finance2' id='cercle-finance2' value='0' /><label for="cercle-finance2">Recherche de subventions</label></li>
                                            <li><input type="checkbox" disabled name='cercle-finance3' id='cercle-finance3' value='0' checked /><label for="cercle-finance3">Recherche d'associés ou de partenaires</label></li>
                                            <li><input type="checkbox" disabled name='cercle-finance8' id='cercle-finance8' value='0' /><label for="cercle-finance8">Autre</label><input  disabled type="text" placeholder="Préciser"/></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <header class="ensure-step">
                                            <input type="checkbox" disabled name='cercle-ensure' id='cercle-ensure' value='0'><label for="cercle-ensure">Assurer mon entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-ensure1' id='cercle-ensure1' value='0' /><label for="cercle-ensure1">Responsabilité civile professionnelle</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure2' id='cercle-ensure2' value='0' /><label for="cercle-ensure2">Assurance homme clé</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure3' id='cercle-ensure3' value='0' /><label for="cercle-ensure3">Mutuelle d'entreprise</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure4' id='cercle-ensure4' value='0' /><label for="cercle-ensure4">Prévoyance</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure5' id='cercle-ensure5' value='0' /><label for="cercle-ensure5">Perte d'exploitation</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure6' id='cercle-ensure6' value='0' /><label for="cercle-ensure6">Assurance chômage volontaire</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure7' id='cercle-ensure7' value='0' /><label for="cercle-ensure7">Garantie décennale</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure8' id='cercle-ensure8' value='0' /><label for="cercle-ensure8">Autre</label><input  disabled type="text" placeholder="Préciser" /></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <header class="equip-step">
                                            <input type="checkbox" disabled name='cercle-equip' id='cercle-equip' value='0'><label for="cercle-equip">Équiper mon entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-equip1' id='cercle-equip1' value='0' /><label for="cercle-equip1">Matériel d'exploitation</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip2' id='cercle-equip2' value='0' /><label for="cercle-equip2">Matériel de production</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip3' id='cercle-equip3' value='0' /><label for="cercle-equip3">Consommables</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip4' id='cercle-equip4' value='0' /><label for="cercle-equip4">Matériels informatique</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip5' id='cercle-equip5' value='0' /><label for="cercle-equip5">Conception des aménagement</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip6' id='cercle-equip6' value='0' /><label for="cercle-equip6">Respect des normes</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip7' id='cercle-equip7' value='0' /><label for="cercle-equip7">Artisants du bâtiments</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip8' id='cercle-equip8' value='0' /><label for="cercle-equip8">Autre</label><input  disabled type="text" placeholder="Préciser" /></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <header class="staff-step">
                                            <input type="checkbox" disabled name='cercle-staff' id='cercle-staff' value='0' checked><label for="cercle-staff">Recruter pour mon entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-staff1' id='cercle-staff1' value='0' checked /><label for="cercle-staff1">Ouvriers</label></li>
                                            <li><input type="checkbox" disabled name='cercle-staff2' id='cercle-staff2' value='0' /><label for="cercle-staff2">Employés</label></li>
                                            <li><input type="checkbox" disabled name='cercle-staff3' id='cercle-staff3' value='0' /><label for="cercle-staff3">Agents de maîtrise</label></li>
                                            <li><input type="checkbox" disabled name='cercle-staff4' id='cercle-staff4' value='0' checked /><label for="cercle-staff4">Cadres</label></li>
                                            <li><input type="checkbox" disabled name='cercle-staff5' id='cercle-staff5' value='0' /><label for="cercle-staff5">Conseil en recrutement</label></li>
                                            <li><input type="checkbox" disabled name='cercle-staff8' id='cercle-staff8' value='0' /><label for="cercle-staff8">Autre</label><input  disabled type="text" placeholder="Préciser" /></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <header class="manage-step">
                                            <input type="checkbox" disabled name='cercle-manage' id='cercle-manage' value='0'><label for="cercle-manage">Gérer mon entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-manage1' id='cercle-manage1' value='0' /><label for="cercle-manage1">Comptabilité</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage2' id='cercle-manage2' value='0' /><label for="cercle-manage2">Paie</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage3' id='cercle-manage3' value='0' /><label for="cercle-manage3">Outils de suivi de gestion</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage4' id='cercle-manage4' value='0' /><label for="cercle-manage4">Formation (chef d'entreprise, collaborateurs)</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage5' id='cercle-manage5' value='0' /><label for="cercle-manage5">Développement commercial</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage6' id='cercle-manage6' value='0' /><label for="cercle-manage6">Communication (dont site internet)</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage8' id='cercle-manage8' value='0' /><label for="cercle-manage8">Autre</label><input  disabled type="text" placeholder="Préciser" /></li>
                                            <li></li><!-- pour Netil : si impair, ajouter un li vide à la fin pour l'alignement -->
                                        </ul>
                                    </li>
                                    <li>
                                        <header class="sell-step">
                                            <input type="checkbox" disabled name='cercle-sell' id='cercle-sell' value='0' checked><label for="cercle-sell">Vendre mon entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-sell1' id='cercle-sell1' value='0' checked /><label for="cercle-sell1">Agence immobilière / courtier</label></li>
                                            <li><input type="checkbox" disabled name='cercle-sell2' id='cercle-sell2' value='0' /><label for="cercle-sell2">Valoriser mon entreprise</label></li>
                                            <li><input type="checkbox" disabled name='cercle-sell3' id='cercle-sell3' value='0' checked /><label for="cercle-sell3">Enregistrer la vente dans les formes</label></li>
                                            <li><input type="checkbox" disabled name='cercle-sell4' id='cercle-sell4' value='0' checked /><label for="cercle-sell4">Placer le fruit de la vente</label></li>
                                            <li><input type="checkbox" disabled name='cercle-sell8' id='cercle-sell8' value='0' /><label for="cercle-sell8">Autre</label><input  disabled type="text" placeholder="Préciser" /></li>
                                            <li></li>
                                        </ul>
                                    </li>
                                </ul>
                                <button type="submit" class='btn-block btn-yellow huge hidden' ><span class='border'></span><span class='txt-btn'>Valider</span></button>
                            </form>
                        </div>
                    </div>
                    <div class="call-directly">
                        <p><b>Des projets ou besoins spécifiques&nbsp;?</b><br />
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
