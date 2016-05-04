<!DOCTYPE html>
<!--[if IE 9]> <html lang='fr-FR' class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang='fr-FR' class='no-js'> <!--<![endif]-->

    <head>
        <title>Style guides</title>
        <?php include_once('includes/head.html'); ?>
        <style>
            hr{
                margin: 70px 0 40px;
            }
        </style>
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

                    <h2>Icons (base/_fonts.scss)</h2>
                    <span class='icon-twitter'></span>
                    <span class='icon-facebook'></span>
                    <span class='icon-linkedin'></span>
                    <span class='icon-google'></span>
                    <span class='icon-viadeo'></span>
                    <br><br>
                    <span class='icon-cross'></span>
                    <span class='icon-home'></span>
                    <span class='icon-share'></span>
                    <span class='icon-user'></span>
                    <span class='icon-mail'></span>
                    <span class='icon-tool'></span>
                    <span class='icon-arrow'></span>
                    <span class='icon-pen'></span>
                    <span class='icon-error'></span>
                    <span class='icon-check'></span>
                    <hr>

                    <h2>Buttons (components/_buttons.scss)</h2>
                    <a href='#' class='btn-block'>.btn-block</a>
                    <a href='#' class='btn-block btn-orange'>.btn-block.btn-orange</a>
                    <a href='#' class='btn-block big'>.btn-block.big</a>
                    <a href='#' class='btn-block huge'>.btn-block.huge</a>
                    <br><br>
                    <a href='#' class='btn-block-arrow'>.btn-block-arrow</a>
                    <br><br><br><br>
                    <a href='#' class='btn-arrow small'>.btn-arrow.small</a>
                    <a href='#' class='btn-arrow'>.btn-arrow</a>
                    <a href='#' class='btn-arrow big'>.btn-arrow.big</a>
                    <br><br>
                    <a href='#' class='btn-arrow-back'>.btn-arrow-back</a>
                    <br><br>
                    <a href='#' class='btn-cancel'>.btn-cancel</a>
                    <br><br>
                    <a href='#' class='btn-pen'>.btn-pen</a>
                    <hr>

                    <h2>Social (components/_social.scss)</h2>
                    <h3>Exemple 1</h3>
                    <ul class='social'>
                        <li>
                            <a href='#' class='icon-facebook'></a>
                        </li><li>
                            <a href='#' class='icon-twitter'></a>
                        </li><li>
                            <a href='#' class='icon-google'></a>
                        </li><li>
                            <a href='#' class='icon-viadeo'></a>
                        </li>
                    </ul>
                    <h3>Exemple 2</h3>
                    <ul class='social'>
                        <li>
                            <a href='#' class='icon-share'></a>
                        </li><li>
                            <a href='#' class='icon-twitter'></a>
                        </li><li>
                            <a href='#' class='icon-facebook'></a>
                        </li><li>
                            <a href='#' class='icon-linkedin'></a>
                        </li>
                    </ul>
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
