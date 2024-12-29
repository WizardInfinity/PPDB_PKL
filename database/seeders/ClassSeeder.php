<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();

        $class = [
            ['class' => 11],
            ['class' => 12],
            ['class' => 13],
            ['class' => 14]
        ];
        foreach ($class as $data){
        ClassRoom::insert([
            'class' => $data['class'],
            'created_at' => Carbon::now() , 
            'updated_at' => Carbon::now()

        ]);
        }
    }
}
