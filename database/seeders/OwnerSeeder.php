<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owners = [
            [
                'first_name' => 'John',
                'last_name' => 'Smith',
                'email' => 'john.smith@example.com',
                'phone' => '(555) 123-4567',
                'company_name' => 'Smith Investments LLC',
                'address_line1' => '123 Main Street',
                'address_line2' => 'Suite 100',
                'city' => 'Charlotte',
                'state' => 'NC',
                'postal_code' => '28202',
                'country' => 'USA',
                'notes' => 'Primary residence owner',
            ],
            [
                'first_name' => 'Sarah',
                'last_name' => 'Johnson',
                'email' => 'sarah.j@example.com',
                'phone' => '(555) 234-5678',
                'company_name' => null,
                'address_line1' => '456 Park Avenue',
                'address_line2' => 'Apt 789',
                'city' => 'New York',
                'state' => 'NY',
                'postal_code' => '10022',
                'country' => 'USA',
                'notes' => 'Investment property owner',
            ],
            [
                'first_name' => 'Michael',
                'last_name' => 'Davis',
                'email' => 'mdavis@example.com',
                'phone' => '(555) 345-6789',
                'company_name' => 'Davis Properties',
                'address_line1' => '789 Beach Drive',
                'address_line2' => null,
                'city' => 'Wilmington',
                'state' => 'NC',
                'postal_code' => '28401',
                'country' => 'USA',
                'notes' => 'Multiple property owner',
            ],
        ];

        foreach ($owners as $owner) {
            \App\Models\Owner::create($owner);
        }

        // Create owner-villa relationships
        $villa1 = \App\Models\Villa::where('unit_number', 'A101')->first();
        $villa2 = \App\Models\Villa::where('unit_number', 'B205')->first();
        $villa3 = \App\Models\Villa::where('unit_number', 'C301')->first();
        $villa4 = \App\Models\Villa::where('unit_number', 'D102')->first();

        $owner1 = \App\Models\Owner::where('email', 'john.smith@example.com')->first();
        $owner2 = \App\Models\Owner::where('email', 'sarah.j@example.com')->first();
        $owner3 = \App\Models\Owner::where('email', 'mdavis@example.com')->first();

        // John Smith owns A101 (primary) and shares B205
        $villa1->owners()->attach($owner1, [
            'is_primary_owner' => true,
            'ownership_percentage' => 100,
            'ownership_start_date' => '2020-01-01',
        ]);
        $villa2->owners()->attach($owner1, [
            'is_primary_owner' => false,
            'ownership_percentage' => 50,
            'ownership_start_date' => '2021-06-15',
        ]);

        // Sarah Johnson owns D102
        $villa4->owners()->attach($owner2, [
            'is_primary_owner' => true,
            'ownership_percentage' => 100,
            'ownership_start_date' => '2019-03-01',
        ]);

        // Michael Davis owns C301 and shares B205
        $villa3->owners()->attach($owner3, [
            'is_primary_owner' => true,
            'ownership_percentage' => 100,
            'ownership_start_date' => '2022-01-01',
        ]);
        $villa2->owners()->attach($owner3, [
            'is_primary_owner' => true,
            'ownership_percentage' => 50,
            'ownership_start_date' => '2021-06-15',
        ]);
    }
}
