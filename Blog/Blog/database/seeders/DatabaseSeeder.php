<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create()->each(function ($user) {
            Post::factory(5)->create(['user_id' => $user->id])->each(function ($post) use ($user) {
                Comment::factory(3)->create([
                    'post_id' => $post->id,
                    'user_id' => $user->id,
                ]);
            });
        });
    }
}
