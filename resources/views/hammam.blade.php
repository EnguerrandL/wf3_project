<?php
$tit = "Le hammam est un bain de vapeur d'eau o&ugrave; la chaleur";
$des = "Le hammam  il permet d'&eacute;liminer les toxines en d&eacute;tendant la peau et dilatant les pores. Hammam sur banc de pierre chaude bulles de savon noir au miel";
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
            <img class="d-block w-100 box-caroussel" src="./img/carousel/carousel-hammam-1.jpg" alt="First slide" />
            <div class="carousel-caption d-none d-md-block text-white bg-colorcarousel">
                <h5>Séance Hammam</h5>
                <p class="police-caroussel">Le hammam est un bain de vapeur d'eau où la chaleur et l'humidité intense
                    sont mêlées. Il permet d'éliminer les toxines en détendant la peau et dilatant les pores.</p>
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
<!-- TEXTE POUR EXPLICATION SEANCE UV -->
<p class="policesnippet text-center">Le Hammam à un effet bénéfique sur la peau. La vapeur chaude ouvre les pores,
    élimine les toxines, les saletés, les bactéries, apaise les douleurs musculaires. Vous sortez du Hammam déstressé
    avec une véritable sensation de bien être. Le hammam est un terme arabe signifiant "eau chaude" , l'héritier des
    bains romains.</p>

<p class="policesnippet text-center">Le hammam est aussi appelé bain turc parles occidentaux, bain maure en référence à
    l'Espagne . Le taux d'humidité d'un Hammam se situe entre 90 et 100% . Le Hammam, symbole de la beauté à l'oriental,
    a su conquérir tous ceux et celles qui on tenté l'expérience.</p>

<p class="policesnippet text-center">Les rituels orientaux sont des gestes de beauté. Le Hammam permet d'accéder au
    bien-être et de retrouver une peau douce grâce au savon noir et au gant de khessa. Après le hammam, dégustez un thé
    à la menthe et poursuivez l'expérience détente avec un massage de bien-être.</p>
<!-- FIN EXPLICATIONS SEANCE UV -->
<br><br>
<!-- TITRE PAGE -->
<h1 class="text-center policenature couleurrose">Nos Prestations de Séance Hammam</h1>
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
