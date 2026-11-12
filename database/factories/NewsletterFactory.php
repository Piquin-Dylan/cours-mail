<?php

namespace Database\Factories;

use App\Models\Newsletter;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsletterFactory extends Factory
{
    protected $model = Newsletter::class;

    public function definition(): array
    {
        return [
            'title' => fake()->paragraph(),
            'content' => serialize(fake()->paragraphs(5))
        ];
    }
}
