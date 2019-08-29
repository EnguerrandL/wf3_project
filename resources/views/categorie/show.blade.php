@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <h1>{{$categorie->nom}}</h1>
            <table class="col-8 mx-auto table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <td>Catégorie</td>
                        <td>Service</td>
                        <td>Desciption service</td>
                        <td>Prix</td>
                        <td>Boutton</td>
                    </tr>
                </thead>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->categorie->nom}}</td>
                    <td>{{$product->nom}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->prix}}</td>
                    <td><button class="btn bnt-succes">Panier</button></td>
                </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
