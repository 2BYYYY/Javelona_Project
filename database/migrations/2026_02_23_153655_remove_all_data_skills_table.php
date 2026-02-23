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
        DB::table("skills")->truncate();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('skills')->insert([
            ['skill' => 'Python', 'level' => 'inter'],
            ['skill' => 'CSS', 'level' => 'inter'],
            ['skill' => 'JS', 'level' => 'inter'],
        ]);
    }
};
