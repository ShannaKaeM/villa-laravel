<?php

namespace Database\Seeders;

use App\Models\Villa;
use Illuminate\Database\Seeder;

class VillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $villas = [
            [
                'unit_number' => 'A101',
                'display_name' => 'Oceanfront Villa A101',
                'description' => 'Beautiful ground-floor oceanfront villa with direct beach access.',
                'floorplan_type' => '1.1',
                'view_type' => 'ocean',
                'floor_level' => 1,
                'stories' => 1,
                'bedrooms' => 2,
                'bathrooms' => 2,
                'square_feet' => 1200,
                'is_featured' => true,
                'is_for_rent' => true,
                'is_for_sale' => false,
                'rental_rate' => 250.00,
                'sale_price' => null,
                'featured_image' => '/images/Villas/featured.jpg',
                'gallery_images' => json_encode([
                    '/images/Villas/villa1.jpg',
                    '/images/Villas/villa3.jpg',
                    '/images/Villas/villa4.jpg'
                ]),
                'floorplan_image' => '/images/Villas/villa1.jpg',
            ],
            [
                'unit_number' => 'B205',
                'display_name' => 'Pool View Villa B205',
                'description' => 'Spacious villa overlooking the resort-style pool area.',
                'floorplan_type' => '2.1',
                'view_type' => 'pool',
                'floor_level' => 2,
                'stories' => 1,
                'bedrooms' => 3,
                'bathrooms' => 2.5,
                'square_feet' => 1500,
                'is_featured' => false,
                'is_for_rent' => true,
                'is_for_sale' => true,
                'rental_rate' => 300.00,
                'sale_price' => 450000.00,
                'featured_image' => '/images/Villas/featured.jpg',
                'gallery_images' => json_encode([
                    '/images/Villas/villa1.jpg',
                    '/images/Villas/villa3.jpg',
                    '/images/Villas/villa4.jpg'
                ]),
                'floorplan_image' => '/images/Villas/villa1.jpg',
            ],
            [
                'unit_number' => 'C301',
                'display_name' => 'Penthouse Villa C301',
                'description' => 'Luxurious penthouse with panoramic ocean views.',
                'floorplan_type' => '3.1',
                'view_type' => 'ocean',
                'floor_level' => 3,
                'stories' => 2,
                'bedrooms' => 4,
                'bathrooms' => 3.5,
                'square_feet' => 2200,
                'is_featured' => true,
                'is_for_rent' => false,
                'is_for_sale' => true,
                'rental_rate' => null,
                'sale_price' => 850000.00,
                'featured_image' => '/images/Villas/featured.jpg',
                'gallery_images' => json_encode([
                    '/images/Villas/villa1.jpg',
                    '/images/Villas/villa3.jpg',
                    '/images/Villas/villa4.jpg'
                ]),
                'floorplan_image' => '/images/Villas/villa1.jpg',
            ],
            [
                'unit_number' => 'D102',
                'display_name' => 'Garden Villa D102',
                'description' => 'Charming villa with private garden access.',
                'floorplan_type' => '1.2',
                'view_type' => 'garden',
                'floor_level' => 1,
                'stories' => 1,
                'bedrooms' => 1,
                'bathrooms' => 1,
                'square_feet' => 800,
                'is_featured' => false,
                'is_for_rent' => true,
                'is_for_sale' => false,
                'rental_rate' => 150.00,
                'sale_price' => null,
                'featured_image' => '/images/Villas/featured.jpg',
                'gallery_images' => json_encode([
                    '/images/Villas/villa1.jpg',
                    '/images/Villas/villa3.jpg',
                    '/images/Villas/villa4.jpg'
                ]),
                'floorplan_image' => '/images/Villas/villa1.jpg',
            ],
        ];

        foreach ($villas as $villa) {
            \App\Models\Villa::create($villa);
        }
    }
}
