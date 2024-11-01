<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
use App\Models\Employer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Employer::factory()->create();
        Job::factory()->create(new Sequence([
            'featured' => false,
            'schedule' => 'Full Time'
        ],[
            'featured' => true,
            'schedule' => 'Part Time'
        ]));
        Tag::factory()->create();
    }
}
