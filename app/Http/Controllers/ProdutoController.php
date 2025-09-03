<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('pages.produtos.index');
    }

    public function show($id)
    {
        return view('pages.produtos.show', ['produto' => ['id' => $id]]);
    }
}
//tem negocio que não usei mesmo