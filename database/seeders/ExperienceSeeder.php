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
            [
                'role'=>'GDG-USLS AI Lead ',
                'duration'=>'2024-2025',
                'description'=>'Lead the AI Department of GDG-USLS, made an automation project for our photobooth, co-handled an AI event called Build with AI'
            ],
            [
                'role'=>'CET-USLS SPICOM Undersecretary',
                'duration'=>'2024-2025',
                'description'=>'Assisted the LChamp Champion for our college'
            ],
            [
                'role'=>'DEVCON Bacolod Programs Volunteer',
                'duration'=>'2023-2025',
                'description'=>'Made connections with other DEVCON members'
            ]
        ]);
    }
}
