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
if (!isset($tit)) {
    $tit = "Selon votre goût soins du corp épilations massage hamman bronzage";
}
if (!isset($des)) {
    $des = "Zen et beaut&eacute; sainte-maxime face &agrave; la mer &agrave;, 300 m2 d&eacute;di&eacute;s &agrave; la beaut&eacute;, la d&eacute;tente et au bien-être du corp et de l'esprit massage épilation...";
} ?>
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
    <script src="https://kit.fontawesome.com/0febd544a9.js"></script>
    <style>
        @media print {}

        @media(max-width: 768px) {}
    </style>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <!-- Normalize pour mettre à 0 le style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" />
    <!-- Styles Boostrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <!-- style pour le spinner -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.css') }}" />
    <!-- CSS pour le slider publicitaire et les animations déjà toutes faites -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
    <!-- CSS commun à toutes les pages -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
    @yield('style')

    {{-- jQuery --}}
    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- import pour le javascript commun à toutes les pages (pour le slider pub, le spinner de chargement...) -->
    <script src="{{ asset('js/main.js') }}"></script>
</head>

<body>
    <div id="app">
        <!-- Spinner pour le chargement de la page -->
        <div id="spinner">
            <div id="loader">
                Loading
                <span></span>
            </div>
        </div>
        <!-- Classe bg-general pour inclure le background général en dehors du mur d'eau -->
        <div id="bg-general">
            <header>
                <!-- menu -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}"><img class="img-fluid"
                            src="./img/zenetbeaute.png" title="Accueil Zen et beaut&eacute;"
                            alt="Accueil Zen et beaute"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                    @yield('content')
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
                                        <a href="{{ route('mentionslegales') }}" title="Mentions légales"
                                            class="linkStyle2" title="Mentions Légales">Mentions Légales</a>
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
                                                alt="Facebook Zen et Beauté"
                                                title="La page Facebook de Zen et Beauté"></a>
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
                    </div>
                </footer>
            </div>
        </div>
    </div>
    @yield('script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('.btn').click(function() {
                var service = encodeURIComponent($(this).val()); // on sécurise les données
                console.log(service);
                $.ajax({
                    url: "panier.php", // on donne l'URL du fichier de traitement
                    type: "POST", // la requête est de type POST
                    data: "service=" + service // et on envoie nos données
                });

            });

        });
    </script>
</body>

</html>
