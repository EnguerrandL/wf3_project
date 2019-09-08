<?php
$tit = "Les Bons cadeaux Zen et Beaut&eacute;, une id&eacute;e cadeau originale";
$des = "Nous nous chargeons d&#8217;envoyer votre bon cadeau.";
?>
@extends('layouts.app')
@section('extra-js')
  {!! NoCaptcha::renderJs() !!}
  @endsection
@section('content')

@if (session()->has('message'))
<div class="col-6 mx-auto text-center alert alert-success mt-5" role="alert">
    {{ session()->get('message') }}
</div>
@endif


<!-- les boutons d'actions -->
<a class="btn btn-primary col-12 mb-5 " href="#MonCollapse" data-toggle="collapse" aria-expanded="false" aria-controls="MonCollapse">Ajouter un commentaire</a>


<!-- le contenu masqué -->

<section id="MonCollapse" class="collapse mx-auto text-center policesnippet">
<form class="col-md-8 col-xs-12 mx-auto" action="{{ route('livredor.store') }}" method="POST">
    @csrf

    <div class="form-group">
            <div class="form-group">
                    <label for="formGroupExampleInput">Nom / Pseudo</label>
                    <input type="text" name="pseudo" class="form-control mb-4 col-12 mx-auto policesnippet" id="formGroupExampleInput" placeholder="Nom ou Pseudo">
                  </div>
        <label for="exampleFormControlTextarea1">Votre avis</label>
        <textarea class="form-control mb-4 col-12 mx-auto policesnippet" name="content" id="exampleFormControlTextarea1" rows="5" placeholder="Votre avis compte pour nous"></textarea>
      </div>
      <br>
      <div class="mb-4 col-12 mx-auto form-group">
{!! NoCaptcha::display() !!}
            @if ($errors->has('g-recaptcha-response'))
                <span class="help-block">
                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </span>
            @endif
</div>
<br>

    <button type="submit" class="btn btn-primary mx-auto mb-2">Envoyer votre commentaire</button>
  </form>
  <br>

</section>

<h2 class=" text-center policenature couleurrose">Commentaires</h2>
  

 
    @foreach($actives as $active)

              <div class="card col-lg-6 col-md-8 col-xs-12 mx-auto mt-3 mb-3 border-primary policesnippet">
                <div class="card-body">
                    <h3 class="card-title text-center">{{ $active->pseudo}}<hr class=" bg-primary"></h3>
                    <p class="card-title text-center">{{ $active->content}}</p>
                    <small class="text-center">Date Création {{ $active->created_at}}</small>
                </div>
              </div>
    @endforeach


    
   
  
@endsection



