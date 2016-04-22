<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Style guides</title>
        <?php include_once('includes/head.html'); ?>
    </head>

    <body>
        <main id='main' role='main'>
            <div class='container-small'>
                <h1>Style guides</h1>
                <div class='content-default content-right'>
                    <h2>Titles (base/_base.scss)</h2>
                    <h1>Titre principal h1</h1>
                    <h2 class='h1'>Titre h2 .h1</h2>
                    <h2>Titre h2</h2>
                    <h2 class='h3'>Titre h3 .h2</h2>
                    <h3>Titre h3</h3>
                    <h4>Titre h4</h4>
                    <h5>Titre h5</h5>
                    <h6>Titre h6</h6>
                    <hr>

                    <h2>Texts (base/_base.scss)</h2>
                    <p>un paragraphe avec une <strong>balise strong</strong> et une <b>balise b</b>, ainsi qu'une <u>balise u</u>, une <i>balise i</i> et une <em>balise em</em>, un <a href='#'>lien par défaut</a></p>
                    <ul>
                        <li>un item li d'un ul</li>
                        <li>un item li d'un ul</li>
                    </ul>
                    <ol>
                        <li>un item li d'un ol</li>
                        <li>un item li d'un ol</li>
                    </ol>
                    <blockquote><p>une citation avec un p dans un blockquote</p></blockquote>
                    <code>un ptit bout de code</code>
                    <hr>

                    <h2>Buttons (components/_buttons.scss)</h2>
                    <a href='#' class='btn-block'>.btn-block</a>
                    <a href='#' class='btn-block big'>.btn-block.big</a>
                    <a href='#' class='btn-arrow'>.btn-arrow</a>
                    <a href='#' class='btn-arrow big'>.btn-arrow.big</a>
                    <hr>

                    <h2>Breadcrumb (layout/_breadcrumb.scss)</h2>
                    <ul class='breadcrumb'>
                        <li><a href='./'>Accueil</a></li>
                        <li><a href='./'>Exemple</a></li>
                        <li><span>Page actuelle</span></li>
                    </ul>
                </div>
            </div>
        </main>
    </body>

</html>
