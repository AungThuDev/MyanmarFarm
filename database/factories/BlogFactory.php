<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'first_body' => $this->faker->paragraphs(2, true),
            'second_body' => $this->faker->paragraphs(3, true),
            'image' => 'img1.jpg',
            'first_image' => 'img2.jpg',
            'second_image' => 'img3.jpg'
        ];
    }
}
