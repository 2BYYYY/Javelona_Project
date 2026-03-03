<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function contact()
    {
        $contactTable = Contact::findOrFail(1);
        $contactTable->slug = Str::slug($contactTable->introduction,'-'); 
        return (
            view('pages.contact',[
                'contactTable' => $contactTable
            ])
        );
    }   
}
