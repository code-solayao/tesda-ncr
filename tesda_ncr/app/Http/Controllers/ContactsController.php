<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function regional_district_offices() {
        $contacts = Contact::get();
        return view('contacts.regional-district-offices', compact('contacts'));
    }
    
    public function technology_institute() {
        $contacts = Contact::get();
        return view('contacts.technology-institute', compact('contacts'));
    }
}
