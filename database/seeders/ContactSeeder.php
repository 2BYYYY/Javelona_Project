<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact')->insert([
            ['platform'=>'linkdin','link'=>'https://www.linkedin.com/in/ignatius-warren-benjamin-javelona-bab7272a4/'],
            ['platform'=>'github','link'=>'https://github.com/2BYYYY'],
            ['platform'=>'gmail','link'=>'iwbjavelona@gmail.com'],
            ['platform'=>'facebook','link'=>'https://www.facebook.com/TTOO33YY/'],
        ]);
    }
}
