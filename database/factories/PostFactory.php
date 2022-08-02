<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->name;
        $slug = Str::slug($title, '-');
        return [
            'title' => $title,
            'context' => $this->faker->text,
            'intro' => $this->faker->text,
            'meta_title' => $this->faker->title,
            'meta_description' => $this->faker->text,
            'seo_url' => $slug,
            'enabled' => $this->faker->boolean,
            'image' => $this->faker->image('public/images',100,100, null, false),
        ];
    }
}
