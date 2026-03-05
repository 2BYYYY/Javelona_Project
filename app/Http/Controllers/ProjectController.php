<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; 
use App\Models\Randomdata;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function project()
    {
        $randomdataTable = Randomdata::whereIn('section',['global'])->firstOrFail();
        $projectTable = Project::all();
        foreach($projectTable as $pt) {
            // https://api.laravel.com/docs/9.x/Illuminate/Support/Str.html
            // Generate a URL friendly "slug" from a given string
            $pt->slug = Str::slug( $pt-> project_name, '-');
        }
        return(
            view('pages.projects', [
                'projectTable' => $projectTable,
                'randomdataTable' => $randomdataTable
            ])
        );
    }
}
