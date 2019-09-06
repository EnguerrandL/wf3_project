<?php
$tit = "Formulaire de contact : Zen et Beaut&eacute;";
$des = "Selon la disponibilit&eacute; Zen et Beaut&eacute; s'engage &agrave; r&eacute;pondre dans les plus brefs d&eacute;lais.";
?>
@extends('layouts.app')
@section('content')
<br><br>
<!-- TITRE PAGE -->
<h1 class="text-center policenature couleurrose">Nous Contacter</h1>
@if (session()->has('message'))
<div class="col-6 mx-auto text-center alert alert-success" role="alert">
    {{ session()->get('message') }}
</div>
@endif
<br>

<form class="text-center border col-lg-8 col-md-12 col-xs-12 border-light p-5 mx-auto" action="/contact" method="POST">
    @csrf

        <!-- Nom Prenom -->
    <div class="row text-center">
            <div class="col">
                    <input type="text" name="nom" value="{{old('nom')}}" id="defaultRegisterFormFirstName"
                    class="form-control mb-4 col-12 mx-auto policesnippet" placeholder="Nom">
            </div>
            <div class="col">
                    <input type="text" name="prenom" value="{{old('prenom')}}" id="defaultRegisterFormLastName"
                    class="form-control mb-4 col-12 mx-auto policesnippet" placeholder="Prénom">
            </div>
          </div>

    <!-- E-mail -->
    <input type="email" name="email" value="{{old('email')}}" id="defaultRegisterFormEmail"
        class="form-control mb-4 col-12 mx-auto policesnippet" placeholder="E-mail">

    <!-- SUJET -->
    <input type="text" name="sujet" value="{{old('sujet')}}" id="defaultRegisterFormLastName"
        class="form-control mb-4 col-12 mx-auto policesnippet" placeholder="Sujet">

    <!-- TEXT AREA -->
    <textarea name="message" class="form-control col-12 mx-auto policesnippet" rows="5" id="comment"
        placeholder="Texte @error('message') is-invalid @enderror">{{old('message')}}</textarea>
    @error('message')
    <div class="invalid-feedback">
        {{ $errors->first('message') }}
    </div>
    @enderror
    <!-- CAPTCHA -->
    <br>
    <div class="g-recaptcha" data-sitekey="6LeklrUUAAAAAIuHqZD8igPmMfpL1nR7Folnll_o"></div>
    <!-- BOUTON SUBMIT -->
    <div class="contenair mx-auto"><button class="btn btn-info btn-couleurbleu my-4 col-6 mx-auto" type="submit"
            name="envoyer">Envoyer</button></div>

    <hr>
</form>
<!-- LIEN SOCIAUX -->
<div class="text-center mx-auto">
    <br>
    <div class="mx-auto col-12">
        <h5 class="couleurrose policenature mx-auto">Nous Situer</h5>
        <br>
        <iframe class="w-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.3714105190184!2d6.641144515436914!3d43.30648387913472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ceb8be1c28a5b1%3A0xd5163e0926fa410e!2sBeaut%C3%A9%20Business!5e0!3m2!1sfr!2sfr!4v1567352819676!5m2!1sfr!2sfr"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

</div>

<br>
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
