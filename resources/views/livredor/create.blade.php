<?php
$tit = "Les Bons cadeaux Zen et Beaut&eacute;, une id&eacute;e cadeau originale";
$des = "Nous nous chargeons d&#8217;envoyer votre bon cadeau.";
?>
@extends('layouts.app')
@section('content')

@if (session()->has('message'))
<div class="col-6 mx-auto text-center alert alert-success mt-5" role="alert">
    {{ session()->get('message') }}
</div>
@endif

<form class="col-6 mx-auto" action="{{ route('livredor.store') }}" method="POST">
    @csrf

    <div class="form-group">
            <div class="form-group">
                    <label for="formGroupExampleInput">Nom / Pseudo</label>
                    <input type="text" name="pseudo" class="form-control" id="formGroupExampleInput" placeholder="Nom ou Peusdo">
                  </div>
        <label for="exampleFormControlTextarea1">Votre avis</label>
        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5" placeholder="Votre avis compte pour nous"></textarea>
      </div>

    <button type="submit" class="btn btn-primary">Envoyer votre commentaire</button>
  </form>

  {{ $comments->links() }}

  @if ($actives === 1)
  @foreach($comments as $comment)
  <div class=" container col-3 card mt-2" style="display:block">
  
    <div class="row">
        <div class="card-body">
        <h5 class="card-title">{{ $comment->pseudo}}</h5>
          <p class="card-title">{{ $comment->content}}</p>
          <small>{{ $comment->created_at}}</small>
        </div>
    </div>
  </div>

  @endforeach
  @endif
          @if ($actives === 0)
          @foreach($comments as $comment)
          <div class=" container col-3 card mt-2" style="display:none">
                <div class="row">
                    <div class="card-body">
                    <h5 class="card-title">{{ $comment->pseudo}}</h5>
                      <p class="card-title">{{ $comment->content}}</p>
                      <small>{{ $comment->created_at}}</small>
        </div>
      </div>
    </div>
    @endforeach
@endif
@endsection
