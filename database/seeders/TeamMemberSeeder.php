<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            [
                'name' => 'Bharatbhai Arjanbhai Dobariya',
                'role' => 'Director',
                'description' => 'Drives strategic growth, manufacturing development, and business expansion at NIRVA Technoplast.',
                'image' => 'front/img/team-1.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Tarangkumar Ashvinbhai Gaudani',
                'role' => 'Director',
                'description' => 'Focuses on production operations, process efficiency, and precision manufacturing capabilities.',
                'image' => 'front/img/team-3.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Rinkal Satyamkumar Kanani',
                'role' => 'Director',
                'description' => 'Supports business administration, quality-focused operations, and sustainable organizational growth.',
                'image' => 'front/img/team-4.jpg',
                'status' => 1,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::create($member);
        }
    }
}
