<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("roles")->insert([
            "name" => "Admin", 
            "date_added" => "1234567890",
            "last_modified" => "1234567890"
        ]);
        
        DB::table("roles")->insert([
            "name" => "User", 
            "date_added" => "1234567890",
            "last_modified" => "1234567890"
        ]);
    }
}
