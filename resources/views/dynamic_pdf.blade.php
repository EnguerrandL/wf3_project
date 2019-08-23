
@extends('layouts.app')

@section('content')

<div class="col-8 mx-auto">
                <table class="col-8 mx-auto table table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <td>ID Client</td>
                            <td>Nom</td>
                            <td>Prénom</td>
                            <td>Produit</td>
                            <td>Prix</td>
                            <td>Date d'expiration</td>
                            <td>Facture</td>
                        </tr>
                    </thead>
                    @foreach($customer_data as $customer)
                        <tr>
                        <td>{{$customer->customer_id}}</td>
                        <td> {{$customer->customer_firstname}}</td>
                        <td>{{$customer->customer_name}}</td>
                        <td>{{$customer->customer_product}}</td>
                        <td>{{$customer->customer_price}} Euros</td>
                        <td>{{$customer->customer_date_limit}}</td>
                        <td> <a href="{{ url('dynamic_pdf/pdf') }}"> <button type="button" class="btn btn-warning">Télécharger ma facture en pdf</button></a></td>

                        </tr>
                    @endforeach


                </table>



@endsection







