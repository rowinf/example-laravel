<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::factory()->create(['id' => 1, 'title' => 'JavaScript', 'level' => 7]);
        Skill::factory()->create(['id' => 2, 'title' => 'CSS', 'level' => 5]);
        Skill::factory()->create(['id' => 3, 'title' => 'HTML', 'level' => 4]);
    }
}
