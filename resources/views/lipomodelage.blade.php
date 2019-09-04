<?php
$tit = "CELLU M6, Le LIPOMODELAGE, technique issue de L'ENDERMOLOGIE";
$des = "Le LIPOMODELAGE, technique issue de L'ENDERMOLOGIE est la solution aux problèmes de cellulite de graisses localisées de relâchement cutané avec le CELLU M6";
?>
@section('style')
<!-- CSS pour les pages items -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/soins.css') }}" />
@endsection
@extends('layouts.app')
@section('content')
<!-- carousel des pages items -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 box-caroussel" src="./img/carousel/carousel-lipomodelage-1.jpg"
                alt="First slide" />
            <div class="carousel-caption d-none d-md-block text-white bg-colorcarousel">
                <h5>Séance Lipomodelage</h5>
                <p class="police-caroussel">Le Cellu M6® est un appareil de lipomassage qui "destocke la graisse", lutte
                    contre les capitons et le relâchement de la peau.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 box-caroussel" src="./img/carousel/carousel-lipomodelage-2.jpg"
                alt="Second slide" />
            <div class="carousel-caption d-none d-md-block text-white bg-colorcarousel">
                <h5>Séance Lipomodelage</h5>
                <p class="police-caroussel">Cet appareil minceur n'a pas qu'une seule utilité : la marque LPG qui
                    commercialise le Cellu M6® avance les propriétés anti-cellulite et anti-relâchement cutané de cette
                    machine star.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 box-caroussel" src="./img/carousel/carousel-lipomodelage-3.jpg"
                alt="Third slide" />
            <div class="carousel-caption d-none d-md-block text-white bg-colorcarousel">
                <h5>Séance Lipomodelage</h5>
                <p class="police-caroussel">Sans oublier la lutte contre les graisses résistantes aux régimes et à
                    l'exercice physique. La dernière génération, le Cellu M6® intégral ou Cellu M6 Endermolab®, est
                    annoncée comme plus efficace que son ancienne version par la marque.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>
<!-- fin carousel -->
<!-- TEXTE POUR EXPLICATION LIPOMODELAGE -->
<p class="policesnippet text-center">Le LIPOMODELAGE est efficace la ou exercice et nutrition atteignent leurs limites.
    Vous avez tout essayé pour perdre vos rondeurs disgracieuses malgré tout, votre silhouette conserve des zones
    rebelles.</p>
<p class="policesnippet text-center">Le LIPOMODELAGE, technique issue de L'ENDERMOLOGIE est la solution aux problèmes de
    cellulite, de graisses localisées, de relâchement cutané...</p>
<p class="policesnippet text-center"> Découvrez chez Le LIPOMODELAGE, technique issue de L'ENDERMOLOGIE est la solution
    aux problèmes de cellulite de graisses localisées de relâchement cutané avec le CELLU M6 ce traitement non-invasif,
    indolore et aux effets démontrés scientifiquement.</p>
<p class="policesnippet text-center">Pour les hommes aussi... Le LIPOMODELAGE est également efficasse sur les poignées
    d'amour, le ventre, le dos, la zone des pectoraux... Quand nutrition et exercice n'ont aucun effet sur les zones
    rebelles, le LIPOMODELAGE devient incontournable.
</p>
<!-- FIN EXPLICATIONS LIPOMODELAGE -->
<br><br>
<!-- TITRE PAGE -->
<h1 class="text-center policenature couleurrose">Nos Prestations de Lipomodelage</h1>
<br>

<!-- LIST GROUP DES ITEMS -->
<!-- premier item -->
<?php
$i=0;
?>
@foreach ($products as $product)
<div class="container <?php
if($i&1)
{ echo "bounceInLeft";} else {
    echo "bounceInRight";
}
$i++;
?> animated">
    <div class="row mx-auto flex-grow-1">
        <div class="col-12 row justify-content-center mr-0 ml-0 mb-3 mt-2">
            <div class="col-lg-4 col-md-4 col-sm-12 row justify-content-center align-items-center">
                <img class="imgpetitefleur" src="./img/logonav.png" alt="fleur de lotus" title="{{ $product->nom }}">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 row justify-content-center align-self-center">
                <h2 class="mx-auto policenature text-center mb-0 couleurverte">{{ $product->nom }}</h2>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 row justify-content-center align-items-center">
                <img class="imgpetitefleur fleurcachee" src="./img/logonav.png" alt="fleur de lotus"
                    title="{{ $product->nom }}">
            </div>
        </div>
        <div class="col-12 mx-auto row box-prestation pb-2 pt-2">
            <div class="col-lg-6 col-md-6 col-sm-12 box-description">
                <p class="text-center align-self-center policesnippet1 mt-2 mb-0">{{ $product->description }}</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 box-description">
                <span class="text-center align-self-center policesnippet2 mt-2 box-tarif">{{ $product->prix }}€</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 box-description">
                <!-- APPEL DE LA PAGE PANIER.PHP EN AJAX -->
                <button type="button" class="btn btn-outline stylebouton txtshadow2" name="ajoutpanier"
                    value="{{ $product->nom }}">Ajouter au panier</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<hr />
<!-- SLIDER POUR LES PUBS -->
<h4 class="text-center policenature couleurbleu">Nos Partenaires</h4>
<br>
<div class="container row mx-auto p-0">
    <div class="item_pub col-lg-3 col-md-4 col-sm-6 text-center">
        <img src="./img/mary_cohr.jpg" alt="massage minceur couple homme femme enfant" title="Soins : Mary Cohr" />
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
        <img src="./img/mary_cohr2.jpg" alt="massage minceur couple homme femme enfant" title="Soins : Mary Cohr" />
    </div>
</div>
@endsection
