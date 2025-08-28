<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Property::class;

    public function definition(): array
    {
        return [
            //
            'id' => Str::uuid(),
            'name' => fake()->name(),
            'address' => fake()->address(),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 50000, 1000000),
            'propetyspec' => [
                'bedrooms' => fake()->numberBetween(1, 5),
                'bathrooms' => fake()->numberBetween(1, 3),
                'size' => fake()->numberBetween(500, 5000) . ' sqft',
            ],
            'image_path' => fake()->imageUrl(640, 480, 'house', true),
            'image_urls' => [
                fake()->imageUrl(640, 480, 'house', true),
                fake()->imageUrl(640, 480, 'house', true),
                fake()->imageUrl(640, 480, 'house', true),
            ],
            'is_favorite' => fake()->boolean(),
        ];
    }
}
