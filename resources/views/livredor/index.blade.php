<?php
$tit = "Les Bons cadeaux Zen et Beaut&eacute;, une id&eacute;e cadeau originale";
$des = "Nous nous chargeons d&#8217;envoyer votre bon cadeau.";
?>
@extends('layouts.app')
@section('content')
<br>
<h1 class="text-center policesnippet">Modération Commentaires</h1>
<br>
<table class="col-6 mx-auto table table-hover table-bordered policesnippet text-center">
    <thead class="thead-dark">
        <tr>
            <th>Nom/Pseudo</th>
            <th>Commentaire</th>
            <th>Date création</th>
            <th>Modération</th>

        </tr>
    </thead>
    @foreach($comments as $comment)
        <tr>
        <td>{{ $comment->pseudo}}</td>
        <td>{{ $comment->content}}</td>
        <td>{{ $comment->created_at->format('d/m/Y H:i:s') }}</td>
        <td class="text-right w-9">     <a class="btn btn-success" href="{{ route('livredor.update',  ['id'=>$comment->id]) }}">
                <i class="fas fa-check-square"></i>
               </a>



                        <a href="{{ route('livredor.destroy', $comment->id) }}" onclick="event.preventDefault();document.getElementById('admin-form').submit();">
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                     </a>



                     <form id="admin-form" action="{{ '/livredor/destroy/' .  $comment->id }}"  style="display: none;">
                            @csrf
                            @method('DELETE')
                            <input type="submit">ok</input>
                        </form>
            </td>



        </tr>
    @endforeach
</table>
{{ $comments->links() }}
<div class="container col-12 mx-auto">
        <a href="{{ route('home') }}" class="col-2 mt-2 btn btn-warning">Retourner sur l'accueil</a>
        @if (session()->has('danger'))
        <div class="col-6 mx-auto text-center alert alert-danger mt-5" role="alert">
            {{ session()->get('danger') }}
        </div>
        <br>
</div>

@endif

@endsection
