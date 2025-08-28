<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $properties = [
            [

                'id' => Str::uuid(),
                'name' => 'Starlight Residence',
                'address' => 'Oyin Jolayemi  Street, Lagos',
                'description' => 'A beautiful, modern apartment in the heart of downtown. Recently renovated with high-end finishes and appliances. Featuring an open floor plan, large windows providing plenty of natural light, and a spacious balcony with city views. Building amenities include a fitness center, rooftop lounge, and 24-hour concierge service..',
                'price' => 3.25,
                'propetyspec' => [
                    'bedrooms' => '3 bedrooms',
                    'bathrooms' => '2 bathrooms',
                    'size' => '1500 sqft',
                ],
                'image_path' => 'https://example.com/images/property1.jpg',
                'image_urls' => [
                    'https://example.com/images/property1_1.jpg',
                    'https://example.com/images/property1_2.jpg',
                    'https://example.com/images/property1_3.jpg',
                ],
                'is_favorite' => false,
            ],

            [
                'id' => Str::uuid(),
                'name' => 'Oceanview Condo',
                'address' => '123 Beachside Ave, Miami, FL',
                'description' => 'A stunning condo with panoramic ocean views. This unit features floor-to-ceiling windows, a gourmet kitchen with stainless steel appliances, and a spacious living area that opens to a private balcony. The building offers resort-style amenities including a pool, fitness center, and direct beach access.',
                'price' => 2.75,
                'propetyspec' => [
                    'bedrooms' => '2 bedrooms',
                    'bathrooms' => '2 bathrooms',
                    'size' => '1200 sqft',
                ],
                'image_path' => 'https://example.com/images/property2.jpg',
                'image_urls' => [
                    'https://example.com/images/property1_1.jpg?',
                    'https://example.com/images/property1_2.jpg?',
                    'https://example.com/images/property1_3.jpg?',
                ],
                'is_favorite' => true,
            ]
        ];

        foreach ($properties as $property) {
            Property::create($property);
        };
    }
}
