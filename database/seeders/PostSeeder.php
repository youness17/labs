<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("posts")->insert([
            "img" => "01.jpg",
            "titre" => "post titre 1",
            "texte" => "poste text 1",
            "description" => "description text 1",
            "user_id" => "1",
        ]);

        DB::table("posts")->insert([
            "img" => "02.jpg",
            "titre" => "post titre 2",
            "texte" => "poste text 2",
            "description" => "description text 2",
            "user_id" => "2",
        ]);
    }
}

