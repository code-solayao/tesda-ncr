<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsAndServices extends Controller
{
    public function tvet_programs() {
        return view('programs-and-services.tvet-programs');
    }

    public function comp_stand_dev() {
        return view('programs-and-services.comp-stand-dev');
    }

    public function assess_and_cert() {
        return view('programs-and-services.assess-and-cert');
    }

    public function prog_reg_and_accred() {
        return view('programs-and-services.prog-reg-and-accred');
    }

    public function nat_tesd_plan() {
        return view('programs-and-services.nat-tesd-plan');
    }
}
