<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Post;

class CommentFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'user_id'=>User::inRandomOrder()->first()->id,
            'post_id'=>Post::inRandomOrder()->first()->id,
            'content' => $this->faker->sentence(15),
        ];
    }
}
