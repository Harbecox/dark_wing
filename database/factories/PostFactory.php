<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition()
    {
        $title = $this->faker->jobTitle;
        $slug = Str::slug($title, '-');
        return [
            'title' => $title,
            'context' => $this->faker->realText(3000),
            'intro' => $this->faker->text,
            'meta_title' => $this->faker->title,
            'meta_description' => $this->faker->text,
            'seo_url' => $slug,
            'enabled' => $this->faker->boolean,
            'image' => ""//$this->faker->image('public/images',100,100, null, false),
        ];
    }
}
