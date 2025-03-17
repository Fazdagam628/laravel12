<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'bg-yellow-500 hover:bg-yellow-700'
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'bg-red-500 hover:bg-red-700'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'bg-blue-500 hover:bg-blue-700'
        ]);
        Category::create([
            'name' => 'Data Analyst',
            'slug' => 'data-analyst',
            'color' => 'bg-green-500 hover:bg-green-700'
        ]);
    }
}
