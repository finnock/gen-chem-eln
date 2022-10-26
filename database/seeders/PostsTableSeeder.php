<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'slug' => 'first-blog-post',
                'title' => 'Seeded Title',
                'body' => 'This is a very nice body.'
            ],
            [
                'slug' => 'second-blog-post',
                'title' => 'Another Seeded Title',
                'body' => 'This is another very nice body.'
            ]
        ];
        
        foreach($posts as $key => $post) {
            Post::create($post);
        }
    }
}
