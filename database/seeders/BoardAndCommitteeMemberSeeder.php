<?php

namespace Database\Seeders;

use App\Models\Owner;
use App\Models\Committee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BoardAndCommitteeMemberSeeder extends Seeder
{
    public function run(): void
    {
        // Create Board Members (Primary Avatar)
        $boardMembers = [
            [
                'first_name' => 'Robert',
                'last_name' => 'Mitchell',
                'email' => 'president@villacapriani.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 123-4567',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-primary.png',
                'role' => 'President',
                'unit_number' => '301',
            ],
            [
                'first_name' => 'Patricia',
                'last_name' => 'Anderson',
                'email' => 'vicepresident@villacapriani.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 234-5678',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-primary.png',
                'role' => 'Vice President',
                'unit_number' => '402',
            ],
            [
                'first_name' => 'Michael',
                'last_name' => 'Thompson',
                'email' => 'treasurer@villacapriani.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 345-6789',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-primary.png',
                'role' => 'Treasurer',
                'unit_number' => '503',
            ],
            [
                'first_name' => 'Elizabeth',
                'last_name' => 'Warren',
                'email' => 'secretary@villacapriani.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 456-7890',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-primary.png',
                'role' => 'Secretary',
                'unit_number' => '204',
            ],
            [
                'first_name' => 'James',
                'last_name' => 'Davidson',
                'email' => 'atlarge@villacapriani.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 567-8901',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-primary.png',
                'role' => 'At Large',
                'unit_number' => '105',
            ],
        ];

        // Create Regular Owners (Neutral Avatar)
        $owners = [
            [
                'first_name' => 'Sarah',
                'last_name' => 'Collins',
                'email' => 'sarah.c@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 678-9012',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-neutral.png',
                'unit_number' => '106',
            ],
            [
                'first_name' => 'David',
                'last_name' => 'Martinez',
                'email' => 'david.m@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 789-0123',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-neutral.png',
                'unit_number' => '207',
            ],
            [
                'first_name' => 'Jennifer',
                'last_name' => 'Wilson',
                'email' => 'jennifer.w@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 890-1234',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-neutral.png',
                'unit_number' => '308',
            ],
            [
                'first_name' => 'Thomas',
                'last_name' => 'Brown',
                'email' => 'thomas.b@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 901-2345',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-neutral.png',
                'unit_number' => '409',
            ],
            [
                'first_name' => 'Lisa',
                'last_name' => 'Garcia',
                'email' => 'lisa.g@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 012-3456',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-neutral.png',
                'unit_number' => '510',
            ],
        ];

        // Create Committee Members (Secondary Avatar)
        $committeeMembers = [
            [
                'first_name' => 'William',
                'last_name' => 'Taylor',
                'email' => 'william.t@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 123-4567',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-secondary.png',
                'unit_number' => '111',
            ],
            [
                'first_name' => 'Mary',
                'last_name' => 'Johnson',
                'email' => 'mary.j@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 234-5678',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-secondary.png',
                'unit_number' => '212',
            ],
            [
                'first_name' => 'Christopher',
                'last_name' => 'Lee',
                'email' => 'chris.l@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 345-6789',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-secondary.png',
                'unit_number' => '313',
            ],
            [
                'first_name' => 'Jessica',
                'last_name' => 'White',
                'email' => 'jessica.w@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 456-7890',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-secondary.png',
                'unit_number' => '414',
            ],
            [
                'first_name' => 'Daniel',
                'last_name' => 'Harris',
                'email' => 'daniel.h@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 567-8901',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-secondary.png',
                'unit_number' => '515',
            ],
            [
                'first_name' => 'Amanda',
                'last_name' => 'Clark',
                'email' => 'amanda.c@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 678-9012',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-secondary.png',
                'unit_number' => '116',
            ],
            [
                'first_name' => 'Kevin',
                'last_name' => 'Lewis',
                'email' => 'kevin.l@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 789-0123',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-secondary.png',
                'unit_number' => '217',
            ],
            [
                'first_name' => 'Michelle',
                'last_name' => 'Robinson',
                'email' => 'michelle.r@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 890-1234',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-secondary.png',
                'unit_number' => '318',
            ],
            [
                'first_name' => 'Steven',
                'last_name' => 'Walker',
                'email' => 'steven.w@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 901-2345',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-secondary.png',
                'unit_number' => '419',
            ],
            [
                'first_name' => 'Rachel',
                'last_name' => 'Hall',
                'email' => 'rachel.h@example.com',
                'password' => Hash::make('password'),
                'phone' => '(555) 012-3456',
                'avatar' => 'images/Branding/Avatars/Single Avatars/avatar-bg-secondary.png',
                'unit_number' => '520',
            ],
        ];

        // Create all owners
        foreach (array_merge($boardMembers, $owners, $committeeMembers) as $ownerData) {
            Owner::create($ownerData);
        }

        // Get committees
        $committees = Committee::all();
        
        // Assign members to committees
        foreach ($committees as $committee) {
            // Assign board liaison
            $boardLiaison = Owner::where('role', 'At Large')->first();
            $committee->members()->attach($boardLiaison->id, [
                'role' => 'board_liaison',
                'team' => 'core',
                'team_priority' => 2,
                'term_start' => now(),
                'term_end' => now()->addYears(2),
            ]);

            // Assign chair (from committee members)
            $chair = Owner::whereNull('role')
                ->where('avatar', 'like', '%secondary%')
                ->inRandomOrder()
                ->first();
            $committee->members()->attach($chair->id, [
                'role' => 'chair',
                'team' => 'core',
                'team_priority' => 2,
                'term_start' => now(),
                'term_end' => now()->addYears(2),
            ]);

            // Assign 2-3 core team members
            $coreMembers = Owner::whereNull('role')
                ->where('avatar', 'like', '%secondary%')
                ->whereNotIn('id', [$chair->id])
                ->inRandomOrder()
                ->take(rand(2, 3))
                ->get();
            foreach ($coreMembers as $member) {
                $committee->members()->attach($member->id, [
                    'role' => 'member',
                    'team' => 'core',
                    'team_priority' => 1,
                    'term_start' => now(),
                    'term_end' => now()->addYears(2),
                ]);
            }

            // Assign 2-3 advisory members (from regular owners)
            $advisoryMembers = Owner::whereNull('role')
                ->where('avatar', 'like', '%neutral%')
                ->inRandomOrder()
                ->take(rand(2, 3))
                ->get();
            foreach ($advisoryMembers as $member) {
                $committee->members()->attach($member->id, [
                    'role' => 'member',
                    'team' => 'advisory',
                    'team_priority' => 0,
                    'term_start' => now(),
                    'term_end' => now()->addYears(1),
                ]);
            }
        }
    }
}
