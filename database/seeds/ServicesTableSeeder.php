<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        // on crée un tableau dans config/services_zen_et_beaute.php
        // puis on crée une boucle pour récupérer toutes les données qui
        // nous serviront a remplir la base de donnée

        $services = config('services_zen_et_beaute');
        foreach($services as $service) {
            DB::table('services')->insert([
                'nom' => $service['nom'],
                'description' => $service['description'],
                'prix' => $service['prix'],
                'categorie_id' => $service['categorie_id'],
            ]);
        }
    }
}
