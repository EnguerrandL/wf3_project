@extends('layouts.app')

@section('content')
<h1 class="text-center">Edition: Choix categorie</h1>
<a class="container mx-auto" href="/create"><button class=" mb-4 col-4 btn btn-primary btn-sm my-0" type="submit">Ajouter un service</button></a>
<div class="container col-8 mx-auto">
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card">
                @foreach ($categories as $categorie)
                    <a class="btn btn-primary" href="{{ route('admin.show', ['slug' => $categorie->slug ])}}">
                        <h1>{{$categorie->nom}}</h1>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
</div>
<br>
@endsection
