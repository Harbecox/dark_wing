<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\Airport::factory(30)->create();

         \App\Models\User::factory()->create([
             'firstName' => 'admin',
             'email' => 'admin@gmail.com',
             'admin_status' => true
         ]);

         $this->call(CountrySeeder::class);
//        $this->call([
//            PostSeeder::class
//        ]);
    }
}
