<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function regional_district_offices() {
        return view('contacts.regional-district-offices');
    }
}
