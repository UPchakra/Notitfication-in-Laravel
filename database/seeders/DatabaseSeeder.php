<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::insert([
            
            'name' => 'Admin',
            'email' => 'chakratimilsina.pro@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '9861099309',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
