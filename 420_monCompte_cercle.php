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
                                            <input type="checkbox" disabled name='cercle-acheter' id='cercle-acheter' value='1' checked><label for="cercle-acheter">Acheter ma future entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-acheter1' id='cercle-acheter1' value='0' /><label for="cercle-acheter1">Recherche de la cible</label></li>
                                            <li><input type="checkbox" disabled name='cercle-acheter2' id='cercle-acheter2' value='0' /><label for="cercle-acheter2">Statuts de mon entreprise</label></li>
                                            <li><input type="checkbox" disabled name='cercle-acheter3' id='cercle-acheter3' value='0' /><label for="cercle-acheter3">Business plan</label></li>
                                            <li><input type="checkbox" disabled name='cercle-acheter4' id='cercle-acheter4' value='0' /><label for="cercle-acheter4">Comptabilité</label></li>
                                            <li><input type="checkbox" disabled name='cercle-acheter5' id='cercle-acheter5' value='1' checked/><label for="cercle-acheter5">Formalités de création</label></li>
                                            <li><input type="checkbox" disabled name='cercle-acheter6' id='cercle-acheter6' value='0' /><label for="cercle-acheter6">Financement</label></li>
                                            <li><input type="checkbox" disabled name='cercle-acheter7' id='cercle-acheter7' value='0' /><label for="cercle-acheter7">Assurances</label></li>
                                            <li><input type="checkbox" disabled name='cercle-acheter8' id='cercle-acheter8' value='0' /><label for="cercle-acheter8">Autre</label><input type="text" placeholder="Préciser" disabled /></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <header class="finance-step">
                                            <input type="checkbox" disabled name='cercle-finance' id='cercle-finance' value='0'><label for="cercle-finance">Financer mon entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-finance1' id='cercle-finance1' value='0' /><label for="cercle-finance1">Recherche de la cible</label></li>
                                            <li><input type="checkbox" disabled name='cercle-finance2' id='cercle-finance2' value='0' /><label for="cercle-finance2">Statuts de mon entreprise</label></li>
                                            <li><input type="checkbox" disabled name='cercle-finance3' id='cercle-finance3' value='0' /><label for="cercle-finance3">Business plan</label></li>
                                            <li><input type="checkbox" disabled name='cercle-finance4' id='cercle-finance4' value='0' /><label for="cercle-finance4">Comptabilité</label></li>
                                            <li><input type="checkbox" disabled name='cercle-finance5' id='cercle-finance5' value='0' /><label for="cercle-finance5">Formalités de création</label></li>
                                            <li><input type="checkbox" disabled name='cercle-finance6' id='cercle-finance6' value='0' /><label for="cercle-finance6">Financement</label></li>
                                            <li><input type="checkbox" disabled name='cercle-finance7' id='cercle-finance7' value='0' /><label for="cercle-finance7">Assurances</label></li>
                                            <li><input type="checkbox" disabled name='cercle-finance8' id='cercle-finance8' value='0' /><label for="cercle-finance8">Autre</label><input type="text" placeholder="Préciser" disabled /></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <header class="ensure-step">
                                            <input type="checkbox" disabled name='cercle-ensure' id='cercle-ensure' value='1' checked><label for="cercle-ensure">Assurer mon entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-ensure1' id='cercle-ensure1' value='0' /><label for="cercle-ensure1">Recherche de la cible</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure2' id='cercle-ensure2' value='0' /><label for="cercle-ensure2">Statuts de mon entreprise</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure3' id='cercle-ensure3' value='1' checked /><label for="cercle-ensure3">Business plan</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure4' id='cercle-ensure4' value='1' checked /><label for="cercle-ensure4">Comptabilité</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure5' id='cercle-ensure5' value='0' /><label for="cercle-ensure5">Formalités de création</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure6' id='cercle-ensure6' value='1' checked /><label for="cercle-ensure6">Financement</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure7' id='cercle-ensure7' value='0' /><label for="cercle-ensure7">Assurances</label></li>
                                            <li><input type="checkbox" disabled name='cercle-ensure8' id='cercle-ensure8' value='1' checked /><label for="cercle-ensure8">Autre</label><input type="text" placeholder="Préciser" disabled /></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <header class="equip-step">
                                            <input type="checkbox" disabled name='cercle-equip' id='cercle-equip' value='0'><label for="cercle-equip">Équiper mon entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-equip1' id='cercle-equip1' value='0' /><label for="cercle-equip1">Recherche de la cible</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip2' id='cercle-equip2' value='0' /><label for="cercle-equip2">Statuts de mon entreprise</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip3' id='cercle-equip3' value='0' /><label for="cercle-equip3">Business plan</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip4' id='cercle-equip4' value='0' /><label for="cercle-equip4">Comptabilité</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip5' id='cercle-equip5' value='0' /><label for="cercle-equip5">Formalités de création</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip6' id='cercle-equip6' value='0' /><label for="cercle-equip6">Financement</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip7' id='cercle-equip7' value='0' /><label for="cercle-equip7">Assurances</label></li>
                                            <li><input type="checkbox" disabled name='cercle-equip8' id='cercle-equip8' value='0' /><label for="cercle-equip8">Autre</label><input type="text" placeholder="Préciser" disabled /></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <header class="staff-step">
                                            <input type="checkbox" disabled name='cercle-staff' id='cercle-staff' value='1' checked><label for="cercle-staff">Recruter pour mon entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-staff1' id='cercle-staff1' value='0' /><label for="cercle-staff1">Recherche de la cible</label></li>
                                            <li><input type="checkbox" disabled name='cercle-staff2' id='cercle-staff2' value='0' /><label for="cercle-staff2">Statuts de mon entreprise</label></li>
                                            <li><input type="checkbox" disabled name='cercle-staff3' id='cercle-staff3' value='1' checked /><label for="cercle-staff3">Business plan</label></li>
                                            <li><input type="checkbox" disabled name='cercle-staff4' id='cercle-staff4' value='0' /><label for="cercle-staff4">Comptabilité</label></li>
                                            <li><input type="checkbox" disabled name='cercle-staff5' id='cercle-staff5' value='0' /><label for="cercle-staff5">Formalités de création</label></li>
                                            <li><input type="checkbox" disabled name='cercle-staff6' id='cercle-staff6' value='0' /><label for="cercle-staff6">Financement</label></li>
                                            <li><input type="checkbox" disabled name='cercle-staff7' id='cercle-staff7' value='0' /><label for="cercle-staff7">Assurances</label></li>
                                            <li><input type="checkbox" disabled name='cercle-staff8' id='cercle-staff8' value='0' /><label for="cercle-staff8">Autre</label><input type="text" placeholder="Préciser" disabled /></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <header class="manage-step">
                                            <input type="checkbox" disabled name='cercle-manage' id='cercle-manage' value='0'><label for="cercle-manage">Gérer mon entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-manage1' id='cercle-manage1' value='0' /><label for="cercle-manage1">Recherche de la cible</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage2' id='cercle-manage2' value='0' /><label for="cercle-manage2">Statuts de mon entreprise</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage3' id='cercle-manage3' value='0' /><label for="cercle-manage3">Business plan</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage4' id='cercle-manage4' value='0' /><label for="cercle-manage4">Comptabilité</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage5' id='cercle-manage5' value='0' /><label for="cercle-manage5">Formalités de création</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage6' id='cercle-manage6' value='0' /><label for="cercle-manage6">Financement</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage7' id='cercle-manage7' value='0' /><label for="cercle-manage7">Assurances</label></li>
                                            <li><input type="checkbox" disabled name='cercle-manage8' id='cercle-manage8' value='0' /><label for="cercle-manage8">Autre</label><input type="text" placeholder="Préciser" disabled /></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <header class="sell-step">
                                            <input type="checkbox" disabled name='cercle-sell' id='cercle-sell' value='0'><label for="cercle-sell">Vendre mon entreprise</label>
                                        </header>
                                        <ul class="cb-content">
                                            <li><input type="checkbox" disabled name='cercle-sell1' id='cercle-sell1' value='0' /><label for="cercle-sell1">Recherche de la cible</label></li>
                                            <li><input type="checkbox" disabled name='cercle-sell2' id='cercle-sell2' value='0' /><label for="cercle-sell2">Statuts de mon entreprise</label></li>
                                            <li><input type="checkbox" disabled name='cercle-sell3' id='cercle-sell3' value='0' /><label for="cercle-sell3">Business plan</label></li>
                                            <li><input type="checkbox" disabled name='cercle-sell4' id='cercle-sell4' value='0' /><label for="cercle-sell4">Comptabilité</label></li>
                                            <li><input type="checkbox" disabled name='cercle-sell5' id='cercle-sell5' value='0' /><label for="cercle-sell5">Formalités de création</label></li>
                                            <li><input type="checkbox" disabled name='cercle-sell6' id='cercle-sell6' value='0' /><label for="cercle-sell6">Financement</label></li>
                                            <li><input type="checkbox" disabled name='cercle-sell7' id='cercle-sell7' value='0' /><label for="cercle-sell7">Assurances</label></li>
                                            <li><input type="checkbox" disabled name='cercle-sell8' id='cercle-sell8' value='0' /><label for="cercle-sell8">Autre</label><input type="text" placeholder="Préciser" disabled /></li>
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
