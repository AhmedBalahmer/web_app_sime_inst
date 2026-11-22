<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images=['1.png','2.png','3.png','4.png','5.png','6.png',];
        return [
            'description'=>fake()->sentence(),
            'slug'=>Str::slug(fake()->sentence(6)),
            'image'=>'posts/'. fake()->randomElement($images),
            'user_id'=>User::factory(),
        ];
    }
}
