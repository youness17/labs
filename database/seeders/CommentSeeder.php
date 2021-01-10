<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table("comments")->insert([
            "name" => "youness",
            "subject" => "commentaire test 1",
            "message" => "commentaire test message 1",
            "post_id" => "1",
        ]);

        DB::table("comments")->insert([
            "name" => "youness",
            "subject" => "commentaire test 2",
            "message" => "commentaire test message 2",
            "post_id" => "2",
        ]);
    }
}
