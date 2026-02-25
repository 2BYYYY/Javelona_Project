<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profile')->insert([
            'name'=>'Ignatius Warren Benjamin Javelona',
            'nickname'=>'Toby',
            'pronouns'=>'he/him',
            'description'=>'Hey, I\'m Ignatius Warren Benjamin Javelona, but you can call me Toby. You might wonder why my nickname is so different from my real name, it\'s a long story. I\'m an easygoing and approachable guy who values teamwork. I blend adaptability, integrity, smart decision-making, and open communication. I\'m always keen to learn new technologies and techniques to help the team perform better.',
            'school'=>'University of St. La Salle',
            'country'=>'Philippines',
            'hobbies'=>'Football, Softball, Baseball, Volleyball',
            'funfact'=>'I love to eat ice, Listen to old war stories, Sometime I just stare at random things',
        ]);
    }
}
