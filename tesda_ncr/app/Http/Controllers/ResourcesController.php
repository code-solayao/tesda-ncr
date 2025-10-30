<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function downloadable_files() {
        return view('tesda-resources.downloadable-files');
    }

    public function lmir() {
        return view('tesda-resources.lmir');
    }
}
