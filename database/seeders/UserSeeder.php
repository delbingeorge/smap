<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Data that must present in the table are given here. and this seeder is run to insert these data into the table. 

        //Admin/HOD
        DB::table("users")->insert([
            "user_id" => "admin123",
            "email" => "admin@example.com",
            "password" => bcrypt("password"),
            "role" => "admin",
        ]);
        DB::table("users")->insert([
            "user_id" => "hod23mca",
            "email" => "hod@example.com",
            "password" => bcrypt("hod"),
            "role" => "hod",
        ]);
        DB::table("teachers")->insert([
            "emp_id" => "hod23mca",
            "fullname" => "Mamatha Balipa",
            "designation" => "Professor",
            "email" => "hod@example.com",
            "contact" => "1234567890",
        ]);
    }
}
