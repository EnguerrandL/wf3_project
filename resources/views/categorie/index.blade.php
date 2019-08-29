@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach ($categories as $categorie)
                    <a class="d-inline-block btn btn-sm btn-primary" href="{{ route('categorie.show', ['slug' => $categorie->slug ])}}">
                        <h1>{{$categorie->nom}}</h1>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
