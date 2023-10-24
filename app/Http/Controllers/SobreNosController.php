<?php

namespace App\Http\Controllers;

class SobreNosController extends Controller
{
    public function __construct()
    {
        $this->middleware('autenticacao');
    }

    public function sobreNos()
    {
        return view('site.sobrenos');
    }
}
