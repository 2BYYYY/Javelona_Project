<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['skill' => 'HTML', 'level' => 'inter'],
            ['skill' => 'CSS', 'level' => 'inter'],
            ['skill' => 'JS', 'level' => 'inter'],
        ]);
    }
}
