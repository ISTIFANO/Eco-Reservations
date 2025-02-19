<?php

namespace Database\Seeders;

use App\Models\Salle;
use Illuminate\Database\Seeder;
use Database\Factories\SalleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        Salle::factory(10)->create();

    }
}
