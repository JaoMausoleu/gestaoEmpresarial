<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function register()
    {
        return view('pages.cadastro');
    }
}
