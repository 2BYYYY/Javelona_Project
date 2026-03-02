<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill; //THIS IS FOR THE MODEL FOR THE MIGRATION AND THE SEEDERS

class SkillController extends Controller
{
    public function skill()
    {
        $skillTable = Skill::all();
        return (
            view('pages.skills', [
                'skillTable' => $skillTable,
            ])
        );
    }
}
