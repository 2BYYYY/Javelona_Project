<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RandomdataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('randomdata')->insert([
        ]);
        /*
        ['page'=>'','section'=>'','content'=>'']
            DB::table('randomdata')->insert([
                ['page'=>'contact','section'=>'section1-img','content'=>'javelona_casual_picture'],
                ['page'=>'contact','section'=>'section1-h1','content'=>'let\'s connect!'],
                ['page'=>'profile','section'=>'global','content'=>'github'],
                ['page'=>'profile','section'=>'global1','content'=>'linkdin'],
                ['page'=>'profile','section'=>'section3-1','content'=>'Skills'],
                ['page'=>'profile','section'=>'section3-2','content'=>'Projects'],
                ['page'=>'profile','section'=>'section3-3','content'=>'Experience'],
                ['page'=>'profile','section'=>'section4-1','content'=>'Socials'],
            ]);
        */
    }
}
