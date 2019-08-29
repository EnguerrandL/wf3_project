{{-- Page recapitulatif panier --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PAGE PANIER</div>

                <a href="{{ route('panier.clientsinfos') }}"><button class="btn btn-success " type="submit">Valider et payer ma commande</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
