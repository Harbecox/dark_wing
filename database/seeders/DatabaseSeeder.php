<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory(100)->create();

         \App\Models\User::factory()->create([
             'firstName' => 'admin',
             'email' => 'admin@gmail.com',
             'admin_status' => true
         ]);
        $this->call([
            PostSeeder::class
        ]);
    }
}
