<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        $contactTable = Contact::all();
        return (
            view('pages.contact',[
                'contactTable' => $contactTable
            ])
        );
    }   
}
