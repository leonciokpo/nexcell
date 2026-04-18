<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebaController extends Controller
{
    public function nexcell() {
        return view('frontend.Nexcell');
    }

    public function quienesSomos() {
        return view('frontend.quienesSomos');
    }
}