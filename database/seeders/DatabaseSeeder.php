<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Prestation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    public function run(): void
    {
        User::factory()->create([
            'email' => 'axel.demeyere59@gmail.com',
            'name' => "Bib's"
        ]);

        User::factory()->create([
            'email' => 'manonbrowaeys@gmail.com',
            'name' => 'Manon'
        ]);

        Prestation::factory(10)->create();
    }

}
