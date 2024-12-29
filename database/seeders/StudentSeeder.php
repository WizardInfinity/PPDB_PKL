<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $student =[
        //     ['nama' => 'AKU', 'gender' => 'P', 'nis' => '001', 'class_id' => 1],
        //     ['nama' => 'SAYA', 'gender' => 'L', 'nis' => '002', 'class_id' => 2],
        //     ['nama' => 'ME', 'gender' => 'P', 'nis' => '003', 'class_id' => 3],
        //     ['nama' => 'ANA', 'gender' => 'L', 'nis' => '004', 'class_id' => 4],
        // ];

        // foreach ($student as $data){
        //     Student::insert ([
        //         'nama' => $data ['nama'],
        //         'gender' => $data ['gender'],
        //         'nis' => $data ['nis'],
        //         'class_id' => $data ['class_id'],
        //         'created_at' => Carbon::now() , 
        //         'updated_at' => Carbon::now()
        //     ]);
        // }

        Student::factory()->count(5)->create(); 
    }
}
