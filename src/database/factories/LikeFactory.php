<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;


class LikeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id'=>User::inRandomOrder()->value('id'),
            'post_id'=>Post::inRandomOrder()->value('id'),
        ];
    }
}
