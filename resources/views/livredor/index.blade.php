<?php
$tit = "Les Bons cadeaux Zen et Beaut&eacute;, une id&eacute;e cadeau originale";
$des = "Nous nous chargeons d&#8217;envoyer votre bon cadeau.";
?>
@extends('layouts.app')
@section('content')

<a href="{{ route('home') }}" class="col-2 mx-auto mt-2 btn btn-warning">Retourner sur le site</a>
{{ $comments->links() }}
<table class="col-6 mx-auto  table table-hover table-bordered">
    <thead class="thead-dark">
        <tr>
            <td>Nom/Pseudo</td>
            <td>Commentaire</td>
            <td>Date création</td>
            <td>Modération</td>

        </tr>
    </thead>
    @foreach($comments as $comment)
        <tr>
        <td>{{ $comment->pseudo}}</td>
        <td>{{ $comment->content}}</td>
        <td>{{ $comment->created_at->format('d/m/Y H:i:s') }}</td>
        <td class="text-right">     <a class="mb-2 btn btn-success m-2 p-1 text-right" href="{{ route('livredor.update',  ['id'=>$comment->id]) }}">
                Acepter le commentaire
               </a>



                        <a href="{{ route('livredor.destroy', $comment->id) }}" onclick="event.preventDefault();document.getElementById('admin-form').submit();">
                        <button class="btn btn-danger my-2">Supprimer</button>
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


@endsection
