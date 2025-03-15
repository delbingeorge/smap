<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("semesters")->insert([
            ["semester_number" => "1",],
            ["semester_number" => "2",],
            ["semester_number" => "3",],
            ["semester_number" => "4",],
        ]);
    }
}
