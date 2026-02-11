<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill; //THIS IS FOR THE MODEL FOR THE MIGRATION AND THE SEEDERS

class ExperienceController extends Controller {
    public function index() {
        $skills = Skill::all();
        return view('home', compact('skills'));
    }
}
