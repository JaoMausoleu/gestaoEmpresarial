<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function clientes()
    {
        return view('pages.admin.clientes.index');
    }

    public function login()
    {
        return view('pages.admin.login');
    }

    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }

    

    public function fornecedores()
    {
        return "Página de fornecedores (view ainda não criada)";
    }

    public function produtos()
    {
        return "view desse negócio em standby";
    }

    public function produtoShow($slug)
    {
        return "Produto admin: $slug";
    }
}
//fazer uso das coisa aqui dentro: em aguardo 8====D