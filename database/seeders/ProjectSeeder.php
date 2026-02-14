<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            ['projects'=>'something1', 'difficulty'=>'easy', 'description'=>'something'],
            ['projects'=>'something2', 'difficulty'=>'medium', 'description'=>'something'],
            ['projects'=>'something3', 'difficulty'=>'hard', 'description'=>'something']
        ]);
    }
}
