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
        DB::table('contact')->truncate();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('contact')->insert([
            'introduction'=>'Connect with me!',
            'github'=>'https://github.com/2BYYYY',
            'gmail'=>'iwbjavelona@gmail.com',
            'linkedin'=>'https://www.linkedin.com/in/ignatius-warren-benjamin-javelona-bab7272a4/',

        ]);
    }
};
