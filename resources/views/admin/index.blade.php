@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
           
            <table class="container  table table-hover table-bordered">
 
                <thead class="thead-dark">
                <form class=" form-inline ">
  <input class="mx-auto mb-2 mt-4 col-4 " type="text" placeholder="Recherche" aria-label="Search">
  <button class="mx-auto mb-4 col-4 btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Recherche</button>
</form>


                    <tr>
                        <td>Id Client</td>
                        <td>Id panier </td>
                        <td>Prénom</td>
                        <td>Ville</td>
                        <td>Montant restant</td>
                        <td>Status</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                @foreach ($clients as $client)
                @foreach ($BonC as $boncadeau)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->panier_id}}</td>
                    <td>{{$client->prenom}}</td>
                    <td>{{$client->ville}}</td>           
                    <td>{{$boncadeau->affichage_prix}} Euros</td>
                    <td>{{$boncadeau->status}}</td>
                    <td><a href="/admin/{{$client->panier_id}}/edit"><button class="btn btn-primary">Mettre à jour les informations</button></a> <br> 
                    <form class="my-1"action="{{ route('admin.destroy', $boncadeau->id)}}" method="POST">
                    @csrf
@method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer le client</button>
                    </form></td>
                    
                </tr>
                @endforeach
                @endforeach
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
