<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(PostTagSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(IconeSeeder::class);
        // \App\Models\Post::factory(50)->create();
        // \App\Models\Comment::factory(50)->create();
      
    }
}
