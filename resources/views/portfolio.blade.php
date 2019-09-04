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


    <!-- Modal -->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img class="img-fluid img-thumbnail" src="./img/portfolio/bas4.jpg" alt="">
                </div>
                <div class="modal-footer mx-auto">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>





    <div class="row text-center text-lg-left">
        <div class="col-lg-3 mx-auto col-md-12 ">
            <a href="#" class="d-block mb-4 h-100" data-toggle="modal" data-target="#modal1">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/bas4.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 mx-auto col-md-12 ">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/bas6.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 mx-auto col-md-12 ">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/bas7.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 mx-auto col-md-12 ">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/bas10.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 mx-auto col-md-12">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/boudha.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 mx-auto col-md-12">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/entree3.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 mx-auto col-md-12">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/escalier.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 mx-auto col-md-12">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/etage1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 mx-auto col-md-12">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/etage2.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 mx-auto col-md-12">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/etage3.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 mx-auto col-md-12">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/etage5.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 mx-auto col-md-12">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/hammam.jpg" alt="">
            </a>
            <br>
        </div>
        <div class="col-lg-3 mx-auto col-md-12">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/piece1.jpg" alt="">
            </a>
            <br>
        </div>
        <div class="col-lg-3 mx-auto col-md-12">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/piece2.jpg" alt="">
            </a>
            <br>
        </div>
        <div class="col-lg-3 mx-auto col-md-12">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/solarium.jpg" alt="">
            </a>
            <br>
        </div>
        <div class="col-lg-3 mx-auto col-md-12">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="./img/portfolio/vestiaire1.jpg" alt="">
            </a>
            <br>
        </div>
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
