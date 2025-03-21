<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        //
        //         Category::create([
        //             'name' => 'Web Design',
        //             'slug' => 'web-design',
        //         ]);
        //
        //         Post::create([
        //             'title' => 'Judul Artikel 1',
        //             'author_id' => 1,
        //             'category_id' => 1,
        //             'slug' => 'judul-artikel-1',
        //             'body' => 'Tempor sunt ex non nulla labore commodo velit labore duis aliquip. Voluptate cillum mollit sint consequat deserunt. Reprehenderit mollit sint ea esse proident eiusmod officia. Adipisicing commodo amet minim cillum non voluptate sint sunt duis esse.'
        //         ]);
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }
}
