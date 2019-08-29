<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // on crée un tableau dans config/categories.php
        // puis on crée une boucle pour récupérer toutes les données qui
        // nous serviront a remplir la base de donnée

        $categories = config('categories');
        foreach($categories as $categorie) {
            DB::table('categories')->insert([
                'nom' => $categorie['nom'],
                'description' => $categorie['description'],
                'slug' => $categorie['slug'],
            ]);
        }
    }
}
