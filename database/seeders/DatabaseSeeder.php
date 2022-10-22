<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        //$this->call(CountrySeeder::class);

        //$this->call(AirportSeeder::class);

//        \App\Models\User::factory()->create([
//            'firstName' => 'admin',
//            'email' => 'admin@gmail.com',
//            'admin_status' => true
//
//        ]);
//
//        Post::factory()->count(12)->create();

        $this->call(PagesSeeder::class);
    }
}
