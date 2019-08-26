<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Enguerrand',
            'email' => 'enguerrandtestt@gmail.com',
            'password' => bcrypt('enguerrandtest'),
        ]);
        // Laurent ALLEGRE

    }
}
