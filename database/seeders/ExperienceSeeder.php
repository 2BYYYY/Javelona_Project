<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experience')->insert([
            [['role'=>'something1','duration'=>'2025','description'=>'something']],
            [['role'=>'something2','duration'=>'2025','description'=>'something']],
            [['role'=>'something3','duration'=>'2025','description'=>'something']]
        ]);
    }
}
