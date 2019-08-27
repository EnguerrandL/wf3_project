<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // On appel les classes pour générer les données de l'utilisateur admin, les catégories et les services dans notre base de données grace au seeds.
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}
