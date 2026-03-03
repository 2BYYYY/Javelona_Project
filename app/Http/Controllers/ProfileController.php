<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Contact;

class ProfileController extends Controller
{
    public function profile(){
        $profileTable = Profile::findOrFail(1);
        $skillTable = Skill::whereIn('skill', ['Python','Javascript','React','Laravel','Postgresql'])->orderBY('skill', 'desc')->get();
        $projectTable = Project::all();
        $experienceTable = Experience::all();
        $contactTable = Contact::findOrFail(1);;
        return view('pages.profile',[
            'profileTable' => $profileTable,
            'skillTable' => $skillTable,
            'projectTable' => $projectTable,
            'experienceTable' => $experienceTable,
            'contactTable' => $contactTable
        ]);
    }
}
