<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebaController extends Controller
{
    public function principal() {
        return view('frontend.principal');
    }

    public function quienesSomos() {
        return view('frontend.quienesSomos');
    }

    public function comercializacion(){
        return view('frontend.comercializacion');
    }

    public function terminosYUsos(){
        return view('frontend.terminosYUsos');
    }
}