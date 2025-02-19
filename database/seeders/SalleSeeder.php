<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\SalleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SalleFactory::factory(10)->create();
    }
}
