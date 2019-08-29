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

                            <td>Categorie ID</td>
                            <td>Nom service</td>
                            <td>Description service</td>
                            <td>Prix</td>
                            <td>Boutton</td>

                    </tr>
                    </thead>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->categorie_id}}</td>
                        <td>{{$product->nom}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->prix}}</td>
                        <td><button class="btn btn-success">Offrir ce service</button></td>
                    </tr>
                 @endforeach
            </table>

            </div>
        </div>
    </div>
</div>
@endsection
