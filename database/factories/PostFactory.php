<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Post::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'title' => $this->faker->name(),
            'content' => $this->faker->text(),
            'published' => $this->faker->boolean()
        ];
    }
}
