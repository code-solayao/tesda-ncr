<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsAndServices extends Controller
{
    public function tvet_programs() {
        return view('programs-and-services.tvet-programs');
    }
}
