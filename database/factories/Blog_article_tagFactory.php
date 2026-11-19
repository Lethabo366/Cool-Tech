<?php

namespace Database\Factories;

use App\Models\tag;
use App\Models\Blog_article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\article_tag>
 */
class Blog_article_tagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "blog_article_id" => Blog_article::factory()->create()->id,
            "tag_id" => Tag::factory()->create()->id
        ];
    }
}
