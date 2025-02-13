<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1, ['password'=> 'password'])->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com'
        ]);
        $this->call(JobSeeder::class);
    }
}
