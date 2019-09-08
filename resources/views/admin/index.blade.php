@extends('layouts.app')

@section('content')
<h1 class="text-center policesnippet">Edition: Choix categorie</h1>
<div class="mx-auto col-12 text-center">
<a class="col-12 " href="/create"><button class="col-8 btn btn-primary mx-auto" type="submit">Ajouter un service</button></a>
        <div class="col-12 mt-5">
            <div class="card-group col-12 justify-content-center">
                @foreach ($categories as $categorie)
                    <a class="btn btn-primary mw-100 col-3 mr-1 mt-2" href="{{ route('admin.show', ['slug' => $categorie->slug ])}}">
                        <h1>{{$categorie->nom}}</h1>
                    </a>
                @endforeach

            </div>
        </div>
</div>
<br>
@endsection
