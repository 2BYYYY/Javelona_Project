<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience; 
use Illuminate\Support\Str;

class ExperienceController extends Controller
{   
    //READ
    public function experience()
    {
        $experienceTable = Experience::all();
        foreach( $experienceTable as $et ){
            $et->slug =  Str::slug($et->role,'-');
        }   
        return(
            view('pages.experience',[
                'experienceTable' => $experienceTable

            ])
        );

    }
    //CREATE FORM
    public function create(){
        return view('pages.experience');
    }
    //STORE DATA
    public function store(Request $request){
        $validated = $request->validate([
            'role' => 'required|max:255',
            'duration' => 'nullable',
            'description' => 'required'
        ]);

        Experience::create($validated);

        return redirect()->route('pages.experience')
                         ->with('success', 'Project updated successfully');
    }
    //EDIT FORM
    public function edit(Project $project){
        return view('');
    }
    //UPDATE DATA
    public function update(Request $request, Project $project){
        $validated = $request->validate([
            'role' => 'required|max:255',
            'duration' => 'nullable',
            'description' => 'required'
        ]);

        $project::update($validated);

        return redirect()->route('pages.experience')
                         ->with('success', 'Project updated successfully');
    }
}
