<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience; 
use Illuminate\Support\Str;

class ExperienceController extends Controller
{
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
}
