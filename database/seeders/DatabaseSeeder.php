<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Rimuru Tempest',
            'email' => 'tempest@example.com',
        ]);

        User::factory()->create([
            'name' => 'Milim Nava',
            'email' => 'nava@example.com',
        ]);

        User::factory()->create([
            'name' => 'Benimaru',
            'email' => 'bini@example.com',
        ]);

        User::factory()->create([
            'name' => 'Shion',
            'email' => 'shion@example.com',
        ]);
    }
}
