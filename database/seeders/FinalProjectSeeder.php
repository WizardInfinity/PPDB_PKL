<?php

namespace Database\Seeders;

use App\Models\FinalProject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FinalProjectSeeder extends Seeder
{
    public function run()
    {
        FinalProject::factory()->count(5)->create(); 
    }
}
