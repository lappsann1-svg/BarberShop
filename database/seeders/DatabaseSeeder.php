<?php

namespace Database\Seeders;

use App\Models\User;
<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 0a5a29f58d1eb073bb43845033db6a4243d82e1d
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    use WithoutModelEvents;

=======
>>>>>>> 0a5a29f58d1eb073bb43845033db6a4243d82e1d
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
    }
}
