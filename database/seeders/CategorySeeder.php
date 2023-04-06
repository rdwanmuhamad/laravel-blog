<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'name' => 'HTML',
            'slug' => 'html',
        ]);

        $category = Category::create([
            'name' => 'CSS',
            'slug' => 'css',
        ]);

        $category = Category::create([
            'name' => 'PHP',
            'slug' => 'php',
        ]);

        $category = Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
        ]);
    }
}
