<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Contact;
use App\Models\Randomdata;

class ProfileController extends Controller
{
    public function profile(){
        $randomdataTable = Randomdata::whereIn('section',['global','section3-1','section3-2','section3-3','section4-1','section2'])->get()->keyBy('section');
        $profileTable = Profile::findOrFail(1);
        $skillTable = Skill::whereIn('skill', ['Python','Javascript','React','Laravel','Postgresql'])->orderBY('skill', 'desc')->get();
        $projectTable = Project::all();
        $experienceTable = Experience::all();
        $contactTable = Contact::whereIn('platform', ['github','linkdin'])->get();
        return view('pages.profile',[
            'profileTable' => $profileTable,
            'skillTable' => $skillTable,
            'projectTable' => $projectTable,
            'experienceTable' => $experienceTable,
            'contactTable' => $contactTable,
            'randomdataTable' => $randomdataTable
        ]);
    }
}
