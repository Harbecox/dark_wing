<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CountrySeeder::class);

        \App\Models\User::factory(10)->create();

        \App\Models\Airport::factory(11)->create();

        \App\Models\User::factory()->create([
            'firstName' => 'admin',
            'email' => 'admin@gmail.com',
            'admin_status' => true

        ]);

        Post::factory()->count(12)->create();
    }
}
