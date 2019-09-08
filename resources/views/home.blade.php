<?php
$maj = '5';
$temps = 365 * 24 * 3600;
$racine = 'http://' . $_SERVER['HTTP_HOST'];
$racine = ltrim($racine, "http://");
$http = $racine;
$decalage = 'now +0 Hour +0 Minutes';
$keyword    = "";
$mail_admin = 'contact@zenetbeaute.fr';
$societe    = "Zen et beaut&eacute";
$proprio    = 'ZEN';
$ses        = 'ZEN';
$signature  = 'ZEN et BEAUTE';
$type       = 'Beaute';
$facebook   = "https://fr-fr.facebook.com/Zen-ET-Beaute-246867908832349/";
header("Last-Modified:" . gmdate("D, d M Y H:i:s") . "GMT");
header("Cache-Control:post-check=0,pre-check=0", false);
session_cache_limiter("must-revalidate");
header("X-Xss-Protection:1");
header('Content-Type:text/html; charset=utf-8');
$tit = "Selon votre goût soins du corp épilations massage hamman bronzage";
$des = "Zen et beaut&eacute; sainte-maxime face &agrave; la mer &agrave;, 300 m2 d&eacute;di&eacute;s &agrave; la beaut&eacute;, la d&eacute;tente et au bien-être du corp et de l'esprit massage épilation..."; ?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title><?php echo $tit; ?></title>
    <meta property="og:title" content="<?php echo $tit; ?>">
    <meta name="description" content="<?php echo $des; ?>">
    <meta property="og:description" content="<?php echo $des; ?>">
    <meta property="og:type" content="<?php echo $type; ?>">
    <meta property="og:url" content="<?php echo $http; ?>">
    <meta property="og:image" content="favicon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon-precomposed" title="<?php echo $tit; ?>" href="./img/favicon.png">
    <meta title="<?php echo $tit; ?>" name="msapplication-TileImage" content="favicon.png">
    <meta name="msapplication-TileColor" content="#339ecc">
    <link rel="icon" title="<?php echo $tit; ?>" href="./img/favicon.png" type="image/png">
    <meta name="rating" content="general">
    <meta name="Author" content="<?php echo $signature; ?>">
    <link rel="canonical" title="<?php echo $tit; ?>" href="<?php echo $http; ?>">

    <style>
        @media print {}

        @media(max-width: 768px) {}
    </style>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <!-- Normalize pour mettre à 0 le style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" />
    <!-- style pour le spinner -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.css') }}" />
    <!-- Styles Boostrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <!-- CSS pour les animations -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
    <!-- CSS commun à toutes les pages -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
    <!-- CSS pour la page accueil -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/accueil.css') }}" />
    <!-- CSS pour les cartes animées -->
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}" />


</head>

<body>

    <!-- Spinner pour le chargement de la page -->
    <div id="spinner">
        <div id="loader">
            Loading
            <span></span>
        </div>
    </div>
    <!-- la classe distorsion contient l'image avec l'effet de distorsion-->
    <div class="distorsion">
        <div id="anime-demo">
            <!-- classes pour animer le logo en 3 parties -->
            <div class="mot-zen bounceInUp animated">
            </div>
            <div class="mot-et bounceInLeft animated">
            </div>
            <div class="mot-beaute bounceInDown animated">
            </div>
            <div class="sectionScroll">
                <span>Scroll</span>
                <a id="btnScroll" href="#bg-general"><span></span></a>
            </div>
        </div>
    </div>
    <!-- Classe bg-general pour inclure le background général en dehors du mur d'eau -->
    <div id="bg-general">
        <header>
            <!-- menu -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}"><img class="img-fluid" src="./img/zenetbeaute.png"
                        title="Accueil Zen et beaut&eacute;" alt="Accueil Zen et beaute"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse policenature" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link linkStyle2" href="{{ route('home') }}"
                                title="Accueil de Zen et Beauté">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle linkStyle2" href="#"
                                title="Nos différentes catégories de prestations" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Nos prestations
                            </a>
                            <div class="dropdown-menu navcategorie" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('massage') }}"
                                    title="La carte de massages de Zen et Beaut&eacute;">Massage bien être</a>
                                <a class="dropdown-item" href="{{ route('epilation') }}"
                                    title="Les épilations">Epilation</a>
                                <a class="dropdown-item" href="{{ route('soins') }}"
                                    title="Nos soins du visage">Soins</a>
                                <a class="dropdown-item" href="{{ route('lipomodelage') }}"
                                    title="La cellu m6 de Zen et Beaut&eacute;">Cellu M6</a>
                                <a class="dropdown-item" href="{{ route('ongles') }}"
                                    title="Nos soins mains et pieds">Main\Pied</a>
                                <a class="dropdown-item" href="{{ route('hammam') }}"
                                    title="Nos séance Hammam">Hammam</a>
                                <a class="dropdown-item" href="{{ route('uv') }}"
                                    title="Les UV de Zen et Beaut&eacute;">Séance UV</a>
                            </div>
                        </li>
                        <li class="nav-iteM">
                            <a class="nav-link linkStyle2" href="{{ route('contact') }}"
                                title="Contacter Zen et Beaut&eacute;">Contact</a>
                        </li>
                        <li class="nav-iteM">
                            <a class="nav-link linkStyle2 policenature"
                                title="La galerie photos de Zen et Beaut&eacute;"
                                href="{{ route('portfolio') }}" />Galerie</a>
                        </li>
                        <li class="nav-iteM">
                            <a class="nav-link linkStyle2 policenature" href="{{ route('livredor.index') }}"
                                title="Espace membre Zen et Beaut&eacute;">Livre D'or</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- classe ombrepage pour l'effet d'ombre dans la totalité de la page -->
        <div class="ombrepage">
            <main>

                <br />
                <div class="containter col-lg-10 col-md-10 col-sm-12 mx-auto">
                    <p class="text-center policesnippet">
                        Bienvenue sur le site de <img src="./img/zen_p14.png" width="114" height="12"
                            alt="Selon votre goût soins du corp épilations massage hamman bronzage"
                            title="Selon votre goût soins du corp épilations massage hamman bronzage">.</p>
                    <p class="text-center policesnippet"> Selon votre goût : soins du corps épilations massage hamman
                        bronzage</p>
                    <p class="text-center policesnippet">
                        <h2 class="policesnippet text-center">300 m2 dédiés à la beauté, la détente et au bien-être du
                            corps et de
                            l'esprit.</h2>
                    </p>
                    <p class="text-center policesnippet">
                        Dans un cadre magique et spacieux face à la mer il est un univers...où
                        prendre soin de soi est un "Art de Vivre". Une diversité et du plaisir
                        pour tous les goûts.
                    </p>
                    <p class="text-center policesnippet">
                        A choisir selon votre personnalité, votre humeur et votre envie de
                        l'instant.
                    </p>
                    <p class="text-center policesnippet">
                        L'espace épilation optimale permet une repousse plus lente du poil, en
                        vous proposant un appareil sans équivalent dans la lutte contre la
                        peau d'orange et la cellulite : le CELLU M6 100% Naturel.
                    </p>
                </div>
                <br />
                <hr />
                <br />
                <h4 class="text-center policenature couleurrose h2">
                    Nos différentes catégories de prestations
                </h4>
                <div id="appcard" class="container">
                    <a slot="header" href="{{ route('massage') }}">
                        <card class="bounceInLeft animated" data-image="./img/hammam.jpg">
                            <h3 class="titrecarte" slot="header">Massage bien-être</h3>
                            <span class="h4" slot="header">Cliquez</span>
                            <p slot="content">
                                Le massage de bien être contribue a l'équilibre physique et
                                favorise l'épanouissement personnel.
                            </p>
                        </card>
                    </a>
                    <a href="{{ route('epilation') }}">
                        <card class="bounceInUp animated" data-image="img/epilation_2.jpg">
                            <h3 class="titrecarte" slot="header">Epilation</h3>
                            <span class="h4" slot="header">Cliquez</span>
                            <p slot="content">
                                Ce type d'épilation est optimal et permet une repousse plus
                                lente du poil. Souple et malléable, la pâte s'utilise à froid.
                            </p>
                        </card>
                    </a>
                    <a href="{{ route('ongles') }}">
                        <card class="bounceInRight animated" data-image="img/pied_3.jpg">
                            <h3 class="titrecarte" slot="header">Mains/Pieds</h3>
                            <span class="h4" slot="header">Cliquez</span>
                            <p slot="content">
                                Vos mains, vos pieds ne sont pas que… des ongles. Nous allons nous en occuper comme nous
                                nous occupons
                                de votre visage.
                            </p>
                        </card>
                    </a>
                    <a href="{{ route('hammam') }}">
                        <card class="bounceInLeft animated" data-image="img/massage_1.jpg">
                            <h3 class="titrecarte" slot="header">Hammam</h3>
                            <span class="h4" slot="header">Cliquez</span>
                            <p slot="content">
                                Le hammam est un bain de vapeur d'eau où la chaleur et
                                l'humidité intense sont mêlées.
                            </p>
                        </card>
                    </a>
                    <a href="{{ route('uv') }}">
                        <card class="bounceIn animated" data-image="img/uv1.jpg">
                            <h3 class="titrecarte" slot="header">UV</h3>
                            <span class="h4" slot="header">Cliquez</span>
                            <p slot="content">
                                Le modèle Solarwind 6000 associe la puissance de bronzage,
                                équipé d'un refroidisseur corporel, du bronzage épaule et tête.
                            </p>
                        </card>
                    </a>
                    <a href="{{ route('lipomodelage') }}">
                        <card class="bounceInRight animated" data-image="img/CelluM6.jpg">
                            <h3 class="titrecarte" slot="header">Cellu M6</h3>
                            <span class="h4" slot="header">Cliquez</span>
                            <p slot="content">
                                Le LIPOMODELAGE, technique issue de L'ENDERMOLOGIE est la
                                solution aux problèmes de cellulite, de graisses localisées, de
                                relâchement cutané...
                            </p>
                        </card>
                    </a>
                    <a href="{{ route('soins') }}">
                        <card class="bounceInUp animated" data-image="img/produit.jpg">
                            <h3 class="titrecarte" slot="header">Soins</h3>
                            <span class="h4" slot="header">Cliquez</span>
                            <p slot="content">
                                Un soin du visage destiné à préserver la propreté du visage, à l'embellir, le raffermir,
                                le tonifier ou
                                le régénérer.
                            </p>
                        </card>
                    </a>
                    {{-- <a href="{{ route('livredor.index') }}" title="Ch&egrave;que cadeau &agrave; offrir ou s'offrir">
                        <card class="bounceInUp animated" data-image="img/boncadeau.jpg">
                            <h3 class="titrecarte" slot="header">Carte Cadeaux</h3>
                            <span class="h4" slot="header">Cliquez</span>
                            <p slot="content">
                                Carte Cadeaux allant de 50€ à 500€
                            </p>
                        </card>
                    </a> --}}
                </div>
                <hr />
                <!-- SLIDER POUR LES PUBS -->
                <h4 class="text-center policenature couleurbleu">Nos Partenaires</h4>
                <br />
                <div class="container row mx-auto p-0">
                    <div class="item_pub col-lg-3 col-md-4 col-sm-6 text-center">
                        <img src="./img/mary_cohr.jpg" alt="massage minceur couple homme femme enfant"
                            title="Soins : Mary Cohr" />
                    </div>
                    <div class="item_pub col-lg-3 col-md-4 col-sm-6 text-center">
                        <img src="./img/My-spa-logo-2.jpg" alt="massage complet bien etre relaxant pierre chaude"
                            title="Soins : My Spa" />
                    </div>
                    <div class="item_pub col-lg-3 col-md-4 col-sm-6 text-center">
                        <img src="./img/logo-academie.jpg" alt="tensions musculaires massage relaxation detente"
                            title="Soins : Acad&eacute;mie scientifique de beaut&eacute;" />
                    </div>
                    <div class="item_pub col-lg-3 col-md-4 col-sm-6 text-center">
                        <img src="./img/mary_cohr2.jpg" alt="massage minceur couple homme femme enfant"
                            title="Soins : Mary Cohr" />
                    </div>
                </div>

            </main>
            <footer>
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-3 mx-auto">
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4 h4">Catégorie</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="{{ route('massage') }}" class="linkStyle2 couleurverte"
                                        title="La carte de massages de Zen et Beauté">Massage Bien être</a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('epilation') }}" class="linkStyle2"
                                        title="Les épilations">Epilation</a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('soins') }}" class="linkStyle2"
                                        title="Nos soins du visage">Soins</a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('lipomodelage') }}" class="linkStyle2"
                                        title="La cellu m6 de Zen et Beauté">Cellu M6</a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('ongles') }}" class="linkStyle2"
                                        title="Nos soins mains et pieds">Mains\Pieds</a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('uv') }}" class="linkStyle2"
                                        title="Les UV de Zen et Beauté">Séance
                                        UV</a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('mentionslegales') }}" title="Mentions légales" class="linkStyle2"
                                        title="Mentions Légales">Mentions Légales</a>
                                </li>
                            </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-md-3 mx-auto">
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4 h4">CONTACT</h5>

                            <ul class="list-unstyled couleurbleu">
                                <li>
                                    <p class="policesnippet2">Par Téléphone <br>
                                        <a href="tel:+33494493653" class="linkStyle2"
                                            title="Notre téléphone">04.94.49.36.53</a></p>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/Zen-ET-Beaute-246867908832349/"><img
                                            class="logofooter1" src="./img/logofacebook.jpg"
                                            alt="Facebook Zen et Beauté" title="La page Facebook de Zen et Beauté"></a>
                                </li>
                                <br>
                                <li>
                                    <h5 class="font-weight-bold text-uppercase h4">Moyens De Paiment</h5>
                                    <div class="row mx-auto ">
                                        <div class="mx-auto">
                                            <img src="./img/logo-cb.jpg" alt="Logo carte bancaire">
                                            <img src="./img/logo-mastercard.jpg" alt="Logo carte Mastercard">
                                            <img src="./img/logo-visa.jpg" alt="Logo carte Visa">
                                        </div>
                                        <h1 class="h6 policesnippet2 mx-auto">Institut de beauté à
                                            Sainte-Maxime<br>RCS :
                                            488 410 184</h1>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="col-md-3 mx-auto">
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4 h4">Heure D'Ouverture</h5>
                            <ul class="list-unstyled couleurbleu">
                                <li>
                                    <p class="policesnippet2">Heure D'été <br> Du Lundi Au Vendredi <br>
                                        De 09H00 à 19H00 <br>
                                        & Le Samedi De 09H00 à 18H00 </p>
                                </li>
                                <li>
                                    <p class="policesnippet2">Heure D'hiver <br> Du Lundi Au Vendredi <br>
                                        De 10H00 à 18H30 <br>
                                        & Le Samedi De 10H00 à 18H00 </p>
                                </li>
                            </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-lg-3 col-md-12 mx-auto">
                            <img class="logofooter2" src="./img/zenetbeaute.png" alt="logo zen et beauté"
                                title="Institut de beauté Sainte-Maxime">
                            <a href="https://goo.gl/maps/cbQ4PvEEq8ERSJka8">
                                <img class="logofooter mt-4" src="./img/devanture.JPG"
                                    alt="Zen et Beauté 83120 Sainte-Maxime" title="Nous situer">
                            </a>
                            <p class="policesnippet2">Palais de "L'ARBOIS"<br>
                                22 av. du Général Leclerc<br>
                                83120 Sainte-Maxime</p>
                        </div>
                    </div>
                </div>
                <div class="text-center py-3 policesnippet2">© 2019 Design :
                    <a href="https://www.360-visio.fr" class="policesnippet2 linkStyle2"
                        title="Visitez le site de 360 Visio">360 Visio</a>
                        <a href="{{ route('gate') }}"><small>admin</small></a>

                </div>
            </footer>
        </div>
    </div>


    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- import pour le javascript commun à toutes les pages (pour le slider pub, le spinner de chargement...) -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- import pour l'effet de distorsion -->
    <script src="{{ asset('js/pixi.min.js') }}"></script>
    <script src="{{ asset('js/mur_d_eau.js') }}"></script>
    <!-- import pour les cartes animées -->
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/cards.js') }}"></script>

</body>

</html>
