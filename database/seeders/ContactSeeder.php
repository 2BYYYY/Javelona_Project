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
            'introduction'=>'Connect with me!',
            'github'=>'https://github.com/2BYYYY',
            'gmail'=>'iwbjavelona@gmail.com',
            'linkedin'=>'https://www.linkedin.com/in/ignatius-warren-benjamin-javelona-bab7272a4/',

        ]);
    }
}
