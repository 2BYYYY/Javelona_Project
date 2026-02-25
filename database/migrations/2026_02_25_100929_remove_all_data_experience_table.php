<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('experience')->truncate();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('experience')->insert([
            [
                'role'=>'GDG-USLS AI Lead',
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
            ],
        ]);
    }
};
