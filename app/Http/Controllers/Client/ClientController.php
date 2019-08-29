<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{



    public function create()
    {
        // CONDITION SECURITE FORMULAIRE CLIENT

        return view('panier.clientsinfos');
    }



    public function store(Request $request)
    {

        $data = $request->validated();

        //STOCKAGE INFOS CLIENT

        $client = new Client;
        $client->nom = $data['nom'];
        $client->prenom = $data['prenom'];
        $client->adresse = $data['adresse'];
        $client->code_postal = $data['code_postal'];
        $client->ville = $data['ville'];
        $client->client_mail = $data['client_mail'];
        $client->telephone = $data['telephone'];
    }



}
