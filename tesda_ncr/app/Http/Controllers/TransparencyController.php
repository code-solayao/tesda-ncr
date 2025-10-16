<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransparencyController extends Controller
{
    public function transparency_seal() {
        return view('transparency.transparency-seal');
    }
}
