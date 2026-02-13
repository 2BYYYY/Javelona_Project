<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill; //THIS IS FOR THE MODEL FOR THE MIGRATION AND THE SEEDERS

class HomeController extends Controller {
    public function home(){
        return(view('pages.home'));
    }
}
