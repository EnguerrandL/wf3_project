@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
           
            <table class="container  table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <td>Id Client</td>
                        <td>prenom</td>
                        <td>Ville</td>
                        <td>Id panier et description</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->prenom}}</td>
                    <td>{{$client->ville}}</td>
                    <td>{{$client->panier_id}}</td>
                    <td><button class="btn btn-primary">Mettre à jour les informations</button> <br> <button class="btn bnt-danger">Supprimer le client</button></td>
                    
                </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
