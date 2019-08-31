<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    public function run()
    {
    
        // on crée un tableau dans config/services_zen_et_beaute.php
        // puis on crée une boucle pour récupérer toutes les données qui
        // nous serviront a remplir la base de donnée

        $fakeClients = config('fakeclient');
        foreach($fakeClients as $client) {
            DB::table('clients')->insert([
                'id' => $client['id'],
                'prenom' => $client['prenom'],
                'ville' => $client['ville'],
                'panier_id' => $client['panier_id'],
            ]);
            }
         }
    }

