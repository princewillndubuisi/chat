<?php

namespace Database\Seeders;

use App\Models\Disciplines;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisciplinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Disciplines::factory()->count(10)->create();
    }
}
