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
        /**
         * List of product images at our disposal
         * 
         * @var array
         */
        $images = [
            'small' => [
                '/assets/img/product/small/1.jpg',
                '/assets/img/product/small/2.jpg',
                '/assets/img/product/small/3.jpg',
            ],
            'medium' => collect(range(1, 20))->map(fn ($n) => "/assets/img/product/medium/$n.jpg")->toArray(),
            'large' => [
                'assets/img/product/large/lg-product-1.jpg',
                'assets/img/product/large/lg-product-2.jpg',
                'assets/img/product/large/lg-product-3.jpg',
                'assets/img/product/large/lg-product-4.jpg',
            ],
        ];

        /**
         * A helper function to return random images
         * 
         * @return array
         */
        $get_random_images = fn () => [
            'small' => $this->faker->randomElements($images['small'], 2),
            'medium' => $this->faker->randomElements($images['medium'], 2),
            'large' => $this->faker->randomElements($images['large'], 4),
        ];

        return [
            'name' => $this->faker->name,
            'size' => $this->faker->randomElement(['SMALL', 'MEDIUM', 'LARGE']),
            'color' => $this->faker->safeColorName,
            'price' => $this->faker->numberBetween(100 * 100, 1000 * 100), // in cents
            'images' => $get_random_images(),
            'gender' => $this->faker->randomElement(['MALE', 'FEMALE']),
            'available_amount' => $this->faker->numberBetween(10, 100),
            'rating' => $this->faker->numberBetween(10, 50) / 10, // 1.0 - 5.0
            'discount' => $this->faker->boolean() ? $this->faker->numberBetween(1, 5) * 10 : null,
        ];
    }
}
