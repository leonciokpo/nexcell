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

    public function contacto(){
        return view('frontend.contacto');
    }

    public function exito(){
        return view('frontend.exito');
    }

    public function smartphones(){
        return view('frontend.productos.smartphones');
    }
    public function accesorios(){
        return view('frontend.productos.accesorios');
    }
}

