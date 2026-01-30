<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    
    public function run(): void
    {
        User::factory(10)->create();
        
        Post::factory(50)->create();

        Like::factory(200)->make()->each(function ($like) {
            DB::table('likes')->insertOrIgnore($like->toArray());
        });


        Comment::factory(200)->create();
    }
}
