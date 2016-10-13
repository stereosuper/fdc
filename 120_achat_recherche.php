<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Forum des Commerces - Achat recherche</title>
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
                <div class='field field-buy'>
                    <header class='field-header'>
                        <ul class='breadcrumb' vocab='http://schema.org/' typeof='BreadcrumbList'>
                            <li property='itemListElement' typeof='ListItem'>
                                <h6><a property='item' typeof='WebPage' href='./'>
                                    <span property='name'>Accueil</span>
                                </a></h6>
                            </li>
                        </ul>
                        <h1>Achat de boulangerie - pâtisserie - salon de thé</h1>
                        <div class='rect'></div>
                    </header>
                    <div class='field-content searchform'>
                        <div class='tab-content-title'>
                            <h2 class='h1'>Recherche</h2>
                        </div>
                        <form action='#' method='post' class='form-half'>
                            <fieldset>
                                <label for='departement' class='label-select'>
                                    Département
                                </label><div class='select'>
                                    <select name='departement' id='departement'>
                                        <option selected value=''>— Sélectionner le département</option>
                                        <option value='01'>01 - Ain</option>
                                        <option value='02'>02 - Aisne</option>
                                        <option value='03'>03 - Allier</option>
                                        <option value='04'>04 - Alpes de Haute Provence</option>
                                        <option value='05'>05 - Hautes Alpes</option>
                                        <option value='06'>06 - Alpes Maritimes</option>
                                        <option value='07'>07 - Ardèche</option>
                                        <option value='08'>08 - Ardennes</option>
                                        <option value='09'>09 - Ariège</option>
                                        <option value='10'>10 - Aube</option>
                                        <option value='11'>11 - Aude</option>
                                        <option value='12'>12 - Aveyron</option>
                                        <option value='13'>13 - Bouches du Rhône</option>
                                        <option value='14'>14 - Calvados</option>
                                        <option value='15'>15 - Cantal</option>
                                        <option value='16'>16 - Charente</option>
                                        <option value='17'>17 - Charente Maritime</option>
                                        <option value='18'>18 - Cher</option>
                                        <option value='19'>19 - Corrèze</option>
                                        <option value='2A'>2A - Corse du Sud</option>
                                        <option value='2B'>2B - Haute-Corse</option>
                                        <option value='21'>21 - Côte d'Or</option>
                                        <option value='22'>22 - Côtes d'Armor</option>
                                        <option value='23'>23 - Creuse</option>
                                        <option value='24'>24 - Dordogne</option>
                                        <option value='25'>25 - Doubs</option>
                                        <option value='26'>26 - Drôme</option>
                                        <option value='27'>27 - Eure</option>
                                        <option value='28'>28 - Eure et Loir</option>
                                        <option value='29'>29 - Finistère</option>
                                        <option value='30'>30 - Gard</option>
                                        <option value='31'>31 - Haute Garonne</option>
                                        <option value='32'>32 - Gers</option>
                                        <option value='33'>33 - Gironde</option>
                                        <option value='34'>34 - Hérault</option>
                                        <option value='35'>35 - Ille et Vilaine</option>
                                        <option value='36'>36 - Indre</option>
                                        <option value='37'>37 - Indre et Loire</option>
                                        <option value='38'>38 - Isère</option>
                                        <option value='39'>39 - Jura</option>
                                        <option value='40'>40 - Landes</option>
                                        <option value='41'>41 - Loir et Cher</option>
                                        <option value='42'>42 - Loire</option>
                                        <option value='43'>43 - Haute Loire</option>
                                        <option value='44'>44 - Loire Atlantique</option>
                                        <option value='45'>45 - Loiret</option>
                                        <option value='46'>46 - Lot</option>
                                        <option value='47'>47 - Lot et Garonne</option>
                                        <option value='48'>48 - Lozère</option>
                                        <option value='49'>49 - Maine et Loire</option>
                                        <option value='50'>50 - Manche</option>
                                        <option value='51'>51 - Marne</option>
                                        <option value='52'>52 - Haute Marne</option>
                                        <option value='53'>53 - Mayenne</option>
                                        <option value='54'>54 - Meurthe et Moselle</option>
                                        <option value='55'>55 - Meuse</option>
                                        <option value='56'>56 - Morbihan</option>
                                        <option value='57'>57 - Moselle</option>
                                        <option value='58'>58 - Nièvre</option>
                                        <option value='59'>59 - Nord</option>
                                        <option value='60'>60 - Oise</option>
                                        <option value='61'>61 - Orne</option>
                                        <option value='62'>62 - Pas de Calais</option>
                                        <option value='63'>63 - Puy de Dôme</option>
                                        <option value='64'>64 - Pyrénées Atlantiques</option>
                                        <option value='65'>65 - Hautes Pyrénées</option>
                                        <option value='66'>66 - Pyrénées Orientales</option>
                                        <option value='67'>67 - Bas Rhin</option>
                                        <option value='68'>68 - Haut Rhin</option>
                                        <option value='69'>69 - Rhône</option>
                                        <option value='70'>70 - Haute Saône</option>
                                        <option value='71'>71 - Saône et Loire</option>
                                        <option value='72'>72 - Sarthe</option>
                                        <option value='73'>73 - Savoie</option>
                                        <option value='74'>74 - Haute Savoie</option>
                                        <option value='75'>75 - Paris</option>
                                        <option value='76'>76 - Seine Maritime</option>
                                        <option value='77'>77 - Seine et Marne</option>
                                        <option value='78'>78 - Yvelines</option>
                                        <option value='79'>79 - Deux Sèvres</option>
                                        <option value='80'>80 - Somme</option>
                                        <option value='81'>81 - Tarn</option>
                                        <option value='82'>82 - Tarn et Garonne</option>
                                        <option value='83'>83 - Var</option>
                                        <option value='84'>84 - Vaucluse</option>
                                        <option value='85'>85 - Vendée</option>
                                        <option value='86'>86 - Vienne</option>
                                        <option value='87'>87 - Haute Vienne</option>
                                        <option value='88'>88 - Vosges</option>
                                        <option value='89'>89 - Yonne</option>
                                        <option value='90'>90 - Territoire de Belfort</option>
                                        <option value='91'>91 - Essonne</option>
                                        <option value='92'>92 - Hauts de Seine</option>
                                        <option value='93'>93 - Seine Saint Denis</option>
                                        <option value='94'>94 - Val de Marne</option>
                                        <option value='95'>95 - Val d'Oise</option>
                                        <option value='971'>971 - Guadeloupe</option>
                                        <option value='972'>972 - Martinique</option>
                                        <option value='973'>973 - Guyane</option>
                                        <option value='974'>974 - Réunion</option>
                                        <option value='975'>975 - Saint-Pierre-et-Miquelon</option>
                                        <option value='976'>976 - Mayotte</option>
                                        <option value='977'>977 - Saint-Barthélemy</option>
                                        <option value='978'>978 - Saint-Martin</option>
                                        <option value='986'>986 - Wallis-et-Futuna</option>
                                        <option value='987'>987 - Polynésie française</option>
                                        <option value='988'>988 - Nouvelle-Calédonie</option>
                                    </select>
                                </div>
                                <fieldset class='block-right'>
                                    <input type='checkbox' name='departement-etendre' id='departement-etendre' value='1'><label for='departement-etendre'>Etendre aux départements limitrophes</label>
                                </fieldset>
                            </fieldset>
                            <fieldset>
                                <label for='prix-min' class='label-select'>
                                    Prix entre
                                </label><div class='select small'>
                                    <select name='prix-min' id='prix-min'>
                                        <option selected value=''>— Prix min</option>
                                        <option value='100000'>100 000</option>
                                        <option value='250000'>250 000</option>
                                        <option value='500000'>500 000</option>
                                    </select>
                                </div><label for='prix-max' class='label-select small'>
                                    et
                                </label><div class='select small'>
                                    <select name='prix-max' id='prix-max'>
                                        <option selected value=''>— Prix max</option>
                                        <option value='100000'>100 000</option>
                                        <option value='250000'>250 000</option>
                                        <option value='500000'>500 000</option>
                                    </select>
                                </div>
                            </fieldset>
                            <button type='submit' class='btn-block huge right'><span class='border'></span><span class='txt-btn'>Recherche</span></button>
                            <a href='#' class='btn-arrow small'>Nous confier gratuitement votre recherche</a>
                        </form><div class='map-container' id='mapForm'>
                            <div id='mapFormMetropole' class='map-form active'>
                                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 44.12 42.13'>
                                  <polygon data-department='56' data-adjacent='29,22,35,44' class='department' points='3.4,15.2 3.4,15 3.9,14.8 3.9,14.5 3.2,14.2 3,13.5 3.6,13.4 4,13.6 4.6,13.7 4.9,13.5 5.6,13.8 6,13.9 6.2,14 6.6,13.6 7.2,14 7.1,14.4 7.6,14.7 7.6,15.2 7.5,15.8 7.5,16.4 6.8,16.8 6.4,16.7 6.1,16.4 5.3,16.3 5.6,16.2 5.3,15.8 4.8,15.9 4.6,16.1 4.5,16.5 4.4,16.1 4.5,16 4,15.6'/>

                                  <polygon data-department='35' data-adjacent='22,56,44,49,53,50' class='department' points='8.1,11.6 8,12 8.2,12.5 8,13.3 7.5,13.4 7.2,14 7.1,14.4 7.6,14.7 7.6,15.2 7.5,15.8 8.8,15.8 9.5,15.3 10,15.6 10.5,14.5 10.6,12.7 10.1,12.3 9.6,12.6 9.2,12 8.3,11.8'/>

                                  <path data-department='29' data-adjacent='22,56' class='department' d='M3.5,11.2H2.9l-0.2,0.4l-0.9-0.4L1,11.4l-0.7,0.2v0.9h0.8l0.4-0.3l-0.1,0.4l0.3,0.3L1.5,13 l-0.8-0.2l0.1,0.4L1,13l0.3,0.4l-0.4,0.2H0l0.9,0.5l0.2,0.7l0.8-0.2L2.6,15l0.8,0.2V15l0.5-0.2v-0.3l-0.7-0.3L3,13.5l0.6-0.1 l-0.1-1.3V11.2z'/>

                                  <polygon data-department='22' data-adjacent='29,56,35' class='department' points='6,12.2 7.2,11.6 8,12 8.2,12.5 8,13.3 7.5,13.4 7.2,14 6.6,13.6 6.2,14 6,13.9 5.6,13.8 4.9,13.5 4.6,13.7 4,13.6 3.6,13.4 3.5,12.1 3.5,11.2 3.7,10.7 5,10.7'/>

                                  <path data-department='44' data-adjacent='56,35,53,49,85' class='department' d='M7.4,17.5L7,18.2l0.7,0.4l1.2,0.8L9,18.7l0.3,0.4l0.6-0.5l0.4,0.2L10,18.1l-0.4-0.6l0.6-0.2 l0.5-0.1v-0.3l-0.5-0.3l0.1-0.5L10,15.6l-0.5-0.3l-0.6,0.6l-1.4-0.1v0.6l-0.7,0.4l-0.4-0.1l-0.3,0.8c0.2,0.1,0.5,0.1,0.7,0.1 C7,17.6,7.2,17.6,7.4,17.5z' />

                                  <polygon data-department='85' data-adjacent='44,49,79,17' class='department' points='9,21.3 9,21.7 9.6,21.8 10,21.8 10.6,21.6 11.1,21.8 11.8,21.6 11.4,19.8 10.7,18.7 10.3,18.8 9.9,18.5 9.3,19.1 9,18.7 8.9,19.4 7.7,18.6 7.1,19.3 7.7,20.1 7.9,20.9'/>

                                  <polygon data-department='17' data-adjacent='85,79,16,24,33' class='department' points='11.5,22.6 12.4,22.9 13,23.3 12.9,24.1 12,24.1 12,24.8 12.6,25.3 12.4,26.1 12.9,26.1 13.2,26.7 13,27.1 12.5,27 11.9,26.4 11.2,26 10.9,25.4 9.6,24.4 9.4,23.6 9.1,23 9.6,23.5 9.7,24 10.1,23.4 10.1,22.8 9.7,22.5 8.7,22 9.8,22.3 10,21.8 10.6,21.6 11.1,21.8'/>

                                  <path data-department='33' data-adjacent='17,24,47,40' class='department' d='M10,25.1l-0.2,0.6l-0.3,2.9l0.3-0.2l0.2,0.5L9.4,29l-0.1,0.5l0.7-0.2l0.2,0.5l0.6-0.1l0.7,0.4 l0.6,0.4v0.4h0.2l0.1-0.5l0.3,0.1l0.3,0.2l-0.2-0.4h0.4v-0.6l0.4-0.6l-0.2-0.5l0.5-0.1l0.1-0.3l-0.7,0.1l-0.2-0.4l0.2-0.6v-0.2H13 L12.5,27l-0.6-0.6L11.2,26v1.2l-0.4-1.1L10,25.1z'/>

                                  <polygon data-department='40' data-adjacent='33,47,32,64' class='department' points='8.4,33.5 9,33.7 10.6,33.6 12.2,33.6 12.4,32.2 13.1,32 13.2,32.1 13.4,31.2 12.7,31.1 12.7,30.5 12.4,30.3 12.3,30.8 12.1,30.8 12.1,30.5 11.5,30 10.8,29.6 10.2,29.8 10,29.3 9.3,29.5'/>

                                  <path data-department='64' data-adjacent='40,32,65' class='department' d='M8.9,35.4L9,35.7h0.2L9.9,36l0.8,0.1v0.5l0.7,0.2l0.5-0.4l0.2-0.6l0.2-0.1l0.1-0.3l0.6-0.9l-0.3-0.4l0.1-0.4h-0.2l-0.4-0.1 h-1.7L9,33.7l-0.6-0.2l-0.9,0.8l0.7,0.3l0.6,0.2l-0.2,0.6l-0.2,0.2c0,0.1,0.1,0.1,0.2,0.1C8.6,35.6,8.8,35.5,8.9,35.4z'/>

                                  <polygon data-department='65' data-adjacent='64,32,31' class='department' points='14.3,37.3 14.3,36.6 14.6,36.5 14.8,36.1 14.3,35.5 14.9,34.8 13.7,34.5 13.3,33.8 13,33.5 12.7,33.5 12.7,33.7 12.8,33.7 12.7,34.1 13,34.5 12.4,35.4 12.3,35.7 12.1,35.8 11.9,36.4 11.4,36.8 12.3,36.8 12.8,37.4 13.2,37.1 14,37.5'/>

                                  <polygon data-department='32' data-adjacent='40,64,65,31,82,47' class='department' points='15.4,34.3 16.1,34.5 16.4,33.9 16.9,33.7 16,32.7 15.8,32.2 15.4,32.2 15.7,31.7 15.4,31.6 14.7,31.5 13.6,32.1 13.2,32.1 13.1,32 12.4,32.2 12.2,33.6 12.6,33.7 12.7,33.7 12.7,33.5 13,33.5 13.3,33.8 13.7,34.5 14.9,34.8'/>

                                  <polygon data-department='47' data-adjacent='24,33,40,32,82,46' class='department' points='15.4,31.2 15.9,31.2 15.8,30.3 16.5,30.3 16.1,29.5 16.5,29.3 16.1,29.1 15.8,29.2 15.4,28.7 15.1,28.9 14.4,29 14.2,28.7 13.9,28.5 13.4,28.6 13.6,29.1 13.2,29.7 13.2,30.3 12.8,30.3 13,30.7 12.7,30.5 12.7,31.1 13.4,31.2 13.2,32.1 13.6,32.1 14.7,31.5 15.4,31.6'/>

                                  <polygon data-department='24' data-adjacent='47,33,16,87,19,46,17' class='department' points='15.5,24.6 15.6,25.1 16.1,25 16.5,25.2 16.8,25.5 17.1,25.7 17,26.3 17.1,27 17.5,27 17.5,28.1 17,28.7 16.5,29.3 16.1,29.1 15.8,29.2 15.4,28.7 15.1,28.9 14.4,29 14.2,28.7 13.9,28.5 14,28.2 13.3,28.3 13.1,27.9 13.3,27.3 13.3,27.1 13,27.1 13.2,26.7 13.7,26.6 14.2,26.1 14.1,25.6 14.9,25.2 14.9,24.8 15.1,24.8'/>

                                  <polygon data-department='16' data-adjacent='17,24,87,86,79' class='department' points='15.8,22.8 15.8,23.2 16.1,23.2 16,23.6 15.7,23.7 15.7,24.1 15.1,24.8 14.9,24.8 14.9,25.2 14.1,25.6 14.2,26.1 13.7,26.6 13.2,26.7 12.9,26.1 12.4,26.1 12.6,25.3 12,24.8 12,24.1 12.9,24.1 13,23.3 14,22.8 14.6,23 14.9,22.8'/>

                                  <polygon data-department='79' data-adjacent='17,16,86,49,85' class='department' points='13.1,18.7 13.5,19.8 13.4,21.2 13.4,21.9 13.9,21.8 13.8,22.4 14,22.8 13,23.3 12.4,22.9 11.5,22.6 11.1,21.8 11.8,21.6 11.4,19.8 10.7,18.7 11.7,18.9 12,18.5 13,18.5'/>

                                  <polygon data-department='49' data-adjacent='44,85,79,86,37,72,53,35' class='department' points='12.6,16 14.1,16.6 14,17.3 13.6,18.3 13,18.5 12,18.5 11.7,18.9 10.7,18.7 10.3,18.8 10,18.1 9.7,17.5 10.2,17.3 10.7,17.2 10.7,16.9 10.2,16.6 10.3,16.1 10,15.6 10.7,15.6 11.6,15.9 12.4,15.6'/>

                                  <polygon data-department='53' data-adjacent='35,44,49,72,61,50' class='department' points='13.1,12.4 13.6,13.1 13.2,13.5 12.9,14.2 12.7,15 12.4,15.6 11.6,15.9 10.7,15.6 10,15.6 10.5,14.5 10.6,12.7 11,12.5 11.5,12.7 12.6,12.5'/>

                                  <polygon data-department='50' data-adjacent='35,53,61,14' class='department' points='10.2,7.5 10.1,8.1 10.5,8.8 11.1,9.5 11.2,10.3 10.5,11 11,11.4 11.5,11.6 11.5,12.4 11,12.5 10.6,12.7 10.1,12.3 9.6,12.6 9.2,12 9.7,11.7 9.2,11.2 9.4,10.1 9,9 8.6,8 8.7,7.4 8.4,7.1 9.3,7.6 9.8,7.3'/>

                                  <polygon data-department='14' data-adjacent='50,61,27' class='department' points='14.5,8.6 14.8,9.5 14.8,10.6 14,10.7 13.3,11.2 12.4,10.9 11.4,11.4 11,11.4 10.5,11 11.2,10.3 11.1,9.5 10.6,8.9 12,8.9 13.2,9.3'/>

                                  <polygon data-department='61' data-adjacent='50,53,72,28,27,14' class='department' points='14.9,11 15.5,11.1 16.2,12.5 16.4,13.1 15.8,13.4 15.9,14 15.1,13.7 14.6,13.1 14.6,12.6 14,12.7 13.6,13.1 13.1,12.4 12.6,12.5 11.5,12.7 11,12.5 11.5,12.4 11.5,11.6 11,11.4 11.4,11.4 12.4,10.9 13.3,11.2 14,10.7 14.8,10.6'/>

                                  <path data-department='72' data-adjacent='61,53,49,37,41,28' class='department' d='M15.2,16l0.6-0.5l0.3-0.5l-0.2-1l-0.8-0.3L14.6,13v-0.4L14,12.7l-0.4,0.4l-0.4,0.4l-0.3,0.7 L12.7,15l-0.3,0.6l0.2,0.4l1.5,0.6L15.2,16z'/>

                                  <polygon data-department='37' data-adjacent='72,49,86,36,41' class='department' points='16,16.2 16.8,16.8 16.8,17.9 17.2,18.1 17.2,18.8 16.5,19 16.2,20.3 15.2,18.9 14.8,19.3 14.1,19.2 14.2,18.7 13.6,18.3 14,17.3 14.1,16.6 15.2,16'/>

                                  <polygon data-department='86' data-adjacent='37,49,79,16,87,36' class='department' points='17,21.6 16.5,21.1 16.1,20.7 16.2,20.3 15.2,18.9 14.8,19.3 14.1,19.2 14.2,18.7 13.6,18.3 13,18.5 13.5,19.8 13.4,21.2 13.4,21.9 13.9,21.8 13.8,22.4 14,22.8 14.6,23 14.9,22.8 15.8,22.8 16,22.1'/>

                                  <path data-department='76' data-adjacent='27,60,80' class='department' d='M16.5,9.3l-1.4-0.9l-0.6,0.2L14,8.3l0.2-0.8l1.6-0.7L17,6.7L17.5,6l1,0.8v0.8l0.2,1.2l-1.1-0.2 L16.5,9.3z'/>

                                  <polygon data-department='27' data-adjacent='14,61,28,78,95,60,76' class='department' points='18.5,9.6 17.8,10.4 17.7,11.1 17.4,11.6 15.9,11.9 15.5,11.1 14.9,11 14.8,10.6 14.8,9.5 14.5,8.6 15.1,8.4 16.5,9.3 17.6,8.6 18.7,8.8'/>

                                  <polygon data-department='28' data-adjacent='27,61,72,41,45,91,78' class='department' points='16.6,14.3 17.2,15.1 18,14.8 18.3,14.5 19,14.5 19.3,13.1 18.2,11.9 17.8,10.4 17.7,11.1 17.4,11.6 15.9,11.9 16.2,12.5 16.4,13.1 15.8,13.4 15.9,14'/>

                                  <polygon data-department='41' data-adjacent='28,72,37,36,18,45' class='department' points='18.1,15.7 18.8,16.3 20,16.2 19.7,16.7 20,17.1 19.7,17.5 19.7,17.9 19.1,17.9 18.9,18.3 18.4,17.9 17.5,18.2 17.2,18.1 16.8,17.9 16.8,16.8 16,16.2 15.2,16 15.8,15.5 16.1,15 15.9,14 16.6,14.3 17.2,15.1 18,14.8'/>

                                  <polygon data-department='36' data-adjacent='41,37,86,87,23,18' class='department' points='18.8,18.6 19.5,18.6 19.6,19.3 19.5,20.3 19.9,20.9 19.9,21.5 18.7,21.5 18.3,21.7 17.7,21.6 17,21.6 16.5,21.1 16.1,20.7 16.2,20.3 16.5,19 17.2,18.8 17.2,18.1 17.5,18.2 18.4,17.9 18.9,18.3'/>

                                  <polygon data-department='87' data-adjacent='86,16,24,19,23,36' class='department' points='17.5,22.6 17.9,23 17.9,23.6 18.2,23.6 18.8,24.3 18.8,24.8 17.8,25.4 17.1,25.7 16.8,25.5 16.5,25.2 16.1,25 15.6,25.1 15.5,24.6 15.1,24.8 15.7,24.1 15.7,23.7 16,23.6 16.1,23.2 15.8,23.2 15.8,22.8 16,22.1 17,21.6 17.6,21.8'/>

                                  <polygon data-department='19' data-adjacent='87,24,46,15,63,23' class='department' points='18.7,28 19.8,27.6 20,26.5 20.9,25.9 20.9,25.6 20.7,24.6 20,24.8 19.3,24.5 18.8,24.8 17.8,25.4 17.1,25.7 17,26.3 17.1,27 17.5,27 17.5,27.5 18.2,27.5'/>

                                  <path data-department='46' data-adjacent='19,24,47,82,12,15' class='department' d='M17.5,30.9l1.4-0.4l-0.1-0.7l0.9-0.4l0.1-0.9l-0.3-0.8L18.7,28l-0.5-0.5h-0.7v0.6L17,28.7 l-0.5,0.6l-0.4,0.2l0.4,0.8L17.5,30.9z'/>

                                  <polygon data-department='82' data-adjacent='46,47,32,31,81,12' class='department' points='19,31.3 18.2,31.5 17.8,32.4 17.1,32.4 17,32.7 16,32.7 15.8,32.2 15.4,32.2 15.7,31.7 15.4,31.6 15.4,31.2 15.9,31.2 15.8,30.3 16.5,30.3 17.5,30.9 18.9,30.5'/>

                                  <path data-department='31' data-adjacent='65,32,82,81,11,09' class='department' d='M18.4,33.5l0.9,0.6l-0.5,0.3l-0.6,0.8l-1-0.4l-0.3,0.8h-0.7L16,36.2l-0.5,0.2l0.1,0.5l-0.5-0.1 L15,37.4l-0.7-0.2v-0.6l0.3-0.1l0.2-0.4l-0.5-0.6l0.6-0.7l0.5-0.5l0.7,0.2l0.3-0.6l0.5-0.2l-0.9-1h1l0.1-0.3h0.7L18.4,33.5z'/>

                                  <polygon data-department='09' data-adjacent='31,11,66' class='department' points='16.4,37.1 16.6,37.4 17.6,37.7 18.5,37.7 18.4,38.1 20,37.5 19.4,37.2 18.7,36.8 19.2,36.7 19,35.5 18.2,35.2 17.2,34.8 16.9,35.6 16.2,35.6 16,36.2 15.5,36.4 15.6,36.9'/>

                                  <path data-department='66' data-adjacent='09,11' class='department' d='M22.4,36.8V38l0.4,0.5l-0.6-0.1L21.1,39l-1-0.3h-0.5L19.4,39L19,38.8v-0.4l-0.6-0.3l1.6-0.6 l0.3-0.2l-0.1-0.5h1.5l0.1-0.3L22.4,36.8z' />

                                  <polygon data-department='11' data-adjacent='66,09,31,81,34' class='department' points='19.9,34.5 20,34.2 21,34.2 20.9,34.7 21.1,34.9 21.5,35 21.9,34.7 22.8,35.3 22.7,35.7 22.2,35.6 22.2,35.8 22.4,36 22.4,36.8 21.8,36.5 21.7,36.8 20.2,36.8 20.3,37.3 20,37.5 19.4,37.2 18.7,36.8 19.2,36.7 19,35.5 18.2,35.2 18.8,34.4 19.3,34.1'/>

                                  <polygon data-department='81' data-adjacent='82,31,11,34,12' class='department' points='20.5,31.6 21,31.9 21.3,32.9 22.1,33 22.1,33.3 21.3,33.5 21.4,34.1 21,34.2 20,34.2 19.9,34.5 19.3,34.1 18.4,33.5 17.8,32.4 18.2,31.5 19,31.3'/>

                                  <polygon data-department='12' data-adjacent='15,46,82,81,34,30,48' class='department' points='20.8,29 21.1,28 21.6,28 22.2,29 22.6,29.8 22.8,30.9 23.5,31.3 23.5,32.3 22.1,33 21.3,32.9 21,31.9 20.5,31.6 19,31.3 18.9,30.5 18.8,29.8 19.7,29.4'/>

                                  <polygon data-department='48' data-adjacent='15,12,30,07,43' class='department' points='22.7,28 23.6,27.8 23.8,28.4 24.9,28.5 25.3,30 25.1,31.4 24.3,31.2 23.8,31.4 23.5,31.3 22.8,30.9 22.6,29.8 22.2,29'/>

                                  <polygon data-department='15' data-adjacent='19,46,12,48,43,63' class='department' points='22.9,26.4 23.6,27.8 22.7,28 22.2,29 21.6,28 21.1,28 20.8,29 19.7,29.4 19.8,28.5 19.5,27.7 19.8,27.6 20,26.5 20.9,25.9 20.9,25.6 22.3,26.2'/>

                                  <polygon data-department='23' data-adjacent='36,87,19,63,03,18' class='department' points='20.7,22.1 21.1,23.5 20.5,24.1 20.7,24.6 20,24.8 19.3,24.5 18.8,24.8 18.8,24.3 18.2,23.6 17.9,23.6 17.9,23 17.5,22.6 17.6,21.8 17,21.6 17.7,21.6 18.3,21.7 18.7,21.5 19.9,21.5'/>

                                  <polygon data-department='34' data-adjacent='30,12,81,11' class='department' points='23.5,34.9 24,34.9 26,33.3 25.1,32.4 24.6,32 24.1,32.5 23.5,32.3 22.1,33 22.1,33.3 21.3,33.5 21.4,34.1 21,34.2 20.9,34.7 21.1,34.9 21.5,35 21.9,34.7 22.8,35.3'/>

                                  <polygon data-department='30' data-adjacent='34,12,48,07,84,13' class='department' points='25.9,34 26.9,33.5 26.9,33 27.4,33 27.7,32.2 28.1,31.9 27.1,30.5 27,30.4 25.9,30.4 25.3,30 25.1,31.4 24.3,31.2 23.8,31.4 23.5,31.3 23.5,32.3 24.1,32.5 24.6,32 25.1,32.4 26,33.3'/>

                                  <polygon data-department='07' data-adjacent='43,48,30,84,26,42,38' class='department' points='27.7,26.1 28.1,27.8 27.6,30.3 27.1,30.5 27,30.4 25.9,30.4 25.3,30 24.9,28.5 26,28 26.9,26.5 27.1,26.1'/>

                                  <polygon data-department='43' data-adjacent='42,63,15,48,07' class='department' points='24.7,26.1 25.6,26.1 26,25.9 26.9,26.5 26,28 24.9,28.5 23.8,28.4 23.6,27.8 22.9,26.4 22.3,26.2 23.8,25.8'/>

                                  <polygon data-department='63' data-adjacent='03,23,19,15,43,42' class='department' points='22.6,23.1 23.6,23.1 24.1,23.5 24.6,23.8 24.5,24.5 25.1,25.2 24.9,26.1 24.7,26.1 23.8,25.8 22.3,26.2 20.9,25.6 20.7,24.6 20.5,24.1 21.1,23.5 20.9,22.8 22,22.3'/>

                                  <polygon data-department='03' data-adjacent='58,18,23,63,42,71' class='department' points='21.1,21.1 21,20.4 22.3,19.9 22.8,20.5 23.7,20.5 24.1,20.2 24.6,21.1 25.3,21.3 25.1,22.1 24.6,22.4 24.8,23.5 24.1,23.5 23.6,23.1 22.6,23.1 22,22.3 20.9,22.8 20.7,22.1 20,21.6 20.4,21.2'/>

                                  <polygon data-department='18' data-adjacent='58,89,45,41,36,23,03' class='department' points='21.9,17 21.7,17.8 22.3,18.4 22.3,19.9 21,20.4 21.1,21.1 20.4,21.2 20,21.6 19.9,21.5 19.9,20.9 19.5,20.3 19.6,19.3 19.5,18.6 18.8,18.6 18.9,18.3 19.1,17.9 19.7,17.9 19.7,17.5 20,17.1 19.7,16.7 20,16.2 21.4,16.9 21.5,16.9'/>

                                  <polygon data-department='45' data-adjacent='18,58,89,77,91,28,41' class='department' points='20.6,13.5 20.9,13.9 20.6,14.3 21.5,14.2 22,14 22.7,14.9 21.8,15.9 22.1,16.6 21.5,16.9 21.4,16.9 20,16.2 18.8,16.3 18.1,15.7 18,14.8 18.3,14.5 19,14.5 19.2,13.5'/>

                                  <polygon data-department='77' data-adjacent='75,91,45,89,10,51,02,60,95' class='department' points='21,10.7 21,11.8 20.8,13.1 20.6,13.5 20.9,13.9 20.6,14.3 21.5,14.2 22,14 22.4,13.1 23.3,13.1 23.6,12.1 23.4,12.1 23.4,11.1 22.5,10.5 22.6,10.1 21.8,10.3 21,10.2'/>

                                  <polygon data-department='91' data-adjacent='75,78,28,45,77' class='department' points='20,11.5 19.4,12.1 19.4,12.5 19.1,12.9 19.3,13.1 19.2,13.5 20.6,13.5 20.8,13.1 21,11.8 20.5,11.8'/>

                                  <polygon data-department='51' data-adjacent='08,02,77,10,52,55' class='department' points='25,8.8 24,9.1 24,9.6 23.9,10 24,10.6 23.4,11.1 23.4,12.1 23.6,12.1 24.2,12.4 25.7,11.7 26.1,12.5 27,12.4 27.5,12.3 27.9,11.6 27.5,11 27.9,10.4 27.5,9.3 26.4,9.4'/>

                                  <polygon data-department='02' data-adjacent='08,59,62,80,60,77,51' class='department' points='22.7,6.2 22.3,7.1 22.4,7.7 22.5,8.9 22.1,9.3 22.1,9.7 22.6,10.1 22.5,10.5 23.4,11.1 24,10.6 23.9,10 24,9.6 24,9.1 25,8.8 25.1,7.8 25.5,7.2 25.5,6.4 25.1,6.3 24,6.2'/>

                                  <path data-department='60' data-adjacent='80,76,27,95,77,02' class='department' d='M19.7,7.7L21,8l1.4-0.3l0.1,1.2l-0.4,0.4v0.4l0.5,0.4l-0.8,0.2L21,10.2l-0.9-0.4h-1.8l0.2-0.2 l0.2-0.8l-0.2-1.2V6.8L19,7.7H19.7z' />

                                  <polygon data-department='80' data-adjacent='62,76,60,02,59' class='department' points='18,5.4 18.5,5.4 18.1,4.7 19.1,4.8 19.7,5.3 20.6,5.3 20.5,5.8 21.8,6 22.4,6 22.7,6.2 22.3,7.1 22.4,7.7 21,8 19.7,7.7 19,7.7 18.5,6.8 17.5,6'/>

                                  <polygon data-department='62' data-adjacent='59,80' class='department' points='19.5,1.9 20,2.9 20.4,2.9 20.4,3.2 21.4,3.7 21.6,3.5 21.6,4.1 22.2,4.2 22.1,4.6 22.3,5 22.5,5.3 22.4,5.7 22.4,6 21.8,6 20.5,5.8 20.6,5.3 19.7,5.3 19.1,4.8 18.1,4.7 18.1,2.6 18.9,2.1'/>

                                  <polygon data-department='59' data-adjacent='62,80,02' class='department' points='22.8,3.9 23.2,4.2 23.6,4.2 23.9,4.8 25,4.7 25.4,5.2 25.1,5.4 25.4,5.8 25.1,6.3 24,6.2 22.7,6.2 22.4,6 22.4,5.7 22.5,5.3 22.3,5 22.1,4.6 22.2,4.2 21.6,4.1 21.6,3.5 21.4,3.7 20.4,3.2 20.4,2.9 20,2.9 19.5,1.9 20.3,1.9 20.9,1.7 21,2.1 21,2.8 21.8,3.2 22.4,3'/>

                                  <polygon data-department='08' data-adjacent='02,51,55' class='department' points='26.2,6.4 27.1,5.5 27,6.4 27.3,7 28.4,7.5 28.6,8 28,8 27.5,9.3 26.4,9.4 25,8.8 25.1,7.8 25.5,7.2 25.5,6.4'/>

                                  <polygon data-department='78' data-adjacent='95,27,28,91,75' class='department' points='17.8,10.4 18.5,10.3 19.3,10.5 19.9,10.6 20,11.5 19.4,12.1 19.4,12.5 19.1,12.9 18.2,11.9'/>

                                  <polygon data-department='95' data-adjacent='60,27,78,75,77' class='department' points='20.6,10.7 21,10.7 21,10.2 20.1,9.8 18.3,9.8 17.8,10.4 18.5,10.3 19.3,10.5 19.9,10.6 19.9,10.9'/>

                                  <polygon data-department='10' data-adjacent='51,77,89,21,52' class='department' points='23.3,13.1 24,13.5 23.9,14 24.8,15.1 25.9,15.1 26.8,14.6 27.6,14.3 27.5,13.3 26.9,12.8 27,12.4 26.1,12.5 25.7,11.7 24.2,12.4 23.6,12.1'/>

                                  <polygon data-department='89' data-adjacent='10,77,45,58,21' class='department' points='23.6,16.7 25.4,17.7 25.4,16.8 26,15.5 25.9,15.1 24.8,15.1 23.9,14 24,13.5 23.3,13.1 22.4,13.1 22,14 22.7,14.9 21.8,15.9 22.1,16.6'/>

                                  <polygon data-department='58' data-adjacent='89,45,18,03,71,21' class='department' points='25.3,19.9 25.3,18.5 25.8,18.4 25.8,18 25.4,17.7 23.6,16.7 22.1,16.6 21.5,16.9 21.9,17 21.7,17.8 22.3,18.4 22.3,19.9 22.8,20.5 23.7,20.5 24.1,20.2 24.2,20.4'/>

                                  <polygon data-department='75' data-adjacent='77,95,78,91' class='department' points='20.6,10.7 21,10.7 21,11.8 20.5,11.8 20,11.5 19.9,10.9'/>

                                  <polygon data-department='21' data-adjacent='52,10,89,58,71,39,70' class='department' points='27.9,15.4 27.9,16 28.8,16.5 29.4,16.4 29.2,17.1 29.4,18.3 28.6,19.1 27.1,19.4 25.8,18.4 25.8,18 25.4,17.7 25.4,16.8 26,15.5 25.9,15.1 26.8,14.6'/>

                                  <path data-department='52' data-adjacent='55,51,10,21,70,88' class='department' d='M29.1,12.8l-0.2,0.3l1.1,0.7l-0.3,0.5l0.7,0.6l-0.5,1.2l-0.5,0.3l-0.6,0.1L27.9,16v-0.6l-1.1-0.8 l0.8-0.3l-0.1-1l-0.6-0.5l0.1-0.4l0.5-0.1l0.4-0.7L29.1,12.8z'/>

                                  <polygon data-department='55' data-adjacent='08,51,52,88,54' class='department' points='30,9.9 30,11 30,12.5 29.1,12.8 27.9,11.6 27.5,11 27.9,10.4 27.5,9.3 28,8 28.6,8 29,8.6 29.5,8.4'/>

                                  <polygon data-department='88' data-adjacent='54,55,52,70,68,67,57,90' class='department' points='31.2,12.8 32.5,12.5 33.2,12.7 33.8,12.2 34.1,13.1 33.4,15.1 33.4,15.1 30.4,14.9 29.7,14.3 30,13.8 28.9,13.1 29.1,12.8 30,12.5'/>

                                  <polygon data-department='54' data-adjacent='55,88,67,57' class='department' points='30.5,10.1 31.7,11.1 33.8,12.2 33.2,12.7 32.5,12.5 31.2,12.8 30,12.5 30,9.9 29.5,8.4 29,8.6 29,8.1 29.8,8 30.4,8.4'/>

                                  <path data-department='57' data-adjacent='54,67,88' class='department' d='M32,8.5l0.6,0.9l0.5-0.2l0.6,0.4l0.7-0.1l0.7,0.4l-0.4,0.6l-1.2-0.4l-0.3,0.6l0.4,0.5l0.7-0.1V12 l-0.5,0.2l-2.1-1.1l-1.2-1l-0.1-1.7L32,8.5z'/>

                                  <polygon data-department='67' data-adjacent='57,54,88,68' class='department' points='35.7,12.2 35.2,13.7 34.1,13.1 33.8,12.2 34.3,12 34.3,11.1 33.6,11.2 33.2,10.7 33.5,10.1 34.7,10.5 35.1,9.9 36.7,10 36.5,10.8 35.7,11.6'/>

                                  <polygon data-department='68' data-adjacent='67,88,70,90' class='department' points='35.2,13.7 35,15.7 35.2,16.1 35,16.8 34.3,16.8 34.1,16.4 33.8,16.1 34,15.5 33.4,15.1 34.1,13.1'/>

                                  <polygon data-department='70' data-adjacent='90,68,88,52,21,39,25' class='department' points='29.7,17.7 31.3,17.3 32.1,16.6 33,16.4 33.4,15.1 30.4,14.9 29.9,16.1 29.4,16.4 29.2,17.1'/>

                                  <polygon data-department='90' data-adjacent='68,88,70,25' class='department' points='33.8,16.8 33,16.4 33.4,15.1 34,15.5 33.8,16.1 34.1,16.4 34.2,16.6'/>

                                  <path data-department='25' data-adjacent='90,70,39' class='department' d='M33,18.2L32.3,19l-0.2,0.8l-0.7,0.8l-0.1-0.5l0.3-0.2L31,19.4l-0.1-0.6l-0.6-0.1l0.2-0.5 l-0.4-0.6l1.2-0.3l0.8-0.7l0.9-0.2l0.8,0.4l-0.3,0.3l0.4,0.1L33,18.2z'/>

                                  <polygon data-department='39' data-adjacent='25,70,21,71,01' class='department' points='29,21.4 29.6,22 30.1,21.7 30.5,22 31.3,21.4 31.4,20.6 31.3,20.1 31.6,19.9 31,19.4 30.9,18.8 30.3,18.7 30.5,18.2 30.1,17.6 29.7,17.7 29.2,17.1 29.4,18.3 28.6,19.1 29.3,19.5 29,19.8 29.3,21.2'/>

                                  <path data-department='71' data-adjacent='39,21,58,03,42,69,01' class='department' d='M25.2,22.5l0.8,0.1l0.5,0.1l-0.1-0.6h0.8l0.3,0.5L28,21l1,0.4l0.3-0.2L29,19.8l0.3-0.3l-0.7-0.4 l-1.5,0.3l-1.3-1l-0.5,0.1v1.4l-1.1,0.5l0.4,0.7l0.7,0.2l-0.2,0.8l-0.5,0.3l0.3-0.1L25.2,22.5z'/>

                                  <path data-department='69' data-adjacent='01,71,42,38' class='department' d='M26.1,23.1l0.3,0.8v0.9l0.7,0.2l0.1,0.4h0.7L27.7,25l0.8-0.2l0.1-0.8L28,23.9l-0.6-0.5l0.1-0.8 l-0.3-0.5h-0.8l0.1,0.6L26,22.6L26.1,23.1z'/>

                                  <polygon data-department='42' data-adjacent='69,71,03,63,43,07,26,38' class='department' points='27.6,25.4 27.5,26.1 27.1,26.1 26.9,26.5 26,25.9 25.6,26.1 24.9,26.1 25.1,25.2 24.5,24.5 24.6,23.8 24.1,23.5 24.8,23.5 24.6,22.4 24.9,22.3 25.2,22.5 26,22.6 26.1,23.1 26.4,23.9 26.4,24.8 27.1,25 27.2,25.4'/>

                                  <polygon data-department='01' data-adjacent='39,71,69,38,73,74' class='department' points='30.7,22.8 30.7,23.9 30,24.6 29.4,23.8 28.6,24 28,23.9 27.4,23.4 27.5,22.6 28,21 29,21.4 29.6,22 30.1,21.7 30.5,22 31.3,21.4 31.5,21.5 31,22.2 31,22.6'/>

                                  <polygon data-department='38' data-adjacent='73,01,69,42,07,26,05' class='department' points='28.3,26.1 28.9,26.3 28.9,27.1 29.6,27.2 29.9,27.1 29.9,28.3 30.8,28.8 32.5,27.8 31.9,27.2 32,26.7 31.6,26.4 31.9,25.8 30.9,25.4 30.4,25.4 30,24.6 29.4,23.8 28.6,24 28.5,24.8 27.7,25 27.9,25.4 27.6,25.4 27.5,26.1 27.7,26.1'/>

                                  <path data-department='73' data-adjacent='74,01,38,05' class='department' d='M32.8,27.1l0.5-0.3l1.3-0.7l-0.3-1l-0.2-0.6L33.4,24l-0.7-0.5L32.3,24l-0.5,0.2l-1.1-0.3L30,24.6 l0.4,0.8h0.5l1,0.4l-0.3,0.6l0.4,0.3L32.8,27.1z'/>

                                  <polygon data-department='74' data-adjacent='01,73' class='department' points='32,22 31.9,21.6 32.3,21.6 32.6,21.3 33.3,21.3 33.7,21.8 33.4,22.2 33.7,22.4 34.3,23.2 33.4,24 32.7,23.5 32.3,24 31.8,24.2 30.7,23.9 30.7,22.8 31,22.6'/>

                                  <polygon data-department='05' data-adjacent='73,38,26,84,04' class='department' points='33.8,27.8 34.3,27.8 34.5,28.4 33.8,29.1 33.4,29.7 32.1,29.6 31.3,30 31.1,30.8 30.5,30.8 30.4,30.4 29.8,30.1 29.9,29.5 30.3,29.6 30.3,28.9 30.8,28.8 32.5,27.8 31.9,27.2 32,26.7 32.8,27.1 33.3,26.8'/>

                                  <path data-department='04' data-adjacent='05,26,84,13,83,06' class='department' d='M30,31.3l0.8,1.5l0.4-0.2l0.5,0.4l0.8-0.5l0.3,0.2l0.3-0.3h0.6l0.2-0.4l0.7-0.1L33.8,31l0.1-0.6 l0.5-0.5L34,29.3l0.5-0.9l-0.7,0.7l-0.5,0.6l-1.2-0.1L31.3,30l-0.2,0.8h-0.6L30,31.3z'/>

                                  <polygon data-department='26' data-adjacent='38,07,84,04,05' class='department' points='28.5,30.5 29,30.8 29.5,30.9 30,31.3 30.5,30.8 30.4,30.4 29.8,30.1 29.9,29.5 30.3,29.6 30.3,28.9 30.8,28.8 29.9,28.3 29.9,27.1 29.6,27.2 28.9,27.1 28.9,26.3 28.3,26.1 27.7,26.1 28.1,27.8 27.6,30.3 27.9,30.8'/>

                                  <polygon data-department='84' data-adjacent='26,07,30,13,83,04' class='department' points='28.9,32.8 29.5,32.8 30.1,33.2 30.8,32.8 30,31.3 29.5,30.9 29,30.8 28.5,30.5 27.9,30.8 27.6,30.3 27.1,30.5 28.1,31.9 27.7,32.2 28.4,32.2'/>

                                  <polygon data-department='13' data-adjacent='30,84,83' class='department' points='27.4,34.6 28.2,34.6 27.9,34.3 28.2,34.1 28.6,34.5 29.6,34.5 29.7,35 30.7,35.1 30.9,34.8 30.6,34.2 30.9,34.1 30.7,33.3 31.1,33 30.8,32.8 30.1,33.2 29.5,32.8 28.9,32.8 28.4,32.2 27.7,32.2 27.4,33 26.9,33 26.9,33.5 25.9,34 27.4,34.1'/>

                                  <path data-department='83' data-adjacent='06,04,84,13' class='department' d='M32.2,35.5l1.6-0.5c-0.1-0.1-0.1-0.3-0.2-0.4l0.3-0.5l0.7-0.1l-0.1-0.5l-0.9-1.1h-0.5l-0.3,0.3 l-0.3-0.2L31.7,33l-0.5-0.4l-0.4,0.2l0.3,0.2l-0.4,0.3l0.2,0.8l-0.3,0.1l0.3,0.6l-0.2,0.3l0.6,0.5L32.2,35.5z'/>

                                  <polygon data-department='06' data-adjacent='04,83' class='department' points='35.8,30.9 36.5,30.6 36.8,31.3 36.2,31.6 36.2,32.4 35.6,32.9 35.2,32.9 35,33.3 34.5,33.5 33.6,32.4 33.7,32.4 33.9,32 34.6,31.9 33.8,31 33.9,30.4 34.4,29.9 34.4,30.3 34.5,30.5 35.4,30.9'/>

                                  <path data-department='2B' data-adjacent='2A' class='department' d='M33,38l0.5,0.2l0.5,0.3l0.4,0.2l0.6,0.9l0.5,0.5l0.2-0.6c0,0,0.3-0.4,0.3-0.5s-0.2-2-0.2-2l-0.3-0.2l-0.1-1.6h-0.3v1.3h-0.9 L33,38z'/>

                                  <polygon data-department='2A' data-adjacent='2B' class='department' points='35.2,42.1 33.7,41.4 34.1,40.9 33.3,40.6 33.3,39 33,38 33.5,38.1 33.9,38.5 34.4,38.6 35,39.5 35.5,40.1'/>

                                  <path class='country country-select' data-country='belgique' d='M23,0.5V0.9L23.4,1l0.1-.2L24.2,1V1.2l0.6-.1,0.5-.6h0.5l-0.2-.3L26.2,0l0.1,0.3L26.8,0,27,0.3c0.1,0,.1.1,0.2,0.1A1.38,1.38,0,0,0,27.5,0L28,0.9l0.7-.1L29,1.2l0.5,0.1,0.2,0.1L29.2,2.6,29.3,3l1,0.2,0.5,0.5L30.6,4l0.5,0.5V4.9l-0.6.7L30,5.5,29.4,6.6l0.2,0.8L29.8,8,29,8.1V8.6L28.6,8l-0.2-.5L27.3,7,27,6.4l0.1-.9-0.9.9H25.5l-0.43-.05L25.4,5.8l-0.3-.4,0.3-.2L25,4.7l-1.1.1-0.3-.6H23.2l-0.4-.3L22.4,3l-0.6.2L21,2.8V2.1l-0.1-.4L22,0.9Z'/>

                                  <polygon class='country country-select' data-country='suisse' points='34.1 23.4 34.5 23.6 35.6 23.1 36.4 23.3 37.3 22.2 37.2 21.7 38 20.9 38.2 21.3 38.1 21.9 39.2 22.7 39.6 23.6 40.1 23.5 39.8 22.8 40.3 22.2 40.6 21.5 40.6 20.8 41.3 21.5 41.7 21.7 42.5 21.3 43 21.9 43.3 21.7 42.8 20.9 43 20.2 44 20.5 44.1 20.2 43.7 19.9 44 18.8 43.6 18.6 43.2 19.2 42.3 18.9 42.2 18.4 41.1 18.4 41.2 17.7 41.7 16.9 41 16.5 40.2 15.8 39.2 15.9 38.5 15.3 37.8 15.8 38.3 15.9 37.9 16.3 37.4 16 36.8 16.4 36.3 16.2 35.8 16.5 35.2 16.1 35 16.8 34.3 16.8 34.2 16.6 33.8 16.8 33.5 17.1 33.9 17.2 32.3 19 32.1 19.8 31.4 20.6 31.3 21.4 31.5 21.5 31 22.2 31 22.6 32 22 31.9 21.6 32.3 21.6 32.6 21.3 33.3 21.3 33.7 21.8 33.4 22.2 33.7 22.4 34.3 23.2 34.1 23.4'/>

                                  <g>
                                    <path class='country' d='M36.5,30.6l-0.7.3H35.4l-0.9-.4-0.12-.2,0.02-.4L34,29.3l0.5-.9-0.2-.6H33.8l-0.4959-.9918,0.0383-.0222L34.6,26.1l-0.3-1-0.2-.6L33.4,24l0.9-.8-0.6-.8-0.3-.2,0.3-.4-0.4-.5H32.6l-0.3.3H31.9L32,22l-1,.6V22.2l0.5-.7-0.2-.1,0.1-.8,0.7-.8,0.2-.8,0.7-.8,0.9-1-0.4-.1,0.3-.3,0.4-.2,0.1,0.2H35l0.2-.7L35,15.7l0.2-2,0.5-1.5V11.6l0.8-.8,0.2-.8-1.6-.1-0.7-.4-0.7.1-0.6-.4-0.5.2L32,8.5l-1.6-.1L29.8,8,29,8.1V8.6L28.6,8l-0.2-.5L27.3,7,27,6.4l0.1-.9-0.9.9H25.5l-0.43-.05L25.4,5.8l-0.3-.4,0.3-.2L25,4.7l-1.1.1-0.3-.6H23.2l-0.4-.3L22.4,3l-0.6.2L21,2.8V2.1l-0.1-.4-0.6.2H19.5l-0.6.2-0.8.5V4.7l0.4,0.7H18L17.5,6,17,6.7l-1.2.1-1.6.7L14,8.3l0.5,0.3-1.3.7L12,8.9H10.6l0.5,0.6-0.6-.7-0.4-.7,0.1-.6L9.8,7.3l-0.5.3L8.4,7.1,8.7,7.4,8.6,8,9,9l0.4,1.1L9.2,11.2l0.5,0.5L9.2,12l-0.9-.2-0.2-.2L8,12l-0.8-.4L6,12.2,5,10.7H3.7l-0.2.5H2.9l-0.2.4-0.9-.4L1,11.4l-0.7.2v0.9H1.1l0.4-.3-0.1.4,0.3,0.3L1.5,13l-0.8-.2,0.1,0.4L1,13l0.3,0.4-0.4.2H0l0.9,0.5,0.2,0.7,0.8-.2L2.6,15l0.8,0.2L4,15.6,4.5,16l-0.1.1,0.1,0.4,0.1-.4,0.2-.2,0.5-.1,0.3,0.4-0.3.1,0.8,0.1,0.3,0.3-0.3.8a1.7022,1.7022,0,0,0,.7.1,1.2688,1.2688,0,0,0,.6-0.1L7,18.2l0.7,0.4-0.6.7,0.6,0.8,0.2,0.8L9,21.3v0.4l0.6,0.1H10l-0.2.5L8.7,22l1,0.5,0.4,0.3v0.6L9.7,24l-0.1-.5L9.1,23l0.3,0.6,0.2,0.8,1.3,1L11.2,26v1.2l-0.4-1.1-0.8-1-0.2.6L9.5,28.6l0.3-.2L10,28.9,9.4,29l-0.1.5-0.9,4-0.9.8,0.7,0.3,0.6,0.2-0.2.6-0.2.2c0,0.1.1,0.1,0.2,0.1a0.8483,0.8483,0,0,1,.3-0.3L9,35.7H9.2L9.9,36l0.8,0.1v0.5l0.7,0.2h0.9l0.5,0.6,0.4-.3L14,37.5l0.3-.2V37.2L15,37.4l0.1-.6,0.5,0.1,0.8,0.2,0.2,0.3,1,0.3h0.9l-0.1.4L19,38.4v0.4L19.4,39l0.2-.3h0.5l1,0.3,1.1-.6,0.6,0.1L22.4,38V36l-0.2-.2V35.6l0.5,0.1,0.1-.4,0.7-.4H24l2-1.6-0.1.7,1.5,0.1v0.5h0.8l-0.3-.3,0.3-.2,0.4,0.4h1L29.7,35l1,0.1,0.6,0.5,0.9-.1,1.6-.5c-0.1-.1-0.1-0.3-0.2-0.4l0.3-.5,0.7-.1-0.1-.5,0.5-.2,0.2-.4h0.4l0.6-.5V31.6l0.6-.3Z'/>
                                    <path class='country' d='M35.8,37l-0.3-.2-0.1-1.6H35.1v1.3H34.2L33,38l0.3,1v1.6l0.8,0.3-0.4.5,1.5,0.7,0.3-2,0.2-.6A2.1864,2.1864,0,0,0,36,39C36,38.9,35.8,37,35.8,37Z'/>
                                  </g>
                                </svg>
                            </div>
                            <div id='mapFormDom' class='map-form map-form-extra map-form-dom'>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.52 5.46" class='department' data-department='971' width='55'>
                                        <polygon points="1.93 3.19 2.37 2.72 3.24 3.19 5.4 2.41 3.66 1.44 3.49 0.34 3.02 0.06 2.4 0.75 2.93 1.63 2.43 2.31 1.71 2.35 0.52 1.63 0.05 2.16 0.65 5.41 1.83 5.41 2.58 4.66 1.93 3.19"/>
                                    </svg>
                                    <b>Guadeloupe</b>
                                </div><div class='small'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.14 6.09" class='department' data-department='972' width='50'>
                                        <polygon points="0.05 0.59 0.05 1.21 0.8 1.62 0.8 2.43 1.55 3.34 2.3 3.34 2.71 4.05 1.71 3.9 1.38 4.59 2.11 5.05 3.44 4.93 4.27 4.8 3.74 5.8 4.08 6.02 5.08 4.8 4.21 2.87 4.27 2.43 3.89 2.31 3.08 1.59 4.11 1.59 4.3 1.12 2.96 1.21 1.99 0.4 0.74 0.06 0.05 0.59"/>
                                    </svg>
                                    <b>Martinique</b>
                                </div><div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.29 5.27" class='department' data-department='974' width='55'>
                                        <path d="M0.78,0.67C1,0.57,1.93.14,1.93,0.14L4.81,0.4,5.06,1.67,6.31,2.76V4L6,5.17,3.74,5.3,2,4.45,1,4.14,0.53,3.29,0.12,2.45V1.7Z" transform="translate(-0.07 -0.08)"/>
                                    </svg>
                                    <b>Réunion</b>
                                </div><div class='small'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4.49 5.61" class='department' data-department='973' width='50'>
                                        <polygon points="1.77 0.03 3.49 0.46 3.96 1.37 4.46 1.93 3.77 3.49 3.4 4.74 2.49 5.59 1.96 5.15 1.24 5.06 0.68 5.34 0.21 5.03 0.84 3.12 0.03 1.49 0.78 0.03 1.77 0.03"/>
                                    </svg>
                                    <b>Guyane</b>
                                </div>
                            </div>
                            <div id='mapFormCom' class='map-form map-form-extra'>
                                <div>
                                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 6.69 5.17' class='department' data-department='977' width='65'>
                                        <polygon points='0.31 2.3 1.1 3.13 1.77 3.13 1.77 4.05 2.73 5.11 5.19 4.84 5.73 3.97 6.64 3.97 6.64 2.67 4.94 2.13 4.39 2.13 3.89 2.92 2.94 2.92 2.81 2.13 1.14 1.76 0.73 1.01 0.06 1.01 0.31 2.3'/>
                                        <polygon points='1.44 1.01 1.69 1.38 2.48 1.01 1.96 0.63 1.44 1.01'/>
                                        <polygon points='2.69 0.05 2.69 0.63 3.35 0.63 3.64 0.05 2.69 0.05'/>
                                        <polygon points='5.73 1.59 5.73 2.01 6.23 2.01 5.73 1.59'/>
                                    </svg>
                                    <b>St-Barthélémy</b>
                                </div><div class='small'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.53 4.54"class='department' data-department='978' width='50'>
                                        <polygon points="0.27 2.01 0.06 2.42 1.36 3.3 1.81 3.3 2.44 3.3 2.44 3.88 3.69 4.17 4.4 3.8 4.56 4.42 5.48 3.22 5.48 1.43 5.12 0.8 5.31 0.05 4.06 0.05 3.44 1.09 2.77 1.55 2.61 2.24 1.98 2.47 0.27 2.01"/>
                                    </svg>
                                    <b>St-Martin</b>
                                </div><div>
                                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 15.68 13.35' class='department' data-department='988' width='75'>
                                        <polygon points='12.5 12.43 12.12 12.79 12.5 13.29 13.03 13.11 13.03 12.79 12.5 12.43'/>
                                        <polygon points='1.12 1.99 2.97 5.77 6.25 9.02 10.5 12.08 11.31 11.52 11.15 10.66 9.37 8.99 6.22 6.3 5.47 5.08 4.25 4.21 1.97 2.17 1.12 1.99'/>
                                        <polygon points='0.06 0.05 0.28 1.25 0.53 0.65 0.29 0.05 0.06 0.05'/>
                                        <polygon points='9.59 5.46 10.22 5.08 10.22 4.35 10.97 4.67 10.28 5.83 9.59 5.83 9.59 5.46'/>
                                        <polygon points='11.59 6.54 12.12 7.36 13.03 7.77 13.47 7.15 13.03 6.42 12.9 5.83 11.81 5.83 11.59 6.54'/>
                                        <polygon points='14.19 8.46 14.19 9.58 15.06 9.96 15.62 9.21 15.44 8.77 14.9 8.46 14.19 8.46'/>
                                        <rect x='14.37' y='7.52' width='0.53' height='0.44'/>
                                    </svg>
                                    <b>Nlle Calédonie</b>
                                </div><div class='small'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.78 7.38" class='department' data-department='976' width='50'>
                                        <polygon points="3.55 3.9 3.55 4.91 4.22 5.61 3.55 6.03 3.34 6.57 3.51 6.91 2.42 7.32 1.38 6.61 0.88 6.36 1.3 5.99 1.09 5.41 1.8 5.32 1.8 5.82 2.26 6.03 2.34 4.91 1.51 4.41 1.68 3.74 0.88 2.9 0.05 2.9 0.05 1.57 1.68 0.07 2.13 0.61 1.88 1.16 2.42 1.95 3.59 1.99 4.22 2.4 3.55 3.9"/>
                                        <polygon points="4.63 3.11 5.17 3.7 5.47 3.4 5.72 2.28 5.17 2.28 4.63 3.11"/>
                                    </svg>
                                    <b>Mayotte</b>
                                </div><div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.36 3.56" class='department' data-department='987' width='55'>
                                        <polygon points="1.59 0.09 1.13 1.08 0.13 0.58 1.59 0.09"/>
                                        <polygon points="2.55 0.79 2.84 2.5 4.3 2.5 4.75 2.5 5 2.92 5.55 3.5 6.3 3.13 6 2.15 5.13 2.33 4.75 0.79 3.38 0.09 2.55 0.79"/>
                                    </svg>
                                    <b>Polynésie Française</b>
                                </div><div class='small tiny'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3.87 7.28" class='department' data-department='975' width='35'>
                                        <polygon points="0.7 0.16 0.11 0.79 0.11 1.35 0.4 1.57 0.4 2.41 0.98 4.33 0.86 5.39 0.11 5.94 0.83 6.18 0.55 6.72 1.29 6.93 2.64 5.39 2.64 4.79 1.51 4.33 1.37 3.35 0.92 2.75 1.14 2.47 1.89 3 1.89 1.41 0.86 1.13 0.58 0.79 0.7 0.16"/>
                                        <polygon points="2.23 6.93 3.54 7.22 3.54 6.66 3.79 6.18 3.01 6 2.23 6.93"/>
                                    </svg>
                                    <b>St-Pierre-et-Miquelon</b>
                                </div><div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.45 4.2" class='department' data-department='986' width='60'>
                                        <polygon points="2.06 0.07 4.48 1.32 2.79 1.53 1.86 0.53 2.06 0.07"/>
                                        <rect x="4.69" y="1.74" width="0.71" height="0.25"/>
                                        <polygon points="0.81 2.65 1.11 4.15 0.61 4.15 0.07 3.4 0.81 2.65"/>
                                    </svg>
                                    <b>Wallis-et-Futuna</b>
                                </div>
                            </div>
                            <div class='map-btn active'>
                                <a href='#mapFormDom' class='btn-arrow small'>DOM</a>
                                <a href='#mapFormCom' class='btn-arrow small'>COM</a>
                            </div>
                            <a href='#mapFormMetropole' class='btn-arrow-back small btn-metropole'>Métropole</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once('includes/footer.html'); ?>

    </body>

</html>
