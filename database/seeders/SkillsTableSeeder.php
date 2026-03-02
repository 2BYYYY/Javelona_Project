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
            [
                'skill' => 'Python',
                'category'=>'language'
            ],
            [
                'skill' => 'Javascript',
                'category'=>'language'
            ],
            [
                'skill' => 'Java',
                'category'=>'language'
            ],
            [
                'skill' => 'C++',
                'category'=>'language'
            ],
            [
                'skill' => 'C#',
                'category'=>'language'
            ],
            [
                'skill' => 'Shell (Bash)',
                'category'=>'language'
            ],
            [
                'skill' => 'PowerBI',
                'category'=>'others'
            ],
            [
                'skill' => 'Selenium',
                'category'=>'automation'
            ],
            [
                'skill' => 'Postman',
                'category'=>'others'
            ],
            [
                'skill' => 'Rest API\'s',
                'category'=>'others'
            ],
            [
                'skill' => 'Google Cloud Platform',
                'category'=>'others'
            ],
            [
                'skill' => 'Docker',
                'category'=>'others'
            ],
            [
                'skill' => 'Railway',
                'category'=>'others'
            ],
            [
                'skill' => 'MySQL',
                'category'=>'database'
            ],
            [
                'skill' => 'Postgresql',
                'category'=>'database'
            ],
            [
                'skill' => 'ChromaDB',
                'category'=>'database'
            ],
            [
                'skill' => 'DBeaver',
                'category'=>'database'
            ],
            [
                'skill' => 'Apache Airflow',
                'category'=>'automation'
            ],
            [
                'skill' => 'Apache Spark',
                'category'=>'automation'
            ],
            [
                'skill' => 'N8N',
                'category'=>'automation'
            ],
            [
                'skill' => 'DBT',
                'category'=>'automation'
            ],
            [
                'skill' => 'Pandas',
                'category'=>'others'
            ],
            [
                'skill' => 'Git',
                'category'=>'others'
            ],
            [
                'skill' => 'GitHub Actions',
                'category'=>'automation'
            ],
            [
                'skill' => 'React',
                'category'=>'frontend'
            ],
            [
                'skill' => 'Django',
                'category'=>'backend'
            ],
            [
                'skill' => 'Laravel',
                'category'=>'backend'
            ],
        ]);
    }
}
