<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'price' => random_int(1, 999),
            'category' => $this->faker->word,
            'description' => $this->faker->text,
            'gallery' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}
