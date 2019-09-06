<?php
$tit = "Galerie photo de l'espace Zen et Beaut&eacute;";
$des = "Galerie photo de l'espace Zen et Beaut&eacute;.";
?>
@extends('layouts.app')
@section('style')
<!-- CSS pour les pages items -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/soins.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/cadeauxEtPortfolio.css') }}" />
@endsection
<!-- CSS pour les pages items -->
@section('content')

<!-- TITRE PAGE -->
<h1 class="text-center policenature couleurrose">Notre galerie d'images</h1>
<!-- ICI POUR COMMENCER TA CARTE JOSEPH CARTE CADEAU -->
<div class="container mt-2">
    <hr>

    <?php
    $images = [
        ["./img/portfolio/bas4.jpg"], ["./img/portfolio/bas6.jpg"], ["./img/portfolio/bas7.jpg"], ["./img/portfolio/bas10.jpg"], ["./img/portfolio/boudha.jpg"], ["./img/portfolio/entree3.jpg"], ["./img/portfolio/escalier.jpg"], ["./img/portfolio/etage1.jpg"],
        ["./img/portfolio/etage2.jpg"], ["./img/portfolio/etage3.jpg"], ["./img/portfolio/etage5.jpg"], ["./img/portfolio/hammam.jpg"], ["./img/portfolio/piece1.jpg"], ["./img/portfolio/piece2.jpg"], ["./img/portfolio/solarium.jpg"], ["./img/portfolio/vestiaire1.jpg"],

];
$index =0;

    ?>

    <div class="row text-center text-lg-left">
        @foreach ($images as $image)
        <!-- Modal -->
        <div class="modal fade" id="modal<?php $index++;
        echo $index;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img class="img-fluid img-thumbnail" src="<?php echo $image[0]; ?>" alt="">
                    </div>
                    <div class="modal-footer mx-auto">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mx-auto col-md-12 ">
            <a href="#" class="d-block mb-4 h-100" data-toggle="modal" data-target="#modal<?php echo $index;?>">
                <img class="img-fluid img-thumbnail" src="<?php echo $image[0]; ?>" alt="">
            </a>
        </div>
        @endforeach
    </div>
</div>
<div class="text-center">
    <h2 class="font-weight-light text-center policenature couleurrose">Visite Guidée</h2>
    <hr>
    <br>
    <iframe class="visiteguidee" src="https://zenetbeaute.fr/visite360/index.html" frameBorder="0" scrolling="no"
        allowFullScreen></iframe>
</div>
<br><br>
@endsection
