<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("icones")->insert([
            "name" => "1",
            "icone" => "fas fa-adjust",
        ]);


        DB::table("icones")->insert([
            "name" => "2",
            "icone" => "fas fa-adjust",

        ]);

        DB::table("icones")->insert([
            "name" => "3",
            "icone" => "fas fa-adjust",

        ]);


        DB::table("icones")->insert([
            "name" => "4",
            "icone" => "far fa-address-book",

        ]);
    }
}
