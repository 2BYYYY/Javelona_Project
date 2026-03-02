<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; 

class ProjectController extends Controller
{
    public function project()
    {
        $projectTable = Project::all();
        return(
            view('pages.projects', [
                'projectTable' => $projectTable
            ])
        );
    }
}
