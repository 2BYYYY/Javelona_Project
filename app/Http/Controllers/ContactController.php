<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Randomdata;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function contact()
    {
        $contactTable = Contact::all();
        $randomdataTable = Randomdata::whereIn('section', ['section1-img', 'section1-h1'])->get()->keyBy('section');
        return (
            view('pages.contact',[
                'contactTable' => $contactTable,
                'randomdataTable' => $randomdataTable
            ])
        );
    }   
}
