<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Skill;

class SkillControler extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('home', compact('skills'));
    }
}
