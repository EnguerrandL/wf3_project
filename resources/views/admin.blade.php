<?php
$tit = "Formulaire de contact : Zen et Beaut&eacute;";
$des = "Selon la disponibilit&eacute; Zen et Beaut&eacute; s'engage &agrave; r&eacute;pondre dans les plus brefs d&eacute;lais.";
?>
@extends('layouts.app')
@section('content')

<div class="col-6 mx-auto card text-center mt-5">

  <div class="col-6 card-body mx-auto">
    <h3 class="card-title mb-5">Panel d'administration</h3>
    <a href="{{ route('livredor.create') }}" class="btn btn-success mr-2">Validation Livre d'or</a>
    <a href="{{ route('admin.index') }}" class="btn btn-primary">Gestion des services</a>
    <br>
    <a href="{{ route('home') }}" class="btn btn-warning mt-3">Retourner sur le site</a>
  </div>

</div>


@endsection
