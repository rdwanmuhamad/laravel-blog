<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Post::factory(10)->create();
        // $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        // $this->call(PostSeeder::class);
    }
}
