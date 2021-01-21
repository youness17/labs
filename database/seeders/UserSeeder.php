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

        DB::table("users")->insert([
            "photo" => "logo.png",
            "name" => "youness",
            "email" => "youness@gmail.com",
            "password" => Hash::make("youness"),
            "role_id" => "1",
        ]);

        DB::table("users")->insert([
            "photo" => "logo.png",
            "name" => "mohamed",
            "email" => "mohamed@gmail.com",
            "password" => Hash::make("mohamed"),
            "role_id" => "2",
        ]);

        
    }
}

