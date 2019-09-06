@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a class="container mx-auto" href="/create"><button class=" mb-4 col-4 btn btn-primary btn-sm my-0" type="submit">Ajouter un service</button></a>
        <div class="col-md-8">
            <div class="card">
                @foreach ($categories as $categorie)
                    <a class="d-inline-block btn btn-sm btn-primary" href="{{ route('admin.show', ['slug' => $categorie->slug ])}}">
                        <h1>{{$categorie->nom}}</h1>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
