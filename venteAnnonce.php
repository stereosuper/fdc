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
                <div class='field field-sale'>
                    <header class='field-header'>
                        <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                            <li property='itemListElement' typeof='ListItem'>
                                <h6><a property='item' typeof='WebPage' href='./'>
                                    <span property='name'>Accueil</span>
                                </a></h6>
                            </li>
                        </ul>
                        <h1>Vente de boulangerie - pâtisserie - salon de thé</h1>
                        <div class='rect'></div>
                    </header>
                </div>

                <div class='content-tabs content-tabs-sale'>
                    <ul class='nav-tabs nav-tabs-indicator'>
                        <li >
                            <a href='#'>
                            1<span>. Bienvenue</span>
                            </a>
                        </li><li >
                                <a href='#'>
                                2<span>. Connexion</span>
                                </a>
                        </li><li class='active'>
                                3<span>. Mon annonce</span>
                        </li><li>
                            <a href='#'>
                                4<span>. Paiement</span>
                            </a>
                        </li>
                    </ul>
                    <div class='content-sale-log'>
                        <header class='tab-content-title'>
                            <h2 class='h1'>Votre annonce </h2>
                        </header>

                        <form action='#' method='post' id='formToEdit' class='sale-announce-form'>

                            <fieldset class='required btn-info'>
                                <label for='titre'>
                                    Titre de l'annonce
                                </label><input type='text' name='titre' id='titre' class='super-big' required >
                            </fieldset>
                            <fieldset class='required btn-info'>
                                <label for='descriptif'>
                                    Descriptif
                                </label><textarea name="textarea" ></textarea>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='departements'>
                                    Départements
                                </label><div class='select'><select name="departement" id="departement">
                                    <option value="" >-- Sélectionner --</option>
                                    <option value="01">01 Ain</option>
                                    <option value="02">02 Aisne</option>
                                    <option value="03">03 Allier</option>
                                    <option value="04">04 Alpes de Haute Provence</option>
                                    <option value="05">05 Hautes Alpes</option>
                                    <option value="06">06 Alpes Maritimes</option>
                                    <option value="07">07 Ardèche</option>
                                    <option value="08">08 Ardennes</option>
                                    <option value="09">09 Ariège</option>
                                    <option value="10">10 Aube</option>
                                    <option value="11">11 Aude</option>
                                    <option value="12">12 Aveyron</option>
                                    <option value="13">13 Bouches du Rhône</option>
                                    <option value="14">14 Calvados</option>
                                    <option value="15">15 Cantal</option>
                                    <option value="16">16 Charente</option>
                                    <option value="17">17 Charente Maritime</option>
                                    <option value="18">18 Cher</option>
                                    <option value="19">19 Corrèze</option>
                                    <option value="2A">2A Corse du Sud</option>
                                    <option value="2B">2B Haute-Corse</option>
                                    <option value="21">21 Côte d'Or</option>
                                    <option value="22">22 Côtes d'Armor</option>
                                    <option value="23">23 Creuse</option>
                                    <option value="24">24 Dordogne</option>
                                    <option value="25">25 Doubs</option>
                                    <option value="26">26 Drôme</option>
                                    <option value="27">27 Eure</option>
                                    <option value="28">28 Eure et Loir</option>
                                    <option value="29">29 Finistère</option>
                                    <option value="30">30 Gard</option>
                                    <option value="31">31 Haute Garonne</option>
                                    <option value="32">32 Gers</option>
                                    <option value="33">33 Gironde</option>
                                    <option value="34">34 Hérault</option>
                                    <option value="35">35 Ille et Vilaine</option>
                                    <option value="36">36 Indre</option>
                                    <option value="37">37 Indre et Loire</option>
                                    <option value="38">38 Isère</option>
                                    <option value="39">39 Jura</option>
                                    <option value="40">40 Landes</option>
                                    <option value="41">41 Loir et Cher</option>
                                    <option value="42">42 Loire</option>
                                    <option value="43">43 Haute Loire</option>
                                    <option value="44">44 Loire Atlantique</option>
                                    <option value="45">45 Loiret</option>
                                    <option value="46">46 Lot</option>
                                    <option value="47">47 Lot et Garonne</option>
                                    <option value="48">48 Lozère</option>
                                    <option value="49">49 Maine et Loire</option>
                                    <option value="50">50 Manche</option>
                                    <option value="51">51 Marne</option>
                                    <option value="52">52 Haute Marne</option>
                                    <option value="53">53 Mayenne</option>
                                    <option value="54">54 Meurthe et Moselle</option>
                                    <option value="55">55 Meuse</option>
                                    <option value="56">56 Morbihan</option>
                                    <option value="57">57 Moselle</option>
                                    <option value="58">58 Nièvre</option>
                                    <option value="59">59 Nord</option>
                                    <option value="60">60 Oise</option>
                                    <option value="61">61 Orne</option>
                                    <option value="62">62 Pas de Calais</option>
                                    <option value="63">63 Puy de Dôme</option>
                                    <option value="64">64 Pyrénées Atlantiques</option>
                                    <option value="65">65 Hautes Pyrénées</option>
                                    <option value="66">66 Pyrénées Orientales</option>
                                    <option value="67">67 Bas Rhin</option>
                                    <option value="68">68 Haut Rhin</option>
                                    <option value="69">69 Rhône</option>
                                    <option value="70">70 Haute Saône</option>
                                    <option value="71">71 Saône et Loire</option>
                                    <option value="72">72 Sarthe</option>
                                    <option value="73">73 Savoie</option>
                                    <option value="74">74 Haute Savoie</option>
                                    <option value="75">75 Paris</option>
                                    <option value="76">76 Seine Maritime</option>
                                    <option value="77">77 Seine et Marne</option>
                                    <option value="78">78 Yvelines</option>
                                    <option value="79">79 Deux Sèvres</option>
                                    <option value="80">80 Somme</option>
                                    <option value="81">81 Tarn</option>
                                    <option value="82">82 Tarn et Garonne</option>
                                    <option value="83">83 Var</option>
                                    <option value="84">84 Vaucluse</option>
                                    <option value="85">85 Vendée</option>
                                    <option value="86">86 Vienne</option>
                                    <option value="87">87 Haute Vienne</option>
                                    <option value="88">88 Vosges</option>
                                    <option value="89">89 Yonne</option>
                                    <option value="90">90 Territoire de Belfort</option>
                                    <option value="91">91 Essonne</option>
                                    <option value="92">92 Hauts de Seine</option>
                                    <option value="93">93 Seine Saint Denis</option>
                                    <option value="94">94 Val de Marne</option>
                                    <option value="95">95 Val d'Oise</option>
                                    <option value="971">971 Guadeloupe</option>
                                    <option value="972">972 Martinique</option>
                                    <option value="973">973 Guyane</option>
                                    <option value="974">974 Réunion</option>
                                    <option value="975">975 Saint Pierre et Miquelon</option>
                                    <option value="976">976 Mayotte</option>
                                </select>
                                </div>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='ville'>
                                    Ville
                                </label><input type='text' name='ville' id='ville' class='big' >
                            </fieldset>
                            <fieldset>
                                <label for='geolocalisation'>
                                    Géolocalisation
                                </label><!-- inline
                              --><div class="geolocalisation-container">
                                    <input id="geolocalisation" class='search' type='text' placeholder='Rechercher une adresse...' />
                                    <i class="icon-pointer"></i>
                                </div>
                                <div id="map-canvas"></div>
                                <input type="hidden" id="latitude" name="latitude" value="47.2155851">
                                <input type="hidden" id="longitude" name="longitude" value="-1.5619139">
                            </fieldset>
                            <fieldset class='required'>
                                <label for='type'>
                                    Type de vente
                                    </label> <div class='select'><select name="typevente" id="typevente" >
                                        <option value="">-- Sélectionner --</option>
                                        <option value="01"></option>
                                        <option value="02"></option>
                                        <option value="03"></option>
                                    </select>
                                </div>
                            </fieldset>
                            <fieldset class='required'>
                                <label for='prix'>
                                    Prix de vente
                                </label><input type='text' name='prix' id='prix' class='med' >
                            </fieldset>
                            <fieldset>
                                <label for='photo'>
                                    Photo principale
                                </label>
                                <button class='btn-photo small'>séléctionner un fichier</button>
                            </fieldset>
                            <fieldset>
                                <label for='ville'>
                                    Quintaux de farine planifiée
                                </label></label><input type='text' name='ville' id='ville' class='big' >
                            </fieldset>
                            <fieldset >
                                <legend class='legend-next-fieldset'>Appartement de fonction</legend><fieldset class='inline-b'>
                                    <input type='radio' name='appartement' value='oui' id='oui' ><label for='oui' class='has-margin'>Oui</label>
                                    <input type='radio' name='appartement' value='non' id='non' ><label for='non'>Non</label>
                                </fieldset>
                            </fieldset>
                            <fieldset>
                                <label for='fermeture'>
                                    Fermeture annuelle
                                </label><input type='text' name='fermeture' id='fermeture'>
                                <span class='not-filled'>Deux mois d'été</span>
                            </fieldset>
                            <fieldset>
                                <label for='fermeture2'>
                                    Fermeture hebdomadaire
                                </label><input type='text' name='fermeture2' id='fermeture2' class='big' >
                                <span class='not-filled'>Lundi et dimanche</span>
                            </fieldset>
                            <fieldset>
                                <label for='loyerHT'>
                                    Montant loyer annuel
                                </label><input type='text' name='loyerHT' id='loyerHT' class='x-small' >
                            </fieldset>
                            <fieldset>
                                <label for='bail'>
                                    Bail
                                </label><input type='text' name='bail' id='bail' class='x-small' >
                            </fieldset>
                            <fieldset>
                                <label for='MS'>
                                    Masse salariale
                                </label><input type='text' name='MS' id='MS' class='x-small' >
                            </fieldset>
                            <fieldset>
                                <label for='CAHT'>
                                    CA HT du dernier exercice
                                </label><input type='text' name='CAHT' id='CAHT' class='small' >
                            </fieldset>
                            <fieldset>
                                <label for='ebe'>
                                    EBE
                                </label><input type='text' name='ebe' id='ebe' class='small' >
                            </fieldset>
                            <fieldset class='btn-info'>
                                <label for='lettre1'>
                                    Lettre DPE
                                </label><input type='text' name='lettre1' id='lettre1' class='big' >
                            </fieldset>
                            <fieldset class='btn-info'>
                                <label for='valeur1'>
                                    Valeur DPE
                                </label><input type='text' name='valeur1' id='valeur1' class='big' >
                            </fieldset>
                            <fieldset class='btn-info'>
                                <label for='lettre2'>
                                    Lettre GES
                                </label><input type='text' name='lettre2' id='lettre2' class='big' >
                            </fieldset>
                            <fieldset class='btn-info'>
                                <label for='valeur2'>
                                    Valeur GES
                                </label><input type='text' name='valeur2' id='valeur2' class='big' >
                            </fieldset>
                            <fieldset>
                                <label for='urgent'>
                                    Annonce urgente ?
                                </label><input type='checkbox' name='annonce-urgente' id='annonce-urgente' value='1' checked ><label for='annonce-urgente'>Souscrire à l'option <span class='orange-txt uppercase has-border'><span class='icon-flash'></span>&nbsp;Pole&nbsp;position</span> pour un supplément de <span class='orange-txt'>40&nbsp;€&nbsp;HT</span></label>
                            </fieldset>
                            <button type='submit' class='btn-block btn-orange-light huge'><span class='border'></span><span class='txt-btn'>Valider et payer</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
