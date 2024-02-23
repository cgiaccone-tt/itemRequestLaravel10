<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'My first post',
                'excerpt' => 'This is my first post with more than 100 characters.',
                'body' => 'This is the body of my first post. It is a long text with more than 100 characters.',
                'image_path' => 'https://via.placeholder.com/150',
                'is_published' => false,
                'min_to_read' => 2,
            ],
            [
                'title' => 'My second post',
                'excerpt' => 'This is my second post with more than 100 characters.',
                'body' => 'This is the body of my second post. It is a long text with more than 100 characters.',
                'image_path' => 'https://via.placeholder.com/150',
                'is_published' => false,
                'min_to_read' => 2,
            ],
            [
                'title' => 'My third post',
                'excerpt' => 'This is my third post with more than 100 characters.',
                'body' => 'This is the body of my third post. It is a long text with more than 100 characters.',
                'image_path' => 'https://via.placeholder.com/150',
                'is_published' => false,
                'min_to_read' => 2,
            ],
        ];

        foreach($posts as $key => $value) {
            Post::create($value);
        }
    }
}
