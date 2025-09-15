<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MenuItem>
 */
class MenuItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name'=>$this->faker->words(2,true),
        'description'=>$this->faker->sentence(),
        'price'=>$this->faker->randomFloat(2,5,100),
        'category'=>$this->faker->randomElement(['breakfast','Main dish','drinks','desserts']),
        'is_available'=>true ,
        'image_path'=>null,
        ];
    }
}
