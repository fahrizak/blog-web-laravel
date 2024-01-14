<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => $this->faker->sentence(mt_rand(3,6)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(20),
            // 'body' => '<p>' . implode('</p><p>',$this->faker->paragraphs(mt_rand(4,5))) . '</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(4,5)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,4)
        ];
    }
}
