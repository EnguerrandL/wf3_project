
<link rel="stylesheet" href="public/css/app.css" media="all" />

<table class="col-8 mx-auto table table-hover table-bordered">
    <thead class="thead-dark">
        <tr>

                <td>ID Client</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Produit</td>
                <td>Prix</td>
                <td>Date d\'expiration</td>
        </tr>
        </thead>
        @foreach($customer_data as $customer)
        <tr>
                <td>{{$customer['nom']}}</td>
                <td>{{$customer['prenom']}}</td>
                <td>{{$customer['prix']}}</td>
                <td>{{$customer['message']}}</td>
 </tr>
     @endforeach
</table>

